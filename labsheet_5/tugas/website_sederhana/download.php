<?php
$file = "uploads/example.txt";
header("Content-Disposition: attachment; filename=" . basename($file));
readfile($file);
?>
