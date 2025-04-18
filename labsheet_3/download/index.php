<?php 
$file = '/path/to/download.pdf';
header("Content-Disposition: attachment; filename=" . basename($file));
readfile($file);