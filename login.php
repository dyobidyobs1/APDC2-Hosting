<?php
session_start();

/* Put your DB Conneciton here. Connection should be on top of the login.php and register.php */
$server = 'us-cdbr-east-06.cleardb.net';
$user = 'bb4ae697c23c67';
$pass = '6af8c958';
$database = 'heroku_cd28dd5417dc450';

$conn = new mysqli($server, $user, $pass, $database);

if ($conn->connect_error) {
    echo $conn->connect_error;
}

include "php/login.php";
include "php/register.php";

/* This will restrict the user from accessing the login and register form if already logged in. */
if (isset($_SESSION['logged_status'])) {
    header('location: index.php');
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style.css">
    <title>Login | Apigo-Pedracio Dental Clinic</title>
</head>
    <body>

        <div class="wrapper">
        <form method="POST">
            <h2>Login</h2>
            <div class="input-box">
            <input type="email" placeholder="Enter your Email Address" name="email" required>
</div>
<div class="input-box">
            <input type="password" placeholder="Enter your Password" name="password" required>
</div>

<div class="input-box button">
            <input type="submit" name="login" value="Login">
</div>
        </form>
        <div class="text">
            <h4>Don't have an account?
        <a href="register.php">Register here.</a>
</h3>
</div>
</div>
    </body>
</html>
