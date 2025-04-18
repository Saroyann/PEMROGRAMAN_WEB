<?php 
session_start();
$_SESSION['username'] = 'admin';
echo 'username telah disimpan';
echo '<br><a href="iniIndex.php">ayok kesini</a>'; 