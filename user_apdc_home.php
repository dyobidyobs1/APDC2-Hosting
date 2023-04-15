<?php
        session_start();

        /* Put your DB Conneciton here. Connection should be on top of the login.php and register.php */
        $server = 'us-cdbr-east-06.cleardb.net';
        $user = 'bb4ae697c23c67';
        $pass = '6af8c958';
        $database = 'heroku_cd28dd5417dc450';
    
        $conn = new mysqli($server, $user, $pass, $database);
    
        if ($conn->connect_error) {
            echo $conn->connect_error;
        }
        include "php/login.php";
        include "php/register.php";

        /* This will restrict the user from accessing the login-protected pages if not logged in. */
        if(!isset($_SESSION['logged_status'])){
            header('location: login.php');
        }
    ?>

<!DOCTYPE html>
<html>

<meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="admin_apdc_home.css">
  <link href="https://fonts.googleapis.com/css?family=Montserrat:100,200,300,400,500,600,700,800" rel="stylesheet">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">

  <head>
    <title>Home | Apigo - Pedracio Dental Clinic</title>
  </head>
  <body>
    <form method="POST" action="admin_apdc_home.php">

      <!-- Navigation -->
      <nav class="topnav" style="max-width:100%">
      <span style="cursor:pointer" onclick="openNav()">&#9776; </span>

      <a href="admin_apdc_admin.php" style="color:white; font-size: 25px;"></a>
      <a href="logout.php" name="logout">Logout</a>

      </nav>

    <!-- Navigation -->
    <div id="mySidenav" class="sidenav">
      <!--<a href="javascript:void(0)" class="closebtn" onclick="closeNav()">&times;</a>-->
      <b><a href="user_apdc_home.php"><img src="home.png"/> Dashboard</a></b>
      <a href="user_apdc_admin.php"><img src="admin.png"/> Profile</a>
      <a href="user_apdc_appointment.php"><img src="appointment.png"/> Book Appointment</a>
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
    <h2 class="h2" align="left">Dashboard</h2>
    You're logged in as <?php echo $_SESSION['name']; ?>!
    <button onclick="window.location.href='?signout=<?php echo $_SESSION['id']; ?>'">Logout</button>
  </body>
</html>


