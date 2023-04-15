<?php
include "dbconnect.php";
session_start();
$ID = $_GET['id'];

$sql = "Select * from tbl_fees where id = '$ID'";
$result = $conn->query($sql);

$row = $result->fetch_assoc();

$aid = $row['id'];
$aservices = $row['services'];
$afees = $row['fees'];


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
     <title>Edit Services &Fees | Apigo - Pedracio Dental Clinic</title>
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
       <a href="admin_apdc_admin.php"><img src="admin.png"/> Admin</a>
       <a href="admin_apdc_staff.php"><img src="staff.png"/> Staff</a>
       <a href="admin_apdc_dentist.php"><img src="dentist.png"/> Dentist</a>
       <a href="admin_apdc_patients.php"><img src="patient.png"/> Patients</a>
       <a href="admin_apdc_appointment.php"><img src="appointment.png"/> Appointment List</a>
       <a href="admin_apdc_appointmentcomplete.php"><img src="history.png"/> History</a>
       <b><a href="admin_apdc_fees.php"><img src="coin.png"/> Services and Fees</a></b>
     </div>

     <script>
     function openNav() {
       document.getElementById("mySidenav").style.width = "300px";
     }

     </script>
     <div class="content2" style="max-width:100%">
     <h2 class="h2" align="left">Edit Services & Fees
     </h2>
<form method="POST" action="admin_apdc_fees_finalupdatefees.php">
    <table class='styled-table'>
      <tr>
        <th colspan="2">

          <tr>
            <th>
              Service ID
          <tr>
            <td>
              <input type=text name=aid value="<?php echo $aid;?>">
      <tr>
        <th>
          Service
      <tr>
        <td>
          <input type=text name=aservices value="<?php echo $aservices;?>">
    <tr>
      <th>
        Fee
    <tr>
      <td>
        <input type=text name=afees value="<?php echo $afees;?>">

    <tr>
        <th colspan="2">
        <a href="admin_apdc_fees.php" id="a2">Cancel</a>
        <input type=submit name="sub" value="Update">

    </form>
  </body>
</html>
