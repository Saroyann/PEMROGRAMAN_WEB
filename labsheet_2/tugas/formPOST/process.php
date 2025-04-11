<?php
if($_SERVER["REQUEST_METHOD"] == "POST") {
    $nama = $_POST["nama"];
    $jenis_kelamin = $_POST["jenis_kelamin"];
    $hobi = $_POST["hobi"];
    $negara = $_POST["negara"];
    $alamat = $_POST["alamat"];

    echo "Nama: " . htmlspecialchars($nama) . "<br>";
    echo "Jenis Kelamin: " . htmlspecialchars($jenis_kelamin) . "<br>";
    echo "Hobi: " . htmlspecialchars(implode(", ", $hobi)) . "<br>";
    echo "Negara: " . htmlspecialchars($negara) . "<br>";
    echo "Alamat: " . htmlspecialchars($alamat) . "<br>";
} else {
    echo "Tidak ada data yang dikirim.";
}
?>