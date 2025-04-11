<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    if ($_POST["username"] == "admin" && $_POST["password"] == "123") {
        session_start();
        $_SESSION['username'] = $_POST['username'];
        header("Location: dashboard.php");
        exit();
    } else {
        header("Location: login.php?error=1");
        exit();
    }
}
?>