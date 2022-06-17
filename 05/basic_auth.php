<?php

$username = "admin";
$password = "password";

if(!isset($_SERVER['PHP_AUTH_USER'])){
    header('WWW-Authenticate: Basic');
    header('HTTP/1.0 401 Unauthorized');
    echo "silahkan masukan username dan password";
}else{
    echo "Hallo ".$_SERVER['PHP_AUTH_USER'].'<br>';
    echo "password anda adalah ".$_SERVER['PHP_AUTH_PW'];
}

