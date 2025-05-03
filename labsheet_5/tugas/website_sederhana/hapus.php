<?php
session_start();
if (!isset($_SESSION["user"])) {
    header("Location: login.php");
    exit();
}

if (!isset($_GET['nim'])) {
    header("Location: index.php");
    exit();
}

$nim = $_GET['nim'];
$data_mahasiswa = file("data_mahasiswa.txt", FILE_IGNORE_NEW_LINES);

foreach ($data_mahasiswa as $key => $data) {
    list($nama, $nim_data, $jurusan) = explode("|", $data);
    if ($nim_data == $nim) {
        unset($data_mahasiswa[$key]);
        break;
    }
}

file_put_contents("data_mahasiswa.txt", implode(PHP_EOL, $data_mahasiswa) . PHP_EOL);

header("Location: index.php");
exit();
?>