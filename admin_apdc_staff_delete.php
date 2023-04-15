<?php
include "dbconnect.php";
session_start();
$ID = $_GET['id'];

$sql = "Select * from tbl_staffs where id = '$ID'";
$result = $conn->query($sql);

$row = $result->fetch_assoc();

$aid = $row['id'];
$aname = $row['name'];
$aaddress = $row['address'];
$acontact = $row['contact'];
$aemail = $row['email'];

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
     <title>Delete Staff | Apigo - Pedracio Dental Clinic</title>
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
      <b><a href="admin_apdc_staff.php"><img src="staff.png"/> Staff</a></b>
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
     <h2 class="h2" align="left">Delete Staff Profile
     </h2>
<form method="POST" action="admin_apdc_staff_finaldeletestaff.php">
    <table class='styled-table'>
      <tr>
        <th colspan="2">

          <tr>
            <th>
              User ID
          <tr>
            <td>
              <input type=text name=aid value="<?php echo $aid;?>" readonly>
      <tr>
        <th>
          Name
      <tr>
        <td>
          <input type=text name=aname value="<?php echo $aname;?>" readonly>
    <tr>
      <th>
        Address
    <tr>
      <td>
        <input type=text name=aaddress value="<?php echo $aaddress;?>" readonly>
    <tr>
      <th>
        Contact No.
    <tr>
      <td>
        <input type=text name=acontact value="<?php echo $acontact;?>" readonly>
    <tr>
      <th>
        Email
    <tr>
      <td>
        <input type=text name=aemail value="<?php echo $aemail;?>" readonly>
    <tr>
        <th colspan="2">
        <a href="admin_apdc_staff.php" id="a2">Cancel</a>
        <input type=submit name="sub" value="Delete">

    </form>
  </body>
</html>
