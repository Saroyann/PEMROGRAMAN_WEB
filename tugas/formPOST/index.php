<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>POST form</title>
</head>
<body>
    <div style="display: flex; justify-content: center; align-items: center; height: 100vh;">
        <div style="width: 500px; padding: 20px; border: 1px solid #ccc; border-radius: 15px; background-color:  #E4E0E1; box-shadow: 0 2px 10px rgba(0, 0, 0, 0.1); display: flex; flex-direction: column; align-items: center;">
            <form action="process.php" method="post">
                <label for="nama">masukkan nama anda :</label>
                <br>
                <br>
                <input style="width:500px; height: 30px; border-radius: 10px;" type="text" name="nama" required>
                <br>
                <br>
                <label for="nama">jenis kelamin :</label>
                <input type="radio" name="jenis_kelamin" value="laki-laki" required> laki-laki
                <input type="radio" name="jenis_kelamin" value="perempuan" required> perempuan
                <br>
                <br>
                <label for="hobi">hobi :</label>
                <input type="checkbox" name="hobi[]" value="sepak bola"> sepak bola
                <input type="checkbox" name="hobi[]" value="badminton"> badminton
                <input type="checkbox" name="hobi[]" value="joging"> joging
                <br>
                <br>
                <label for="negara">negara :</label>
                <select name="negara" required>
                    <option value="Indonesia">Indonesia</option>
                    <option value="Malaysia">Malaysia</option>
                    <option value="Singapura">Singapura</option>
                </select>
                <br>
                <br>
                <label for="alamat">alamat :</label>
                <textarea name="alamat" required></textarea>
                <br>
                <br>
                <button style="width: 500px; height: 40px; border-radius: 15px; border: none; font-weight: bold; color: white; cursor: pointer; background-color: #98D8EF;">submit</button>
            </form>
        </div>
    </div>
</body>
</html>