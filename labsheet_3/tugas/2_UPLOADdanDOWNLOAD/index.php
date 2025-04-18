<?php

$uploadDir = "uploads/";

if (!is_dir($uploadDir)) {
    mkdir($uploadDir, 0777, true);
}

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    if (isset($_FILES['file'])) {
        $file = $_FILES['file'];
        $fileName = basename($file['name']);
        $fileSize = $file['size'];
        $fileTmp = $file['tmp_name'];
        $fileError = $file['error'];
        $fileExt = strtolower(pathinfo($fileName, PATHINFO_EXTENSION));

        $allowedExtensions = ['jpg', 'png'];
        if (!in_array($fileExt, $allowedExtensions)) {
            $error = "Hanya file .jpg dan .png yang diperbolehkan.";
        } elseif ($fileSize > 1048576) { 
            $error = "Ukuran file maksimum adalah 1MB.";
        } elseif ($fileError !== 0) {
            $error = "Terjadi kesalahan saat mengupload file.";
        } else {
            $targetFile = $uploadDir . $fileName;

            if (move_uploaded_file($fileTmp, $targetFile)) {
                $success = "File berhasil diupload.";
            } else {
                $error = "Gagal mengupload file.";
            }
        }
    } else {
        $error = "Tidak ada file yang diupload.";
    }
}

$files = array_diff(scandir($uploadDir), ['.', '..']);
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Upload dan Download File</title>
</head>
<body>
    <h2>Upload File</h2>
    <?php if (isset($error)) echo "<p style='color:red;'>$error</p>"; ?>
    <?php if (isset($success)) echo "<p style='color:green;'>$success</p>"; ?>
    <form action="" method="POST" enctype="multipart/form-data">
        <label for="file">Pilih file (.jpg, .png, max 1MB):</label>
        <input type="file" name="file" id="file" required>
        <br><br>
        <button type="submit">Upload</button>
    </form>

    <h2>Daftar File</h2>
    <ul>
        <?php foreach ($files as $file): ?>
            <li>
                <a href="uploads/<?php echo urlencode($file); ?>" download><?php echo htmlspecialchars($file); ?></a>
            </li>
        <?php endforeach; ?>
    </ul>
</body>
</html>