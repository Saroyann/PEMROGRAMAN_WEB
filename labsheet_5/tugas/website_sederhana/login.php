<?php
session_start();
$error = "";
$attempts = isset($_SESSION['attempts']) ? $_SESSION['attempts'] : 0;

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $username = htmlspecialchars($_POST["username"]);
    $password = htmlspecialchars($_POST["password"]);

    if ($attempts >= 5) {
        $error = "Terlalu banyak percobaan login. Coba lagi nanti.";
    } else {
        if (strlen($username) < 5 || strlen($password) < 5) {
            $error = "Username dan Password harus memiliki panjang minimal 5 karakter.";
        } elseif (!ctype_alnum($username)) {
            $error = "Username hanya boleh mengandung huruf dan angka.";
        } else {
            if ($username == "admin" && $password == "12345") {
                $_SESSION["user"] = $username;
                setcookie("user", $username, time() + (86400 * 1), "/");
                $_SESSION['attempts'] = 0; 
                header("Location: index.php");
                exit();
            } else {
                $error = "Username atau Password salah!";
                $_SESSION['attempts'] = ++$attempts; 
            }
        }
    }
}
?>
<!DOCTYPE html>
<html>

<head>
    <title>Login</title>
</head>

<body>
    <h2>Login</h2>
    <form method="POST">
        <label>Username:</label>
        <input type="text" name="username" required><br>
        <label>Password:</label>
        <input type="password" name="password" required><br>
        <button type="submit">Login</button>
    </form>
    <p style="color:red;"><?php echo $error; ?></p>
</body>

</html>