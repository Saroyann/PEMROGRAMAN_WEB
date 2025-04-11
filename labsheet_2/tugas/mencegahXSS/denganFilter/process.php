<?php
$errors = []; 
if($_SERVER["REQUEST_METHOD"] == "POST") {
    $nama = $_POST["nama"] ?? '';
    $umur = $_POST["umur"] ?? '';
    $hobi = $_POST["hobi"] ?? '';

    if(empty($nama)) $errors[] = "Nama tidak boleh kosong";
    if(empty($umur)) {
        $errors[] = "Umur tidak boleh kosong";
    } else if(!is_numeric($umur)) {
        $errors[] = "Umur harus berupa angka";
    }
    if(empty($hobi)) $errors[] = "Hobi tidak boleh kosong";

    if(!empty($errors)) {
        foreach($errors as $error) {
            echo "<div style='color:red'>$error</div>";
        }
        echo "<br>";
        echo "<button onClick='history.back()'>kembali</button>";
    } else {
        echo "Nama: " . htmlspecialchars($nama);
        echo "<br>";
        echo "Umur: " . htmlspecialchars($umur) . " tahun";
        echo "<br>";
        echo "Hobi: " . htmlspecialchars($hobi);
        echo "<br>";
        echo "<button onClick='history.back()'>kembali</button>";
    }
}
?>