<?php

include "dbconnect.php";
session_start();
//$email = $_SESSION["id"];
if(!$conn->connect_error){
  //echo "Connected";
}
if(isset($_POST['sub'])){

  $date = $_POST['sdate'];
  $starttime = $_POST['sstarttime'];
  $endtime = $_POST['sendtime'];
  $availability = $_POST['savailability'];


/*kapag may ' ' varhchar ot date*/
$sql = "Insert into tbl_schedule (date, starttime, endtime, availability)
values ('$date','$starttime','$endtime', '$availability')";
$result = $conn->query($sql);
//$logs = "Insert into tbl_logs (email,action,date,time) values ('$email','Added an Item',NOW(),NOW())";
$result1 = mysqli_query($conn, $logs);

if($result == true){
?>
<script>
  alert("Successfully Added Record")
</script>
<?php
header("refresh:0;url=admin_apdc_schedule.php");

}else{
echo $conn->error;
}
}

?>
