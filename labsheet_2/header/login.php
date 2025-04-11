<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>laman login</title>
</head>
<body>
    <form action="process.php" method="POST">
        <label for="username">username</label>
        <input type="text" name="username" id="username" placeholder="masukkan username anda">
        
        <label for="password">password</label>
        <input type="password" name="password" id="password" placeholder="masukkan password">
        
        <button type="submit">submit</button>
    </form>
    
    <?php if(isset($_GET['error']) && $_GET['error'] == 1): ?>
        <p style="color: red;">Username atau password salah!</p>
    <?php endif; ?>
</body>
</html>