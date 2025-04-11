<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    echo "Nama: " . htmlspecialchars($_POST['name']) . "<br>";
    echo "Jenis Kelamin: " . htmlspecialchars($_POST['gender']) . "<br>";
    if (isset($_POST['hobby'])) {
        echo "Hobi: " . implode(", ", $_POST['hobby']) . "<br>";
    }
}
    ?>