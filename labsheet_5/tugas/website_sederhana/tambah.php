<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $nama = $_POST["nama"];
    $nim = $_POST["nim"];
    $jurusan = $_POST["jurusan"];
    $data = "$nama|$nim|$jurusan\n";
    file_put_contents("data_mahasiswa.txt", $data, FILE_APPEND);

    header("Location: index.php");
    exit();
}
?>
<!DOCTYPE html>
<html>

<head>
    <title>Tambah Mahasiswa</title>
</head>

<body>
    <h2>Tambah Data Mahasiswa</h2>
    <form method="POST">
        <label>Nama:</label>
        <input type="text" name="nama" required><br>
        <label>NIM:</label>
        <input type="text" name="nim" required><br>
        <label>Jurusan:</label>
        <input type="text" name="jurusan" required><br>
        <button type="submit">Simpan</button>
    </form>
</body>

</html>