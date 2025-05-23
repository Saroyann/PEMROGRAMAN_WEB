<?php
require_once '../config/Database.php';

$database = new Database();
$pdo = $database->getConnection();


if (isset($_GET['id'])) {
    $id = $_GET['id'];
    $stmt = $pdo->prepare("SELECT * FROM mahasiswa WHERE id = ?");
    $stmt->execute([$id]);
    $mahasiswa = $stmt->fetch(PDO::FETCH_OBJ);

    if (!$mahasiswa) {
        die("Data tidak ditemukan!");
    }
} else {
    header('Location: index.php');
    exit;
}

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $nim = $_POST['nim'];
    $nama = $_POST['nama'];
    $prodi = $_POST['prodi'];

    if (!empty($nim) && !empty($nama) && !empty($prodi)) {
        $stmt = $pdo->prepare("UPDATE mahasiswa SET nim = ?, nama = ?, prodi = ? WHERE id = ?");
        $stmt->execute([$nim, $nama, $prodi, $id]);

        header('Location: index.php');
        exit;
    } else {
        $error = "Semua field harus diisi!";
    }
}
?>

<h2>Edit Mahasiswa</h2>
<?php if (!empty($error)): ?>
    <p style="color: red;"><?= htmlspecialchars($error) ?></p>
<?php endif; ?>
<form method="POST" action="">
    <label for="nim">NIM:</label><br>
    <input type="text" id="nim" name="nim" value="<?= htmlspecialchars($mahasiswa->nim) ?>" required><br><br>

    <label for="nama">Nama:</label><br>
    <input type="text" id="nama" name="nama" value="<?= htmlspecialchars($mahasiswa->nama) ?>" required><br><br>

    <label for="prodi">Prodi:</label><br>
    <select id="prodi" name="prodi" required>
        <option value="Teknik Informatika" <?= $mahasiswa->prodi === 'Teknik Informatika' ? 'selected' : '' ?>>Teknik Informatika</option>
        <option value="Sistem Informasi" <?= $mahasiswa->prodi === 'Sistem Informasi' ? 'selected' : '' ?>>Sistem Informasi</option>
        <option value="Bisnis Digital" <?= $mahasiswa->prodi === 'Bisnis Digital' ? 'selected' : '' ?>>Bisnis Digital</option>
    </select><br><br>

    <button type="submit">Simpan</button>
    <a href="index.php">Batal</a>
</form>