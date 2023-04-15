<?php

include "dbconnect.php";
session_start();
//$email = $_SESSION["id"];
if(!$conn->connect_error){
  //echo "Connected";
}
if(isset($_POST['sub'])){

  $services = $_POST['aservices'];
  $fees = $_POST['afees'];


/*kapag may ' ' varhchar ot date*/
$sql = "Insert into tbl_fees (services, fees)
values ('$services','$fees')";
$result = $conn->query($sql);
//$logs = "Insert into tbl_logs (email,action,date,time) values ('$email','Added an Item',NOW(),NOW())";
$result1 = mysqli_query($conn, $logs);

if($result == true){
?>
<script>
  alert("Successfully Added Record")
</script>
<?php
header("refresh:0;url=admin_apdc_fees.php");

}else{
echo $conn->error;
}
}

?>
