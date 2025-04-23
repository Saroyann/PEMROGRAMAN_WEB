<?php
// filepath: c:\xampp\htdocs\labsheet2\labsheet_3\tugas\6_FUNCTION\index.php

function luasLingkaran($radius) {
    $pi = 3.14; // Nilai pi
    return $pi * $radius * $radius; }

$luas = null;
if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $radius = $_POST['radius']; 
    if (is_numeric($radius) && $radius > 0) {
        $luas = luasLingkaran($radius);
    } else {
        $error = "Masukkan nilai radius yang valid (angka positif).";
    }
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Perhitungan Luas Lingkaran</title>
</head>
<body>
    <h2>Perhitungan Luas Lingkaran</h2>
    <form method="POST" action="">
        <label for="radius">Masukkan Radius:</label>
        <input type="text" name="radius" id="radius" required>
        <button type="submit">Hitung</button>
    </form>

    <?php if (isset($error)): ?>
        <p style="color: red;"><?php echo $error; ?></p>
    <?php elseif ($luas !== null): ?>
        <p>Radius: <?php echo htmlspecialchars($radius); ?></p>
        <p>Luas Lingkaran: <?php echo $luas; ?></p>
    <?php endif; ?>
</body>
</html>