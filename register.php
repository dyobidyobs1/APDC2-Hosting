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
    <title>Register | Apigo-Pedracio Dental Clinic</title>
</head>
    <body>
    <div class="wrapper">
        <form method="POST">
        <h2>Registration</h2>
        <div class="input-box">
            <input type="text" placeholder="Enter your Full Name (ex. Kyla Bautista)" id="name" name="name" required><br><br>
</div>
<div class="input-box">
            <input type="text" placeholder="Enter your Address (City, Province)" id="address" name="address" required><br><br>
            </div>

            <div class="input-box">
            <input type="date" placeholder="Enter your Birthdate &nbsp" id="bday" name="bday" required><br><br>
</div>

<div class="input-box">
            <input type="tel" placeholder="Enter your Contact Number" id="contact" name="contact" required><br><br>
            </div>

            <div class="input-box">
            <input type="email" placeholder="Enter your Email Address" id="email" name="email" required><br><br>
            </div>

            <div class="input-box">
            <input type="password" placeholder="Enter your Password" id="password" name="password" required><br><br>
            </div>

            <div class="input-box">
            <input type="password" placeholder="Confirm Password" id="repassword" name="repassword" required><br><br>
            </div>

            <div class="input-box button">
            <input type="submit" name="register" value="Register">
            </div>
        </form>
        <div class="text">
            <h4>Already have an account?
        <a href="login.php">Login now.</a>
</div>
</div>
    </body>
</html>
