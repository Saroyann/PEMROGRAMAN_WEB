<?php
session_start();
if (!isset($_SESSION['username'])) {
    header("Location: login.php");
    exit();
}

echo "Halo " . htmlspecialchars($_SESSION['username']);
?>