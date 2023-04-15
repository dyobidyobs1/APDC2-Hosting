<!DOCTYPE html>
<html>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="admin_apdc_appointment.css">
  <link href="https://fonts.googleapis.com/css?family=Montserrat:100,200,300,400,500,600,700,800" rel="stylesheet">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
<script src='https://kit.fontawesome.com/a076d05399.js' crossorigin='anonymous'></script>
  <head>
    <title>Appointments | Apigo - Pedracio Dental Clinic</title>
  </head>
  <body>
    <form method="POST" action="admin_apdc_appointment.php">

      <!-- Navigation -->
      <nav class="topnav" style="max-width:100%">
      <span style="cursor:pointer" onclick="openNav()">&#9776; </span>

      <a href="admin_apdc_appointment.php" style="color:white; font-size: 25px;"></a>
      <a href="admin_logout.php" name="logout">Logout</a>

      </nav>

    <!-- Navigation -->
    <div id="mySidenav" class="sidenav">
      <a href="admin_apdc_home.php"><img src="home.png"/> Dashboard</a>
      <a href="admin_apdc_admin.php"><img src="admin.png"/> Admin</a>
      <a href="admin_apdc_staff.php"><img src="staff.png"/> Staff</a>
      <a href="admin_apdc_dentist.php"><img src="dentist.png"/> Dentist</a>
      <a href="admin_apdc_patients.php"><img src="patient.png"/> Patients</a>
      <!--<a href="admin_apdc_schedule.php"><img src="schedule.png"/> Schedule</a>-->
      <b><a href="admin_apdc_appointment.php"><img src="appointment.png"/> Appointment List</a></b>
      <a href="admin_apdc_appointmentcomplete.php"><img src="history.png"/> History</a>
      <a href="admin_apdc_fees.php"><img src="coin.png"/> Services and Fees</a>

    </div>

    <script>
    function openNav() {
      document.getElementById("mySidenav").style.width = "300px";
    }
    </script>

    <div class="content2" style="max-width:100%">
    <h2 class="h2" align="left">Appointments
    <!--<button2>&nbsp<i class='fas fa-plus' style='font-size:15px'></i>&nbsp<b style='font-size:15px;color:white;'><a href="admin_apdc_patient_add.php" style="color:white;text-decoration:none;"> Add Appointment &nbsp</b></a></button2>
    
    <input type="search" placeholder="Search..." name="search">
    <button type="submit" name="submit" value="Search" class="searchButton">&nbsp<i class="fa fa-search" style="color:black">&nbsp</i> </button>-->
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

    /*if(isset($_POST['submit'])){
      $search = $_POST['search'];

      if($search != NULL){

        $sql = "Select * from tbl_requests where
        firstname LIKE '%$search%' or
        lastname LIKE '%$search%' or
        phone LIKE '%$search%' or
        email LIKE '%$search%' or
        prefdate LIKE '%$search%' or
        preftime LIKE '%$search%' or
        service LIKE '%$search%' or
        patientstatus LIKE '%$search%' or
        status LIKE '%$search%'";

      }else{
        $sql = "Select * from tbl_requests";
      }

    }else{
      $sql = "Select * from tbl_requests";
    }

    $result = $conn->query($sql);

    if(!empty($result)){
      echo "<table class='styled-table'";
      echo "<thead>";
      echo "<tr>";
      echo "<th> Name";
      echo "<th> Contact No.";
      echo "<th> Email";
      echo "<th> Date";
      echo "<th> Time";
      echo "<th> Service";
      echo "<th> Status";
      //echo "<th> Status";

      while($row=$result->fetch_assoc()){

        echo"<tr>";
        echo"<td>".$row['firstname']." ",$row['lastname'];
        echo"<td>"."+63".$row['phone'];
        echo"<td>".$row['email'];
        echo"<td>".$row['prefdate'];
        echo"<td>".$row['preftime'];
        echo"<td>".$row['service'];
        echo"<td>".$row['status'];
        //echo"<td>".$row['patientstatus'];

        echo"<td><a href='admin_apdc_appointment_edit.php?id=".$row['id']."'><i class='fas fa-edit' style='font-size:20px;color:black;'></i></a>&nbsp&nbsp&nbsp
        <a href='admin_apdc_appointment_delete.php?id=".$row['id']."'><i class='far fa-trash-alt' style='font-size:20px;color:black;'></i></a>";
      }

    }else{
      //echo "Empty Table";
    }
*/
    ?>
    </table>
    <h2 class="h2" align="left"> Pending Appointment(s)
    <!--<button2>&nbsp<i class='fas fa-plus' style='font-size:15px'></i>&nbsp<b style='font-size:15px;color:white;'><a href="admin_apdc_patient_add.php" style="color:white;text-decoration:none;"> Add Appointment &nbsp</b></a></button2>
    -->
    </h2>
    </form>
    <?php


if(isset($_POST[''])){
  $pending = $_POST['Pending'];

  if($pending != NULL){

    $sql = "Select * from tbl_requests where
    status LIKE 'Pending%'";

  }else{
    $sql = "Select * from tbl_requests where
    status LIKE 'Pending%'";
  }

}else{
  $sql = "Select * from tbl_requests where
  status LIKE 'Pending%'";
}

$result1 = $conn->query($sql);

