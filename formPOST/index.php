<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>POST form</title>
</head>

<body>
    <form action="process.php" method="POST">
        <label for="name">Nama:</label>
        <input type="text" id="name" name="name" required><br><br>
        <label>Jenis Kelamin:</label>
        <input type="radio" name="gender" value="Laki-laki"> Laki-laki
        <input type="radio" name="gender" value="Perempuan"> Perempuan <br><br>
        <label>Hobi:</label>
        
        <input type="checkbox" name="hobby[]" value="Membaca"> Membaca
        <input type="checkbox" name="hobby[]" value="Olahraga"> Olahraga
        <input type="checkbox" name="hobby[]" value="Musik"> Musik <br><br>
        <button type="submit">Kirim</button>
    </form>

</body>

</html>