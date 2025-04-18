<?php
function luasLingkaran($radius) {
    $pi = 3.14; // Nilai pi
    return $pi * $radius * $radius; 
}


$radius = 7;
$luas = luasLingkaran($radius);

echo "<h2>Perhitungan Luas Lingkaran</h2>";
echo "Radius: $radius<br>";
echo "Luas Lingkaran: $luas<br>";
?>