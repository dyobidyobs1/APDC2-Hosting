<?php

include "dbconnect.php";
session_start();
//$email = $_SESSION["id"];
if(!$conn->connect_error){
  //echo "Connected";
}
if(isset($_POST['sub'])){

  $name = $_POST['aname'];
  $address = $_POST['aaddress'];
  $contact = $_POST['acontact'];
  $email = $_POST['aemail'];


/*kapag may ' ' varhchar ot date*/
$sql = "Insert into tbl_staffs (name, address, contact, email)
values ('$name','$address',$contact,'$email')";
$result = $conn->query($sql);
//$logs = "Insert into tbl_logs (email,action,date,time) values ('$email','Added an Item',NOW(),NOW())";
$result1 = mysqli_query($conn, $logs);

if($result == true){
?>
<script>
  alert("Successfully Added Record")
</script>
<?php
header("refresh:0;url=admin_apdc_staff.php");

}else{
echo $conn->error;
}
}

?>
