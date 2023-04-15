<?php

include "dbconnect.php";
session_start();
//$email = $_SESSION["id"];
if(isset($_POST['sub'])){

  $ID = $_POST['aid'];
  $NAME = $_POST['aname'];
  $ADDRESS = $_POST['aaddress'];
  $CONTACT = $_POST['acontact'];
  $EMAIL = $_POST['aemail'];

  $sql = "UPDATE tbl_admins SET id = '$ID', name = '$NAME', address = '$ADDRESS', contact = '$CONTACT', email = '$EMAIL' where id = '$ID'";

  $result = $conn->query($sql);
  //$logs = "Insert into tbl_logs (email,action,date,time) values ('$email','Updated an Item',NOW(),NOW())";
$result1 = mysqli_query($conn/*, $logs*/);
  if($result == True){
    ?>

<script>
  alert("Successfully Updated")
</script>

    <?php
    header("refresh:0;url=admin_apdc_admin.php");

  }else{
    echo $conn->error;
  }
}

 ?>
