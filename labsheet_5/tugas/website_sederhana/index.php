<?php
session_start();
if (!isset($_SESSION["user"])) {
    header("Location: login.php");
    exit();
}

$data_mahasiswa = file("data_mahasiswa.txt", FILE_IGNORE_NEW_LINES);
$hasil_pencarian = $data_mahasiswa;


if (isset($_GET['cari'])) {
    $cari = htmlspecialchars($_GET['cari']);
    $hasil_pencarian = array_filter($data_mahasiswa, function ($data) use ($cari) {
        list($nama, $nim, $jurusan) = explode("|", $data);
        return strpos($nim, $cari) !== false;
    });
}
?>
<!DOCTYPE html>
<html>

<head>
    <title>Data Mahasiswa</title>
</head>

<body>
    <h2>Daftar Mahasiswa</h2>
    <a href="tambah.php">Tambah Mahasiswa</a> | <a href="logout.php">Logout</a>
    <form method="GET" style="margin-top: 10px;">
        <label for="cari">Cari berdasarkan NIM:</label>
        <input type="text" name="cari" id="cari" value="<?= isset($_GET['cari']) ? htmlspecialchars($_GET['cari']) : '' ?>">
        <button type="submit">Cari</button>
    </form>
    <table border="1" style="margin-top: 10px;">
        <tr>
            <th>Nama</th>
            <th>NIM</th>
            <th>Jurusan</th>
            <th>CV</th>
            <th>Aksi</th>
        </tr>
        <?php if (empty($hasil_pencarian)): ?>
            <tr>
                <td colspan="5" style="text-align: center;">Data tidak ditemukan</td>
            </tr>
        <?php else: ?>
            <?php foreach ($hasil_pencarian as $data): ?>
                <?php list($nama, $nim, $jurusan) = explode("|", $data); ?>
                <tr>
                    <td><?= $nama ?></td>
                    <td><?= $nim ?></td>
                    <td><?= $jurusan ?></td>
                    <td>
                        <?php if (file_exists("uploads/$nim.pdf")): ?>
                            <a href="uploads/<?= $nim ?>.pdf" target="_blank">Download</a>
                        <?php else: ?>
                            Tidak ada file
                        <?php endif; ?>
                    </td>
                    <td>
                        <a href="edit.php?nim=<?= $nim ?>">Edit</a> |
                        <a href="hapus.php?nim=<?= $nim ?>">Hapus</a> |
                        <a href="upload.php?nim=<?= $nim ?>">Upload CV</a>
                    </td>
                </tr>
            <?php endforeach; ?>
        <?php endif; ?>
    </table>
</body>

</html>