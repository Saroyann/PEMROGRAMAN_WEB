<?php
session_start();
echo 'woyyyy ' . $_SESSION['username'];
echo '<br><a href="logout.php">keluar le</a>';