<?php

include "dbconnect.php";
session_start();
//$email = $_SESSION["id"];
if(isset($_POST['sub'])){

  $ID = $_POST['aid'];
  $USERID = $_POST['auserid'];
  $NAME = $_POST['alname'];
  $PHONE = $_POST['aphone'];
  $EMAIL = $_POST['aemail'];
  $DATE = $_POST['aprefdate'];
  $TIME = $_POST['apreftime'];
  $SERVICE = $_POST['aservice'];
  $STATUS = $_POST['astatus'];

  $sql = "UPDATE tbl_requests SET status = '$STATUS' where id = '$ID'";

  $result = $conn->query($sql);
  //$logs = "Insert into tbl_logs (email,action,date,time) values ('$email','Updated an Item',NOW(),NOW())";
  if($result == True){
    ?>

<script>
  alert("Successfully Updated")
</script>

    <?php
    header("refresh:0;url=admin_apdc_appointment.php");

  }else{
    echo $conn->error;
  }
}

 ?>
