<!DOCTYPE html>
<html>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="admin_apdc_patients.css">
  <link href="https://fonts.googleapis.com/css?family=Montserrat:100,200,300,400,500,600,700,800" rel="stylesheet">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
<script src='https://kit.fontawesome.com/a076d05399.js' crossorigin='anonymous'></script>
  <head>
    <title>Patients | Apigo - Pedracio Dental Clinic</title>
  </head>
  <body>
    <form method="POST" action="admin_apdc_patients.php">

      <!-- Navigation -->
      <nav class="topnav" style="max-width:100%">
      <span style="cursor:pointer" onclick="openNav()">&#9776; </span>

      <a href="admin_apdc_patients.php" style="color:white; font-size: 25px;"></a>
      <a href="admin_logout.php" name="logout">Logout</a>

      </nav>

    <!-- Navigation -->
    <div id="mySidenav" class="sidenav">

      <a href="admin_apdc_home.php"><img src="home.png"/> Dashboard</a>
      <a href="admin_apdc_admin.php"><img src="admin.png"/> Admin</a>
      <a href="admin_apdc_staff.php"><img src="staff.png"/> Staff</a>
      <a href="admin_apdc_dentist.php"><img src="dentist.png"/> Dentist</a>
    <b><a href="admin_apdc_patients.php"><img src="patient.png"/> Patients</a></b>
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
    <h2 class="h2" align="left">Patients
      <button2>&nbsp<img src="add.png">&nbsp<b style='font-size:15px;color:white;'><a href="admin_apdc_patient_add.php" style="color:white;text-decoration:none;"> Add Patient  &nbsp</b></a></button2>
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

    $sql = "Select * from tbl_patients where
    id LIKE '%$search%' or
    name LIKE '%$search%' or
    address LIKE '%$search%' or
    bday LIKE '%$search%' or
    contact LIKE '%$search%' or
    email LIKE '%$search%'";

  }else{
    $sql = "Select * from tbl_patients";
  }

}else{
  $sql = "Select * from tbl_patients";
}

$result = $conn->query($sql);

if(!empty($result)){
  echo "<table class='styled-table'";
  echo "<thead>";
  echo "<tr>";
  echo "<th> Patient ID";
  echo "<th> Name";
  echo "<th> Address";
  echo "<th> Birthdate";
  echo "<th> Contact No.";
  echo "<th> Email";
  echo "<th> Action";

  while($row=$result->fetch_assoc()){

    echo"<tr>";
    echo"<td>".$row['id'];
    echo"<td>".$row['name'];
    echo"<td>".$row['address'];
    echo"<td>".$row['bday'];
    echo"<td>"."+63".$row['contact'];
    echo"<td>".$row['email'];

    echo"<td><a href='admin_apdc_patients_edit.php?id=".$row['id']."'><img src=\"edit.png\"></a>&nbsp&nbsp&nbsp
    <a href='admin_apdc_patients_delete.php?id=".$row['id']."'><img src=\"trash.png\"></a>";
  }

}else{
  //echo "Empty Table";
}

?>
