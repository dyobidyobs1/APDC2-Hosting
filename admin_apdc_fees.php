<!DOCTYPE html>
<html>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="admin_apdc_admin.css">
  <link href="https://fonts.googleapis.com/css?family=Montserrat:100,200,300,400,500,600,700,800" rel="stylesheet">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
<script src='https://kit.fontawesome.com/a076d05399.js' crossorigin='anonymous'></script>
  <head>
    <title>Fees | Apigo - Pedracio Dental Clinic</title>
  </head>
  <body>
    <form method="POST" action="admin_apdc_fees.php">

      <!-- Navigation -->
      <nav class="topnav" style="max-width:100%">
      <span style="cursor:pointer" onclick="openNav()">&#9776; </span>

      <a href="admin_apdc_admin.php" style="color:white; font-size: 25px;"></a>
      <a href="admin_logout.php" name="logout">Logout</a>

      </nav>

    <!-- Navigation -->
    <div id="mySidenav" class="sidenav">
      <!--<a href="javascript:void(0)" class="closebtn" onclick="closeNav()">&times;</a>-->
      <a href="admin_apdc_home.php"><img src="home.png"/> Dashboard</a>
      <a href="admin_apdc_admin.php"><img src="admin.png"/> Admin</a>
      <a href="admin_apdc_staff.php"><img src="staff.png"/> Staff</a>
      <a href="admin_apdc_dentist.php"><img src="dentist.png"/> Dentist</a>
      <a href="admin_apdc_patients.php"><img src="patient.png"/> Patients</a>
      <!--<a href="admin_apdc_schedule.php"><img src="schedule.png"/> Schedule</a>-->
      <a href="admin_apdc_appointment.php"><img src="appointment.png"/> Appointment List</a>
      <a href="admin_apdc_appointmentcomplete.php"><img src="history.png"/> History</a>
      <b><a href="admin_apdc_fees.php"><img src="coin.png"/> Services and Fees</a></b>
    </div>

    <script>
    function openNav() {
      document.getElementById("mySidenav").style.width = "300px";
    }

    //function closeNav() {
      //document.getElementById("mySidenav").style.width = "0";
    //}
    </script>
    <div class="content2" style="max-width:100%">
    <h2 class="h2" align="left">Services & Fees
    <button2>&nbsp<img src="add.png">&nbsp<b style='font-size:15px;color:white;'><a href="admin_apdc_fees_add.php" style="color:white;text-decoration:none;"> Add Services  &nbsp</b></a></button2>
    <input type="search" placeholder="Search..." name="search">
    <button type="submit" name="submit" value="Search" class="searchButton">&nbsp<i class="fa fa-search" style="color:black">&nbsp</i> </button>
    </h2>
    </form>

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

    $sql = "Select * from tbl_fees where
    services LIKE '%$search%' or
    fees LIKE '%$search%'";

  }else{
    $sql = "Select * from tbl_fees";
  }

}else{
  $sql = "Select * from tbl_fees";
}

$result = $conn->query($sql);

if(!empty($result)){
  echo "<table class='styled-table'";
  echo "<thead>";
  echo "<tr>";
  echo "<th> Services";
  echo "<th> Fees";
  echo "<th> Action";

  while($row=$result->fetch_assoc()){

    echo"<tr>";
    echo"<td>".$row['services'];
    echo"<td>"."PHP".$row['fees'];

    echo"<td><a href='admin_apdc_fees_edit.php?id=".$row['id']."'><i class='fas fa-edit' style='font-size:20px;color:black;'></i></a>&nbsp&nbsp&nbsp
             <a href='admin_apdc_fees_delete.php?id=".$row['id']."'><i class='far fa-trash-alt' style='font-size:20px;color:black;'></i></a>";
  }

}else{
  //echo "Empty Table";
}

?>
