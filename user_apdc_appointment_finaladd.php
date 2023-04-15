<?php

//session_start();
//$email = $_SESSION["id"];

$servername = 'us-cdbr-east-06.cleardb.net';
$username = 'bb4ae697c23c67';
$password = '6af8c958';
$dbase = 'heroku_cd28dd5417dc450';

$conn = new mysqli($servername, $username, $password, $dbase);

// Check connection
if ($conn->connect_error) {
  die("Connection failed: " . $conn->connect_error);
}
$userid = $_POST['auserid'];
$name = $_POST['aname'];
$contact = $_POST['acontact'];
$email = $_POST['aemail'];
$pdate = $_POST['prefdate'];
$ptime = $_POST['preftime'];
$service = $_POST['service'];


if(isset($_POST['sub'])) {
// Check if column1 and column2 are the same before inserting new record

$stmt = $conn->prepare("SELECT * FROM tbl_requests WHERE prefdate='$pdate' and preftime='$ptime'");

$stmt->execute();
$result = $stmt->get_result();

if ($result->num_rows > 0) {
  ?>
            <script>
              alert("Appoinment already exists. Please book a new appointment schedule.")
            </script>

            <?php
            header("refresh:0;url=user_apdc_appointment.php");
} else {
  // Insert new record into table
  $stmt = $conn->prepare("INSERT IGNORE INTO tbl_requests (userid, name, phone, email, prefdate, preftime, service, status)
  VALUES ('$userid','$name',$contact,'$email','$pdate','$ptime','$service','Pending')");
  
  if ($stmt->execute()) {
    ?>
    <script>
    alert("Your appointment request has been sent! Please wait for the confirmation SMS as soon as this appointment gets approved.")
    </script>
    <?php
    header("refresh:0;url=user_apdc_appointment.php");
  } else {
    echo "Error: " . $stmt->error;
  }
}

$stmt->close();
$conn->close();



}






/*
if(isset($_POST['sub'])) {

  $userid = $_POST['auserid'];
  $name = $_POST['aname'];
  $contact = $_POST['acontact'];
  $email = $_POST['aemail'];
  $pdate = $_POST['prefdate'];
  $ptime = $_POST['preftime'];
  $service = $_POST['service'];

  //connect to the database
  $dbc = mysqli_connect('localhost', 'root', '', 'db_apdc') or die('Error connecting to MySQL server');
  $check = mysqli_query($dbc,"select * from tbl_request where prefdate='$pdate' and preftime='$ptime'");
  //$checkrows = mysqli_num_rows($check);

  //$duplicate=mysqli_num_rows($check);

if(mysqli_num_rows($check)==0) {
  //insert results from the form input
  $query = "INSERT IGNORE INTO tbl_requests (userid, name, phone, email, prefdate, preftime, service, status)
  VALUES ('$userid','$name',$contact,'$email','$pdate','$ptime','$service','Pending')";
  $result = $conn->query($query);

    if($result == true){
      ?>
      <script>
      alert("Successfully Added Record")
      </script>
      <?php
      header("refresh:0;url=user_apdc_appointment.php");

    }else{
      echo $conn->error;
    }

  mysqli_close($dbc);

} 
          
          else {  

            ?>
            <script>
              alert("Appoinment already exists. Please select another date/time.")
            </script>

            <?php
            header("refresh:0;url=user_apdc_appointment.php");


            



          }

  };*/
?>
