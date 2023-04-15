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
    <script src='https://kit.fontawesome.com/a076d05399.js' crossorigin='anonymous'>
    </script>
      <head>
        <title>Add Admin | Apigo - Pedracio Dental Clinic</title>
      </head>
  <body>
       <!-- Navigation -->
       <nav class="topnav" style="max-width:100%">
       <span style="cursor:pointer" onclick="openNav()">&#9776; </span>
       <a href="admin_apdc_admin.php" style="color:white; font-size: 25px;"></a>
       <a href="admin_logout.php" name="logout">Logout</a>
       </nav>

        <!-- Navigation -->
        <div id="mySidenav" class="sidenav">

        <a href="admin_apdc_home.php"><img src="home.png"/> Dashboard</a>
      <b><a href="admin_apdc_admin.php"><img src="admin.png"/> Admin</a></b>
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
        </script>

        <div class="content2" style="max-width:100%">
        <h2 class="h2" align="left">
            Add Admin Profile
        </h2>
    <form method="POST" action="admin_apdc_admin_finaladdadmin.php">
      <table class='styled-table'>
        <tr>
          <th colspan="2">
      <tr>
        <th>
          Name
      <tr>
        <td>
          <input type=text name=aname>
      <tr>
        <th>
          Address
      <tr>
        <td>
          <input type=text name=aaddress>
      <tr>
        <th>
          Contact No.
      <tr>
        <td>
          <input type=text name=acontact>
      <tr>
        <th>
          Email
      <tr>
        <td>
          <input type=text name=aemail>
      <tr>
          <th colspan="2">
      <a href="admin_apdc_admin.php" id="a2">Cancel</a>
      <input type=submit name="sub" value="Add">
    </form>
  </body>
</html>
