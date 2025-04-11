<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>POST Form</title>
</head>
<body>
    <form action="process.php" method="post">
        <label for="nama">nama</label>
        <input type="text" placeholder="masukkan nama anda" name="nama">
        <br>
        <label for="umur">umur</label>
        <input type="text" inputmode="numeric" pattern="[0-9]*" placeholder="masukkan umur anda" name="umur">
        <br>
        <label for="hobi">hobi</label>
        <input type="radio" placeholder="masukkan hobi anda" name="hobi" value="badminton">badmninton
    
        <input type="radio" placeholder="masukkan hobi anda" name="hobi" value="catur">catur
    
        <input type="radio" placeholder="masukkan hobi anda" name="hobi" value="ngoding">ngoding
        <br>
        <button>submit</button>
    </form>
</body>
</html>