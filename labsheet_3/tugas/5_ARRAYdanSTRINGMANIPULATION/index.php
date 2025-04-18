<?php
$mahasiswa = ["Andi", "Budi", "Citra", "Dewi", "Eko"];

echo "<h2>Daftar Nama Mahasiswa</h2>";
foreach ($mahasiswa as $nama) {
    echo "$nama<br>";
}

$teks = "Selamat datang di dunia pemrograman PHP!";
$teksUpper = strtoupper($teks); 
$teksReplace = str_replace("PHP", "web development", $teks); 

echo "<h2>String Manipulasi</h2>";
echo "Teks Asli: $teks<br>";
echo "Teks Huruf Besar: $teksUpper<br>";
echo "Teks Setelah Penggantian: $teksReplace<br>";
?>