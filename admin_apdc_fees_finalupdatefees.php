<?php

include "dbconnect.php";
session_start();
//$email = $_SESSION["id"];
if(isset($_POST['sub'])){

  $ID = $_POST['aid'];
  $services = $_POST['aservices'];
  $fees = $_POST['afees'];

  $sql = "UPDATE tbl_fees SET id = '$ID',
  services = '$services',fees = '$fees' where id = '$ID'";

  $result = $conn->query($sql);
  //$logs = "Insert into tbl_logs (email,action,date,time) values ('$email','Updated an Item',NOW(),NOW())";
  if($result == True){
    ?>

<script>
  alert("Successfully Updated")
</script>

    <?php
    header("refresh:0;url=admin_apdc_fees.php");

  }else{
    echo $conn->error;
  }
}

 ?>
