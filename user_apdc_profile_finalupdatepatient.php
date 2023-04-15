<?php

include "dbconnect.php";
session_start();
$_SESSION['id'];
if(isset($_POST['sub'])){

  $ID = $_POST['aid'];
  $NAME = $_POST['aname'];
  $ADDRESS = $_POST['aaddress'];
  $BIRTHDAY = $_POST['abirthday'];
  $CONTACT = $_POST['acontact'];
  $EMAIL = $_POST['aemail'];
  $PASSWORD = $_POST['apassword'];

  $sql = "UPDATE tbl_patients SET id = '$ID', name = '$NAME', address = '$ADDRESS', bday = '$BIRTHDAY', contact = '$CONTACT', email = '$EMAIL',password = '$PASSWORD' where id = '$ID'";

  $result = $conn->query($sql);
  //$logs = "Insert into tbl_logs (email,action,date,time) values ('$email','Updated an Item',NOW(),NOW())";
$result1 = mysqli_query($conn/*, $logs*/);
  if($result == True){
    ?>

<script>
  alert("Successfully Updated")
</script>

    <?php
    header("refresh:0;url=user_apdc_profile.php");

  }else{
    echo $conn->error;
  }
}

 ?>
