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
    if(!isset($_SESSION['logged_status'])){
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
      <a href="index.php"><img src="home.png"/> Dashboard</a>
      <a href="user_apdc_profile.php"><img src="admin.png"/> Profile</a>
      <a href="user_apdc_appointment.php"><img src="appointment.png"/> Book Appointment</a>
      <b><a href="user_apdc_appointmentlist.php"><img src="book.png"/> My Appointments</a></b>
      <a href="user_apdc_history.php"><img src="history.png"/> My History</a>
    </div>

    <script>
    function openNav() {
      document.getElementById("mySidenav").style.width = "300px";
    }

    </script>
   

    <div class="content2" style="max-width:100%">

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
?>

<h2 class="h2" align="left"> Appointment(s)</h2>
    <?php


if(isset($_POST[''])){
  $name = $_SESSION['name'];
  $userid = $row["userid"];

  if($pending != NULL){

    $sql = "Select * from tbl_requests where
    name LIKE '$name'";

  }else{
    $sql = "Select * from tbl_requests where
    name LIKE '$name'";
  }

}else{
  $sql = "Select * from tbl_requests where
  name LIKE '$name'";
}

include "dbconnect.php";
$result1 = $conn->query($sql);

if(!empty($result1)){

  echo "<table class='styled-table'";
  echo "<thead>";
  echo "<tr>";
  echo "<th> Appointment ID";
  echo "<th> User ID";
  echo "<th> Name";
  echo "<th> Date";
  echo "<th> Time";
  echo "<th> Service";
  echo "<th> Status";
  
  while($row=$result1->fetch_assoc()){



    echo"<tr>";
    echo"<td>".$row['id'];
    echo"<td>".$row['userid'];
    echo"<td>".$row['name'];
    echo"<td>".$row['prefdate'];
    echo"<td>".$row['preftime'];
    echo"<td>".$row['service'];
    echo"<td>".$row['status'];


  }

}else{
  $dispNone = "display:none";
}

?>
</table>


  </body>
</html>

