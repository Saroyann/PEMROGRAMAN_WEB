<?php
session_start();
if (!isset($_SESSION["user"])) {
    header("Location: login.php");
    exit();
}

if (!isset($_GET['nim'])) {
    header("Location: index.php");
    exit();
}

$nim = $_GET['nim'];
$data_mahasiswa = file("data_mahasiswa.txt", FILE_IGNORE_NEW_LINES);
$mahasiswa = null;

foreach ($data_mahasiswa as $key => $data) {
    list($nama, $nim_data, $jurusan) = explode("|", $data);
    if ($nim_data == $nim) {
        $mahasiswa = ['key' => $key, 'nama' => $nama, 'nim' => $nim_data, 'jurusan' => $jurusan];
        break;
    }
}

if (!$mahasiswa) {
    header("Location: index.php");
    exit();
}

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $nama_baru = htmlspecialchars($_POST["nama"]);
    $nim_baru = htmlspecialchars($_POST["nim"]);
    $jurusan_baru = htmlspecialchars($_POST["jurusan"]);

    $data_mahasiswa[$mahasiswa['key']] = "$nama_baru|$nim_baru|$jurusan_baru";
    file_put_contents("data_mahasiswa.txt", implode(PHP_EOL, $data_mahasiswa) . PHP_EOL);

    header("Location: index.php");
    exit();
}
?>
<!DOCTYPE html>
<html>

<head>
    <title>Edit Mahasiswa</title>
</head>

<body>
    <h2>Edit Data Mahasiswa</h2>
    <form method="POST">
        <label>Nama:</label>
        <input type="text" name="nama" value="<?= $mahasiswa['nama'] ?>" required><br>
        <label>NIM:</label>
        <input type="text" name="nim" value="<?= $mahasiswa['nim'] ?>" required><br>
        <label>Jurusan:</label>
        <input type="text" name="jurusan" value="<?= $mahasiswa['jurusan'] ?>" required><br>
        <button type="submit">Simpan</button>
    </form>
</body>

</html>