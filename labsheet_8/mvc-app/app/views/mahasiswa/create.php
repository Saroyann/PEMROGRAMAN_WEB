<?php
require_once '../config/Database.php';

// Buat instance dari kelas Database dan dapatkan koneksi
$database = new Database();
$pdo = $database->getConnection();

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $nim = $_POST['nim'];
    $nama = $_POST['nama'];
    $prodi = $_POST['prodi'];

    if (!empty($nim) && !empty($nama) && !empty($prodi)) {
        $stmt = $pdo->prepare("INSERT INTO mahasiswa (nim, nama, prodi) VALUES (?, ?, ?)");
        $stmt->execute([$nim, $nama, $prodi]);

        header('Location: index.php');
        exit;
    } else {
        $error = "Semua field harus diisi!";
    }
}
?>

<h2>Tambah Mahasiswa</h2>
<?php if (!empty($error)): ?>
    <p style="color: red;"><?= htmlspecialchars($error) ?></p>
<?php endif; ?>
<form method="POST" action="">
    <label for="nim">NIM:</label><br>
    <input type="text" id="nim" name="nim" required><br><br>

    <label for="nama">Nama:</label><br>
    <input type="text" id="nama" name="nama" required><br><br>

    <label for="prodi">Prodi:</label><br>
    <select id="prodi" name="prodi" required>
        <option value="Teknik Informatika">Teknik Informatika</option>
        <option value="Sistem Informasi">Sistem Informasi</option>
        <option value="Bisnis Digital">Bisnis Digital</option>
    </select><br><br>

    <button type="submit">Simpan</button>
    <a href="index.php">Batal</a>
</form>