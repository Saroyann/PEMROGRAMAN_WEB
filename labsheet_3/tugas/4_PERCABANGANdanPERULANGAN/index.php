<?php
$nilai = 75;

echo "<h2>Status Kelulusan</h2>";
if ($nilai >= 75) {
    echo "Nilai Anda: $nilai. Status: Lulus<br>";
} else {
    echo "Nilai Anda: $nilai. Status: Tidak Lulus<br>";
}

echo "<h2>Perulangan Angka 1-10</h2>";
for ($i = 1; $i <= 10; $i++) {
    echo "$i<br>";
}
?>