<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>doc</title>
</head>
<htm>
    <h2>Nilai Kelulusan</h2>
    <form action="" method="post">
        <label for="nilai">masukkan nilai</label>
        <input type="text" name="nilai" id="nilai" required>
        <button type="submit">klik</button>
    </form>

    <?php 
    if ($_SERVER['REQUEST_METHOD'] === 'POST') {
        $iniNilai = $_POST["nilai"];

        // Validasi input
        if (is_numeric($iniNilai)) {
            if ($iniNilai == null) {
                echo "";
            }
            elseif ($iniNilai < 75) {
                echo "<p style='color: red;'>Tidak Lulus</p>";
            } else {
                echo "<p style='color: green;'>Lulus</p>";
            }
        } else {
            echo "<p style='color: red;'>Masukkan nilai yang valid (angka).</p>";
        }
    }
    ?>

    </body>

</html>

<?php
$nilai = 75;

echo "<h2>Perulangan Angka 1-10</h2>";
for ($i = 1; $i <= 10; $i++) {
    echo "$i<br>";
}
?>