<!DOCTYPE html>
<html>

<meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="admin_apdc_home.css">
  <link href="https://fonts.googleapis.com/css?family=Montserrat:100,200,300,400,500,600,700,800" rel="stylesheet">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">

  <head>
    <title>Home | Apigo - Pedracio Dental Clinic</title>
  </head>
  <body>
    <form method="POST" action="user_apdc_appointment_finaladdappointment.php">

      <!-- Navigation -->
      <nav class="topnav" style="max-width:100%">
      <span style="cursor:pointer" onclick="openNav()">&#9776; </span>

      <a href="admin_apdc_admin.php" style="color:white; font-size: 25px;"></a>
      <a href="admin_logout.php" name="logout">Logout</a>

      </nav>

    <!-- Navigation -->
    <div id="mySidenav" class="sidenav">
      <!--<a href="javascript:void(0)" class="closebtn" onclick="closeNav()">&times;</a>-->
      <b><a href="admin_apdc_home.php"><img src="home.png"/> Dashboard</a></b>
      <a href="admin_apdc_admin.php"><img src="admin.png"/> Admin</a>
      <a href="admin_apdc_staff.php"><img src="staff.png"/> Staff</a>
      <a href="admin_apdc_dentist.php"><img src="dentist.png"/> Dentist</a>
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


    <?php

include "dbconnect.php";
session_start();
//$email = $_SESSION["id"];
if(!$conn->connect_error){
  //echo "Connected";
}
?>
    //function closeNav() {
    //  document.getElementById("mySidenav").style.width = "0";
    //}
    </script>
    </form>

    <div class="content2" style="max-width:100%">
    <h2 class="h2" align="left">Dashboard</h2>

    <div class="row">
  <div class="column">
    <div class="card">
      <h3 align="left">Total Patients</h3>
      <?php
        $dash_patients_query = "SELECT * FROM tbl_patients";
        $dash_patients_query_run = mysqli_query($conn, $dash_patients_query);
        if($patients_total = mysqli_num_rows($dash_patients_query_run)){
            echo '<h2 align="left"> '.$patients_total.' </h2>';

        }else{
          echo '<h2 align="left"> 0 </h2>';

        }
      ?>
      <hr>
            <p align="left" ><a href="admin_apdc_patients.php"> View Details</a></p>

    </div>
  </div>

  <div class="column">
    <div class="card">
      <h3 align="left">Pending Appointment(s)</h3>
      <?php
        $dash_requests_query = "SELECT * FROM tbl_requests where status LIKE 'Pending%'";
        $dash_requests_query_run = mysqli_query($conn, $dash_requests_query);
        if($requests_total = mysqli_num_rows($dash_requests_query_run)){
            echo '<h2 align="left"> '.$requests_total.' </h2>';

        }else{
          echo '<h2 align="left"> 0 </h2>';

        }
      ?>
      <hr>
            <p align="left"><a href="admin_apdc_appointment.php">View Details</a></p>
    </div>
  </div>

  <div class="column">
    <div class="card">
      <h3 align="left">Approved Appointment(s)</h3>
      <?php
        $dash_requests_query = "SELECT * FROM tbl_requests where status LIKE 'Approved%'";
        $dash_requests_query_run = mysqli_query($conn, $dash_requests_query);
        if($requests_total = mysqli_num_rows($dash_requests_query_run)){
            echo '<h2 align="left"> '.$requests_total.' </h2>';

        }else{
          echo '<h2 align="left"> 0 </h2>';

        }
      ?>
      <hr>
            <p align="left"><a href="admin_apdc_appointment.php">View Details</a></p>
    </div>
  </div>
  
  <div class="column">
    <div class="card">
      <h3 align="left">Services & Fees</h3>
      <?php
        $dash_fees_query = "SELECT * FROM tbl_fees";
        $dash_fees_query_run = mysqli_query($conn, $dash_fees_query);
        if($fees_total = mysqli_num_rows($dash_fees_query_run)){
            echo '<h2 align="left"> '.$fees_total.' </h2>';

        }else{
          echo '<h2 align="left"> 0 </h2>';

        }
      ?>
            <hr>
            <p align="left"><a href="admin_apdc_fees.php">View Details</a></p>
    </div>
  </div>
  

<div class="content2" style="max-width:100%">
<div class="content2" style="max-width:100%">
  </body>
</html>

<?php




?>
