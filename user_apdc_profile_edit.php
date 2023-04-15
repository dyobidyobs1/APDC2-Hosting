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
    <title>Profile | Apigo-Pedracio Dental Clinic</title>
</head>
<body>
    You're logged in as <?php echo $_SESSION['name']; ?>!
    <button onclick="window.location.href='?signout=<?php echo $_SESSION['id']; ?>'">Logout</button>
</body>
</html>
<meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="user_apdc_profile.css">
  <link href="https://fonts.googleapis.com/css?family=Montserrat:100,200,300,400,500,600,700,800" rel="stylesheet">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">

  <head>
    <title>Profile | Apigo - Pedracio Dental Clinic</title>
  </head>
  <body>
    <form method="POST" action="admin_apdc_home.php">

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
      <b><a href="user_apdc_profile.php"><img src="admin.png"/> Profile</a></b>
      <a href="user_apdc_appointment.php"><img src="appointment.png"/> Book Appointment</a>
      <a href="user_apdc_appointmentlist.php"><img src="book.png"/> My Appointments</a>
      <a href="user_apdc_history.php"><img src="history.png"/> My History</a>
    </div>

    <script>
    function openNav() {
      document.getElementById("mySidenav").style.width = "300px";
    }

    </script>
    </form>

    <div class="content2" style="max-width:100%">
    <h2 class="h2" align="left">Profile</h2>    
  </body>
</html>

<?php
include "dbconnect.php";

$ID = $_SESSION['id'];

$sql = "Select * from tbl_patients where id = '$ID'";
$result = $conn->query($sql);

$row = $result->fetch_assoc();

$aid = $row['id'];
$aname = $row['name'];
$aaddress = $row['address'];
$abirthday = $row['bday'];
$acontact = $row['contact'];
$aemail = $row['email'];
$apassword = $row['password'];

$conn->close();
 ?>
 <!DOCTYPE html>
 <html>
   <meta charset="UTF-8">
   <meta name="viewport" content="width=device-width, initial-scale=1">
   <link rel="stylesheet" href="admin_apdc_admin_edit.css">
   <link href="https://fonts.googleapis.com/css?family=Montserrat:100,200,300,400,500,600,700,800" rel="stylesheet">
   <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
 <script src='https://kit.fontawesome.com/a076d05399.js' crossorigin='anonymous'></script>
   <head>
     <title>Edit Patients | Apigo - Pedracio Dental Clinic</title>
   </head>
   <body>

     </script>

<form method="POST" action="user_apdc_profile_finalupdatepatient.php">
    <table class='styled-table'>
      <tr>
        <th colspan="2">

          <tr>
            <th>
              User ID
          <tr>
            <td>
              <input type=text name=aid value="<?php echo $aid;?>">
              
      <tr>
        <th>
          Name
      <tr>
        <td>
          <input type=text name=aname value="<?php echo $aname;?>">
    <tr>
      <th>
        Address
    <tr>
      <td>
        <input type=text name=aaddress value="<?php echo $aaddress;?>">
    <tr>
      <th>
        Birthdate
    <tr>
      <td>
        <input type=text name=abirthday value="<?php echo $abirthday;?>">
    <tr>
      <th>
        Contact No.
    <tr>
      <td>
        <input type=text name=acontact value="0<?php echo $acontact;?>">
    <tr>
      <th>
        Email
    <tr>
      <td>
        <input type=text name=aemail value="<?php echo $aemail;?>">
    <tr>
      <th>
        Password
    <tr>
      <td>
        <input type=password name=apassword value="<?php echo $apassword;?>">
    
    <tr>
        <th colspan="2">
        <a href="user_apdc_profile.php" id="a2">Cancel</a>
        <input type=submit name="sub" value="Update">

    </form>
  </body>
</html>
