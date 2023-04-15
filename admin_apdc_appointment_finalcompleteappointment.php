<?php

include "dbconnect.php";
session_start();
//$email = $_SESSION["id"];
if(isset($_POST['sub'])){

  $ID = $_POST['aid'];
  $USERID = $_POST['auserid'];
  $NAME = $_POST['aname'];
  $PHONE = $_POST['aphone'];
  $EMAIL = $_POST['aemail'];
  $DATE = $_POST['aprefdate'];
  $TIME = $_POST['apreftime'];
  $SERVICE = $_POST['aservice'];
  $STATUS = $_POST['aservice'];

  $sql = "Insert into tbl_history (id, userid, name, phone, email, prefdate, preftime, service, status)
values ($ID, $USERID, '$NAME', $PHONE, '$EMAIL','$DATE','$TIME','$SERVICE','Completed')";
$sql2 = "DELETE FROM tbl_requests WHERE id = '$ID'";

  
  $result = $conn->query($sql);
  $result2 = $conn->query($sql2);
  
  if($result == True){
    ?>

<script>
  alert("Appointment Completed Successfully")
</script>

    <?php
    header("refresh:0;url=admin_apdc_appointment.php");

  }else{
    echo $conn->error;
  }

  if($result2 == True){
    ?>

    <?php
    header("refresh:0;url=admin_apdc_appointment.php");

  }else{
    echo $conn->error;
  }
}

 ?>
