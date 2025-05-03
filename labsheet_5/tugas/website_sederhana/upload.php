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

$nim = htmlspecialchars($_GET['nim']);
$error = "";

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    if (isset($_FILES["cv"]) && $_FILES["cv"]["error"] == 0) {
        $file_tmp = $_FILES["cv"]["tmp_name"];
        $file_name = $_FILES["cv"]["name"];
        $file_ext = strtolower(pathinfo($file_name, PATHINFO_EXTENSION));

        if ($file_ext == "pdf") {
            $upload_dir = "uploads/";
            if (!is_dir($upload_dir)) {
                mkdir($upload_dir, 0777, true);
            }

            $file_path = $upload_dir . $nim . ".pdf";
            move_uploaded_file($file_tmp, $file_path);
            header("Location: index.php");
            exit();
        } else {
            $error = "Hanya file PDF yang diperbolehkan.";
        }
    } else {
        $error = "Gagal mengunggah file.";
    }
}
?>
<!DOCTYPE html>
<html>

<head>
    <title>Upload CV</title>
</head>

<body>
    <h2>Upload CV untuk NIM: <?= $nim ?></h2>
    <form method="POST" enctype="multipart/form-data">
        <label for="cv">Pilih file CV (PDF):</label>
        <input type="file" name="cv" id="cv" required><br><br>
        <button type="submit">Upload</button>
    </form>
    <p style="color:red;"><?= $error ?></p>
</body>

</html>