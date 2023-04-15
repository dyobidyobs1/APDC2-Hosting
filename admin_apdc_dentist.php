<!DOCTYPE html>
<html>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="admin_apdc_dentist.css">
  <link href="https://fonts.googleapis.com/css?family=Montserrat:100,200,300,400,500,600,700,800" rel="stylesheet">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
<script src='https://kit.fontawesome.com/a076d05399.js' crossorigin='anonymous'></script>
  <head>
    <title>Dentist | Apigo - Pedracio Dental Clinic</title>
  </head>
  <body>
    <form method="POST" action="admin_apdc_admin.php">

      <!-- Navigation -->
      <nav class="topnav" style="max-width:100%">
      <span style="cursor:pointer" onclick="openNav()">&#9776; </span>

      <a href="admin_apdc_dentist.php" style="color:white; font-size: 25px;"></a>
      <a href="admin_logout.php" name="logout">Logout</a>

      </nav>

    <!-- Navigation -->
    <div id="mySidenav" class="sidenav">
      <a href="admin_apdc_home.php"><img src="home.png"/> Dashboard</a>
      <a href="admin_apdc_admin.php"><img src="admin.png"/> Admin</a>
      <a href="admin_apdc_staff.php"><img src="staff.png"/> Staff</a>
      <b><a href="admin_apdc_dentist.php"><img src="dentist.png"/> Dentist</a></b>
      <a href="admin_apdc_patients.php"><img src="patient.png"/> Patients</a>
      <!--<a href="admin_apdc_schedule.php"><img src="schedule.png"/> Schedule</a>-->
      <a href="admin_apdc_appointment.php"><img src="appointment.png"/> Appointment List</a>
      <a href="admin_apdc_appointmentcomplete.php"><img src="history.png"/> History</a>
      <a href="admin_apdc_fees.php"><img src="coin.png"/> Services and Fees</a>
    </div>

    <script>
    function openNav() {
      document.getElementById("mySidenav").style.width = "300px";
    }

    </script>
    </form>

    <div class="content2" style="max-width:100%">
    <h2 class="h2" align="left">Dentist</h2>

  </body>
</html>
<?php

include "dbconnect.php";
session_start();

/*if(!$conn->connect_error){
  echo "Connected";
}*/

if(isset($_POST['submit'])){
  $search = $_POST['search'];

  if($search != NULL){

    $sql = "Select * from tbl_admins where
    name LIKE '%$search%' or
    address LIKE '%$search%' or
    contact LIKE '%$search%' or
    email LIKE '%$search%'";

  }else{
    $sql = "Select * from tbl_admins";
  }

}else{
  $sql = "Select * from tbl_admins";
}

$result = $conn->query($sql);

if(!empty($result)){
  echo"<table class='styled-table'";
  echo"<thead>";

  ?>
<html>
<th colspan="2" style="text-align: center;">
<img src="img_avatar.png" id=pfp>
<tr>
  <th colspan="2" style="text-align: center;font-size:20px;"> Dr. Emelita Apigo Pedracio
<tr>
  <td colspan="2" style="text-align: center;font-size:16px;"> Orthodontics
</html>

<?php
  echo"<tr>";
  echo"<th> <b>Name";
  echo"<td> Dr. Emelita Apigo Pedracio";
  echo"<tr>";
  echo"<th> <b>Birthdate";
  echo"<td> <style='float:right;'>May 24, 1971";
  echo"<tr>";
  echo"<th> <b>Phone";
  echo"<td> 09289895972";
  echo"<tr>";
  echo"<th> <b>Address";
  echo"<td> Antipolo, Rizal";
  echo"<tr>";
  echo"<th> <b>Degree";
  echo"<td> Masters in Dentistry";
  echo"<tr>";
  echo"<th> <b>Email";
  echo"<td> emelita@gmail.com";

}else{
  //echo "Empty Table";
}

?>
