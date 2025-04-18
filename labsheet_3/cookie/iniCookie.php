<?php
//membuat cookie
setcookie('username', 'admin', time() + 3600, '/');
echo 'cookie telah disimpan';

//mengakses cookie

if(isset($_COOKIE['username'])) {
    echo '<br>user : ' . $_COOKIE['username'];
}