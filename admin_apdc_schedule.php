<?php
include "dbconnect.php";
session_start();


$conn->close();
 ?>
<!DOCTYPE html>
<html>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="admin_apdc_admin_edit.css">
  <link href="https://fonts.googleapis.com/css?family=Montserrat:100,200,300,400,500,600,700,800" rel="stylesheet">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">

  <head>
    <title>Schedule | Apigo - Pedracio Dental Clinic</title>
  </head>
  <body>
    <form method="POST" action="admin_apdc_admin.php">

      <!-- Navigation -->
      <nav class="topnav" style="max-width:100%">
      <span style="cursor:pointer" onclick="openNav()">&#9776; </span>

      <a href="admin_apdc_schedule.php" style="color:white; font-size: 25px;"></a>
      <a href="admin_logout.php" name="logout">Logout</a>

      </nav>

    <!-- Navigation -->
    <div id="mySidenav" class="sidenav">
      <a href="admin_apdc_home.php"><img src="home.png"/> Dashboard</a>
      <a href="admin_apdc_admin.php"><img src="admin.png"/> Admin</a>
      <a href="admin_apdc_staff.php"><img src="staff.png"/> Staff</a>
      <a href="admin_apdc_dentist.php"><img src="dentist.png"/> Dentist</a>
      <a href="admin_apdc_patients.php"><img src="patient.png"/> Patients</a>
      <b><a href="admin_apdc_schedule.php"><img src="schedule.png"/> Schedule</a></b>
      <a href="admin_apdc_appointment.php"><img src="appointment.png"/> Appointment List</a>

    </div>

    <script>
    function openNav() {
      document.getElementById("mySidenav").style.width = "300px";
    }

    </script>
    </form>

    <div class="content2" style="max-width:100%">

      <h2 class="h2" align="left">Schedule
      </h2>

    <form method="POST" action="admin_apdc_schedule_finaladdschedule.php">
        <table class='styled-table'>
          <tr>
            <th colspan="2">
          <tr>
            <th>
              Date
          <tr>
            <td>
              <input type=date name=sdate value="<?php echo $sdate;?>">
        <tr>
          <th>
            Start Time
        <tr>
          <td>
            <input type=time name=sstarttime value="<?php echo $sstarttime;?>">

        <tr>
          <th>
            End Time
        <tr>
          <td>
            <input type=time name=sendtime value="<?php echo $sendtime;?>">
        <tr>
          <th>
            Availability
        <tr>
          <td>
            <select name=savailability value="<?php echo $savailability;?>">
              <option value="Available">Available</option>
              <option value="Not Available">Not Available</option>
            </select>

        <tr>
            <th colspan="2">
            <a href="admin_apdc_schedule.php" id="a2">Cancel</a>
            <input type=submit name="sub" value="Add">

        </form>


      </body>
    </html>