if(!empty($result1)){
  echo "<table class='styled-table'";
  echo "<thead>";
  echo "<tr>";
  echo "<th> Appointment ID";
  echo "<th> User ID";
  echo "<th> Name";
  echo "<th> Contact No.";
  echo "<th> Email";
  echo "<th> Date";
  echo "<th> Time";
  echo "<th> Service";
  echo "<th> Status";
  echo "<th> Action";

  while($row=$result1->fetch_assoc()){

    echo"<tr>";
    echo"<td>".$row['id'];
    echo"<td>".$row['userid'];
    echo"<td>".$row['name'];
    echo"<td>"."+63".$row['phone'];
    echo"<td>".$row['email'];
    echo"<td>".$row['prefdate'];
    echo"<td>".$row['preftime'];
    echo"<td>".$row['service'];
    echo"<td>".$row['status'];

    echo"<td><a href='admin_apdc_appointment_edit.php?id=".$row['id']."'><img src=\"edit.png\"></a>&nbsp&nbsp&nbsp
    <a href='admin_apdc_appointment_delete.php?id=".$row['id']."'><img src=\"trash.png\"></a>";
  }

}else{
  //echo "Empty Table";
}

?>
</table>


<h2 class="h2" align="left"> Approved Appointment(s)
    <!--<button2>&nbsp<i class='fas fa-plus' style='font-size:15px'></i>&nbsp<b style='font-size:15px;color:white;'><a href="admin_apdc_patient_add.php" style="color:white;text-decoration:none;"> Add Appointment &nbsp</b></a></button2>
    -->
    </h2>
    </form>
    <?php


if(isset($_POST[''])){
  $pending = $_POST['Pending'];

  if($pending != NULL){

    $sql = "Select * from tbl_requests where
    status LIKE 'Approved%'";

  }else{
    $sql = "Select * from tbl_requests where
    status LIKE 'Approved%'";
  }

}else{
  $sql = "Select * from tbl_requests where
  status LIKE 'Approved%'";
}

$result2 = $conn->query($sql);

if(!empty($result2)){
  echo "<table class='styled-table'";
  echo "<thead>";
  echo "<tr>";
  echo "<th> Appointment ID";
  echo "<th> User ID";
  echo "<th> Name";
  echo "<th> Contact No.";
  echo "<th> Email";
  echo "<th> Date";
  echo "<th> Time";
  echo "<th> Service";
  echo "<th> Status";

  while($row=$result2->fetch_assoc()){

    echo"<tr>";
    echo"<td>".$row['id'];
    echo"<td>".$row['userid'];
    echo"<td>".$row['name'];
    echo"<td>"."+63".$row['phone'];
    echo"<td>".$row['email'];
    echo"<td>".$row['prefdate'];
    echo"<td>".$row['preftime'];
    echo"<td>".$row['service'];
    echo"<td>".$row['status'];

    echo"<td><a href='admin_apdc_appointment_edit.php?id=".$row['id']."'><img src=\"edit.png\"></a>&nbsp&nbsp&nbsp
    <a href='admin_apdc_appointment_delete.php?id=".$row['id']."'><img src=\"trash.png\"></a>&nbsp&nbsp&nbsp
    <a href='admin_apdc_appointment_complete.php?id=".$row['id']."'><img src=\"check.png\"></a>";
  }

}else{
  //echo "Empty Table";
}

?>
</table>


<h2 class="h2" align="left"> Cancelled Appointment(s)
    <!--<button2>&nbsp<i class='fas fa-plus' style='font-size:15px'></i>&nbsp<b style='font-size:15px;color:white;'><a href="admin_apdc_patient_add.php" style="color:white;text-decoration:none;"> Add Appointment &nbsp</b></a></button2>
    -->
    </h2>
    </form>
    <?php


if(isset($_POST[''])){
  $pending = $_POST['Pending'];

  if($pending != NULL){

    $sql = "Select * from tbl_requests where
    status LIKE 'Cancelled%'";

  }else{
    $sql = "Select * from tbl_requests where
    status LIKE 'Cancelled%'";
  }

}else{
  $sql = "Select * from tbl_requests where
  status LIKE 'Cancelled%'";
}

$result2 = $conn->query($sql);

if(!empty($result2)){
  echo "<table class='styled-table'";
  echo "<thead>";
  echo "<tr>";
  echo "<th> Appointment ID";
  echo "<th> User ID";
  echo "<th> Name";
  echo "<th> Contact No.";
  echo "<th> Email";
  echo "<th> Date";
  echo "<th> Time";
  echo "<th> Service";
  echo "<th> Status";

  while($row=$result2->fetch_assoc()){

    echo"<tr>";
    echo"<td>".$row['id'];
    echo"<td>".$row['userid'];
    echo"<td>".$row['name'];
    echo"<td>"."+63".$row['phone'];
    echo"<td>".$row['email'];
    echo"<td>".$row['prefdate'];
    echo"<td>".$row['preftime'];
    echo"<td>".$row['service'];
    echo"<td>".$row['status'];

    echo"<td><a href='admin_apdc_appointment_edit.php?id=".$row['id']."'><img src=\"edit.png\"></a>&nbsp&nbsp&nbsp
    <a href='admin_apdc_appointment_delete.php?id=".$row['id']."'><img src=\"trash.png\"></a>";
  }

}else{
  //echo "Empty Table";
}

?>
</table>