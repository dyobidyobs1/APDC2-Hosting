<?php
    session_start();

    /* Put your DB Conneciton here. Connection should be on top of the login.php and register.php */
    $server = 'us-cdbr-east-06.cleardb.net';
    $user = 'bb4ae697c23c67';
    $pass = '6af8c958';
    $database = 'heroku_cd28dd5417dc450';

    $conn = new mysqli($server, $user, $pass, $database);

    include "php/login.php";
    include "php/register.php";

    /* This will restrict the user from accessing the login-protected pages if not logged in. */
    if(!isset($_SESSION['logged_status'])){
        header('location: login.php');
    }
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Appointment | Apigo-Pedracio Dental Clinic</title>
</head>
<body>
    You're logged in as <?php echo $_SESSION['name']; ?>!
    <button onclick="window.location.href='?signout=<?php echo $_SESSION['id']; ?>'">Logout</button>
</body>
</html>
<meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="user_apdc_profile.css">
  <link href="https://fonts.googleapis.com/css?family=Montserrat:100,200,300,400,500,600,700,800" rel="stylesheet">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">

  <body>

      <!-- Navigation -->
      <nav class="topnav" style="max-width:100%">
      <span style="cursor:pointer" onclick="openNav()">&#9776; </span>

      <a href="admin_apdc_admin.php" style="color:white; font-size: 25px;"></a>
      <a href="logout.php" name="logout">Logout</a>

      </nav>

    <!-- Navigation -->
    <div id="mySidenav" class="sidenav">
      <!--<a href="javascript:void(0)" class="closebtn" onclick="closeNav()">&times;</a>-->
      <a href="index.php"><img src="home.png"/> Dashboard</a>
      <a href="user_apdc_profile.php"><img src="admin.png"/> Profile</a>
      <b><a href="user_apdc_appointment.php"><img src="appointment.png"/> Book Appointment</a></b>
      <a href="user_apdc_appointmentlist.php"><img src="book.png"/> My Appointments</a>
      <a href="user_apdc_history.php"><img src="history.png"/> My History</a>
    </div>

    <script>
    function openNav() {
      document.getElementById("mySidenav").style.width = "300px";
    }

    </script>
    </form>

    <div class="content2" style="max-width:100%">
    <h2 class="h2" align="left">Book an Appointment</h2>    
  </body>
</html>

<?php
include "dbconnect.php";

$ID = $_SESSION['id'];;

$sql = "Select * from tbl_patients where id = '$ID'";
$result = $conn->query($sql);

$row = $result->fetch_assoc();

$aid = $row['id'];
$aname = $row['name'];
$aaddress = $row['address'];
$abirthday = $row['bday'];
$acontact = $row['contact'];
$aemail = $row['email'];
$apassword = $row['password'];

$conn->close();
 ?>
 <!DOCTYPE html>
 <html>
   <meta charset="UTF-8">
   <meta name="viewport" content="width=device-width, initial-scale=1">
   <link href="https://fonts.googleapis.com/css?family=Montserrat:100,200,300,400,500,600,700,800" rel="stylesheet">
   <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
 <script src='https://kit.fontawesome.com/a076d05399.js' crossorigin='anonymous'></script>
   <body>

     </script>

     <form method="POST" action="user_apdc_appointment_finaladd.php">
<table class='styled-table'>
<tr>
<tr>
<th colspan=2>


    <tr>
        <th>
        User ID
        <th>
            Name
    <tr>
        <td>
            <input type=text name=auserid value="<?php echo $aid;?>"readonly>
        <td>
            <input type=text name=aname value="<?php echo $aname;?>"readonly>
      <tr>
        <th>
            Contact No.
          <th>
            Email
      <tr>
        <td>
        <input type=text name=acontact value="0<?php echo $acontact;?>"readonly>
          <td>
          <input type=text name=aemail value="<?php echo $aemail;?>"readonly>
      <tr>
        <th>
          Preferred Appointment Date
          <th>
            Preferred Appointment Time
      <tr>
        <td>
          <input type=date name=prefdate id="date" required>
          <script>

const picker = document.getElementById('date');
picker.addEventListener('input', function(e){
  var day = new Date(this.value).getUTCDay();
  if([5,6,0].includes(day)){
    e.preventDefault();
    this.value = '';
    alert('Our clinic is CLOSED on Friday, Saturday & Sunday. Please select another day.');
  }
});
            </script>

          <td>
          <select name=preftime id="time" required>
            <option value="9:00 AM - 10:30 AM">9:00 AM - 10:30 AM</option>
            <option value="11:00 AM - 12:30 PM">11:00 AM - 12:30 PM</option>
            <option value="1:00 PM - 2:30 PM">1:00 PM - 2:30 PM</option>
            <option value="3:00 PM - 4:30 PM">3:00 PM - 4:30 PM</option>
            <option value="5:00 - 6:00 PM">5:00 PM - 6:00 PM</option>
          </select>
          
          <script>
            </script>
      <tr>
        <th>
Procedure
      <tr>
        <td colspan="2">
          <select name=service value="<?php echo $service;?>">
          <option value="CONSULTATION">CONSULTATION</option>
          <option value="ORAL PROPHYLAXIS (CLEANING)">ORAL PROPHYLAXIS (CLEANING)</option>
          <option value="PIT & FISSURE SEALANT (PASTA)">PIT & FISSURE SEALANT (PASTA)</option>
          <option value="TOOTH EXTRACTION">TOOTH EXTRACTION</option>
          <option value="ROOT CANAL TREATMENT">ROOT CANAL TREATMENT</option>
          <option value="DENTURES">DENTURES</option>
          <option value="VENEERS">VENEERS</option>
          <option value="ORTHODONTIC TREATMENT (BRACES)">ORTHODONTIC TREATMENT (BRACES)</option>
          <option value="RETAINERS">RETAINERS </option>
          <option value="MOUTHGUARD">MOUTHGUARD </option>
          <option value="WHITENING">WHITENING </option>
          <option value="RADIOGRAPHS">RADIOGRAPHS </option>
          <option value="OTHER">OTHER</option>
        </select>

      <tr>
          <th colspan="2">
          <input type=submit name="sub" value="Submit">

      </form>
    </table>



    </div>
  </body>
</html>
