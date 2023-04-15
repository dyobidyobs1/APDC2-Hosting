<?php

include "dbconnect.php";
session_start();
//$email = $_SESSION["id"];
if(!$conn->connect_error){
  //echo "Connected";
}
if(isset($_POST['sub'])){

  $fname = $_POST['firstname'];
  $lname = $_POST['lastname'];
  $phone = $_POST['phone'];
  $email = $_POST['email'];
  $pdate = $_POST['prefdate'];
  $ptime = $_POST['preftime'];
  $savailability = $_POST['savailability'];
  $patientstatus = $_POST['patientstatus'];

/*kapag may ' ' varhchar ot date*/
$sql = "Insert into tbl_requests (firstname, lastname, phone, email, prefdate, preftime, service, patientstatus, status)
values ('$fname','$lname',$phone,'$email','$pdate','$ptime','$savailability','$patientstatus','Pending')";
$result = $conn->query($sql);
//$logs = "Insert into tbl_logs (email,action,date,time) values ('$email','Added an Item',NOW(),NOW())";

if($result == true){
?>
<script>
  alert("Successfully Added Record")
</script>
<?php
header("refresh:0;url=apdc_bookonline.php");

}else{
echo $conn->error;
}
}

?>
