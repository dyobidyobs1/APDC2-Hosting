<?php

$server = 'us-cdbr-east-06.cleardb.net';
$user = 'bb4ae697c23c67';
$pass = '6af8c958';
$database = 'heroku_cd28dd5417dc450';

$conn = mysqli_connect($server, $user, $pass, $database);

if (!$conn) {
    die("<script>alert('Connection Failed.')</script>");
}

?>
