<?php
session_start();

/* Put your DB Conneciton here. Connection should be on top of the login.php and register.php */
$server = 'us-cdbr-east-06.cleardb.net';
$user = 'bb4ae697c23c67';
$pass = '6af8c958';
$database = 'heroku_cd28dd5417dc450';

$conn = new mysqli($server, $user, $pass, $database);

include "php/login.php";
include "php/register.php";

/* This will restrict the user from accessing the login-protected pages if not logged in. */
if (!isset($_SESSION['logged_status'])) {
    header('location: login.php');
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Home | Apigo-Pedracio Dental Clinic</title>
</head>
<body>
    You're logged in as <?php echo $_SESSION['name']; ?>!
    <button onclick="window.location.href='?signout=<?php echo $_SESSION['id']; ?>'">Logout</button>
</body>
</html>
<meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="admin_apdc_home.css">
  <link href="https://fonts.googleapis.com/css?family=Montserrat:100,200,300,400,500,600,700,800" rel="stylesheet">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">

  <head>
    <title>Home | Apigo - Pedracio Dental Clinic</title>
  </head>
  <body>

      <!-- Navigation -->
      <nav class="topnav" style="max-width:100%">
      <span style="cursor:pointer" onclick="openNav()">&#9776; </span>

      <a href="admin_apdc_admin.php" style="color:white; font-size: 25px;"></a>
      <a href="logout.php" name="logout">Logout</a>

      </nav>

    <!-- Navigation -->
    <div id="mySidenav" class="sidenav">
      <!--<a href="javascript:void(0)" class="closebtn" onclick="closeNav()">&times;</a>-->
      <b><a href="index.php"><img src="home.png"/> Dashboard</a></b>
      <a href="user_apdc_profile.php"><img src="admin.png"/> Profile</a>
      <a href="user_apdc_appointment.php"><img src="appointment.png"/> Book Appointment</a>
      <a href="user_apdc_appointmentlist.php"><img src="book.png"/> My Appointments</a>
      <a href="user_apdc_history.php"><img src="history.png"/> My History</a>
    </div>

    <script>
    function openNav() {
      document.getElementById("mySidenav").style.width = "300px";
    }

    </script>


    <div class="content2" style="max-width:100%">
    <h2 class="h2" align="left">Dashboard</h2>
    <h3 align="left"  >Welcome, <?php echo $_SESSION['name']; ?>! </h3>


    <?php
// Set up database connection
$servername = 'us-cdbr-east-06.cleardb.net';
$username = 'bb4ae697c23c67';
$password = '6af8c958';
$dbase = 'heroku_cd28dd5417dc450';
$conn = mysqli_connect($servername, $username, $password, $dbase);

// Check connection
if (!$conn) {
    die("Connection failed: " . mysqli_connect_error());
}
$name = $_SESSION['name'];
// Select ID from table
$sql = "SELECT userid FROM tbl_requests where name='$name'";
$result = mysqli_query($conn, $sql);

// Check if query returned any rows
if (mysqli_num_rows($result) > 0) {
    // Output ID
    $row = mysqli_fetch_assoc($result);
    //echo "ID: " . $row["userid"];
} else {
    //echo "No results found.";
}

// Close database connection
mysqli_close($conn);
include "dbconnect.php";
?>

<div class="row">
  <div class="column">
    <div class="card">
      <h3 align="left">My Pending Appointment(s)</h3>
      <?php
$dash_appointment_query = "SELECT * FROM tbl_requests where status LIKE 'Pending%' and name='$name' ";
$dash_appointment_queryrun = mysqli_query($conn, $dash_appointment_query);
if ($patients_total = mysqli_num_rows($dash_appointment_queryrun)) {
    echo '<h2 align="left"> ' . $patients_total . ' </h2>';

} else {
    echo '<h2 align="left"> 0 </h2>';

}
?>
      <hr>
            <p align="left" ><a href="user_apdc_appointmentlist.php"> View Details</a></p>

    </div>
  </div>

  <div class="column">
    <div class="card">
      <h3 align="left">My Approved Appointment(s)</h3>
      <?php
$dash_requests_query = "SELECT * FROM tbl_requests where status LIKE 'Approved%' and name='$name' ";
$dash_requests_query_run = mysqli_query($conn, $dash_requests_query);
if ($requests_total = mysqli_num_rows($dash_requests_query_run)) {
    echo '<h2 align="left"> ' . $requests_total . ' </h2>';

} else {
    echo '<h2 align="left"> 0 </h2>';

}
?>
      <hr>
            <p align="left"><a href="user_apdc_appointmentlist.php">View Details</a></p>
    </div>
  </div>

  <div class="column">
    <div class="card">
      <h3 align="left">My Appointment History</h3>
      <?php
$dash_requests_query = "SELECT * FROM tbl_history where name='$name' ";
$dash_requests_query_run = mysqli_query($conn, $dash_requests_query);
if ($requests_total = mysqli_num_rows($dash_requests_query_run)) {
    echo '<h2 align="left"> ' . $requests_total . ' </h2>';

} else {
    echo '<h2 align="left"> 0 </h2>';

}
?>
      <hr>
            <p align="left"><a href="user_apdc_history.php">View Details</a></p>
    </div>
  </div>

    </div>
  </div>

  </body>
</html>

