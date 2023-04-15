<?php

$servername = 'us-cdbr-east-06.cleardb.net';
$username = 'bb4ae697c23c67';
$password = '6af8c958';
$dbase = 'heroku_cd28dd5417dc450';


$conn = new mysqli($servername, $username, $password, $dbase);

if (!$conn) {
    die("<script>alert('Connection Failed.')</script>");
}

?>
