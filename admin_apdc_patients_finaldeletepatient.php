<?php

include "dbconnect.php";
session_start();
//$email = $_SESSION["id"];
if(isset($_POST['sub'])){

  $ID = $_POST['aid'];

  $sql = "DELETE FROM tbl_patients WHERE id = '$ID'";

  $result = $conn->query($sql);
  $logs = "Insert into tbl_logs (email,action,date,time) values ('$email','Updated an Item',NOW(),NOW())";
$result1 = mysqli_query($conn/*, $logs*/);
  if($result == True){
    ?>

<script>
  alert("Successfully Deleted")
</script>

    <?php
    header("refresh:0;url=admin_apdc_patients.php");

  }else{
    echo $conn->error;
  }
}

 ?>
