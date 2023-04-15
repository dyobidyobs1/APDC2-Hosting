<?php require_once "login_register/controllerUserData.php"; ?>
<?php
#$email = $_SESSION['email'];
#$password = $_SESSION['password'];
if($email != false && $password != false){
    $sql = "SELECT * FROM usertable WHERE email = '$email'";
    $run_Sql = mysqli_query($con, $sql);
    if($run_Sql){
        $fetch_info = mysqli_fetch_assoc($run_Sql);
        $status = $fetch_info['status'];
        $code = $fetch_info['code'];
        if($status == "verified"){
            if($code != 0){
                header('Location: reset-code.php');
            }
        }else{
            header('Location: user-otp.php');
        }
    }
}else{
    #header('Location: apdc_home.php');
}
?>
 <!DOCTYPE html>
<html>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="apdc_bookonline.css">
  <link href="https://fonts.googleapis.com/css?family=Montserrat:100,200,300,400,500,600,700,800" rel="stylesheet">

  <head>
    <title>Contact Us | Apigo - Pedracio Dental Clinic</title>
  </head>
  <body>

    <!-- Navigation -->
    <nav class="topnav" style="max-width:100%">
      <a href="bigbrewhome.php">
        <!--<img src="bigbrewlogo.png">-->
      </a>
      <ul>
        <li><a href="apdc_home.php" class="hover-underline-animation" >Home</a></li>
        <li><a href="apdc_about.php" class="hover-underline-animation">About Us</a></li>
        <li><a href="apdc_services.php" class="hover-underline-animation">Services</a></li>
        <li><a href="apdc_contact.php" class="active">Contact</a></li>
        <li><a href="apdc_bookonline.php" class="hover-underline-animation">Book Online</a></li>
        <li><a href="login_register/login-user.php" class="button2" style="float:right;float: right;color:white;margin:0px 0px 0px 900px;">Login</a></li>
      </ul>
      <a href="customer_logout.php"></a>
    </nav>

    <!-- SlideShow -->
    <div class="w3-content w3-section" style="max-width:100%">

      <img class="mySlides" src="BOOK_apdc1.png" style="width:100%">
      <img class="mySlides" src="BOOK_apdc2.png" style="width:100%">
      <img class="mySlides" src="BOOK_apdc3.png" style="width:100%">
    </div>
    <div class="centered2"><p style="font-size: 25px;">APIGO - PEDRACIO DENTAL CLINIC</p>
    <b>CONTACT US</b>

  </div>

    <script>
      var myIndex = 0;
      carousel();

      function carousel() {
      var i;
      var x = document.getElementsByClassName("mySlides");
      for (i = 0; i < x.length; i++) {
      x[i].style.display = "none";
      }
      myIndex++;
      if (myIndex > x.length) {myIndex = 1}
      x[myIndex-1].style.display = "block";
      setTimeout(carousel, 2000); // Change image every 2 seconds
      }
    </script>


    <!-- 5th Content -->
    <div class="content5" style="max-width:100%;margin-bottom:100px;">
<div class="mapouter"><div class="gmap_canvas"><iframe width="600" height="500" id="gmap_canvas" src="https://maps.google.com/maps?q=168%20L%20Jaena%20St,%20Antipolo,%201870%20Rizal,%20Philippines&t=&z=13&ie=UTF8&iwloc=&output=embed" frameborder="0" scrolling="no" marginheight="0" marginwidth="0">
</iframe><a href="https://putlocker-is.org">putlocker</a><br><style>.mapouter{position:relative;text-align:right;height:500px;width:600px;margin-right: 100px;}</style><a href="https://www.embedgooglemap.net">get google map link</a><style>.gmap_canvas {overflow:hidden;background:none!important;height:500px;width:600px;}</style></div></div>
      <div class="text">
        <h1 align="left">VISIT US</h1>
        <p align="left" style="font-size: 25px;"><img src="location.png"/> 168 L Jaena St, Antipolo, 1870 Rizal, Philippines
        <p align="left" style="font-size: 25px;"><img src="phone.png"/> +63 949 409 0712
        <p align="left" style="font-size: 25px;"><img src="time.png"/> Monday-Thursday: 9AM-6PM
        <!--<p align="left"><a href="bigbreworder.php" class="button5"><b>Order now</b></a></p>-->
      </div>
      </div>
    </div>

    <!-- Footer -->
    <footer class="footer-distributed">

      <div class="footer-left">
        <p class="footer-links">
        <a href="bigbrewhome.php">Home</a>
        |
        <a href="bigbrewabout.php">About</a>
        |
        <a href="bigbrewmenu.php">Services</a>
        |
        <a href="bigbrewcontact.php">Contact</a>
        </p>
        <p class="footer-company-name">© 2022 Apigo - Pedracio Dental Clinic</p>
      </div>

      <div class="footer-center">
        <div>
          <p><span>
            168 L Jaena St, Antipolo, </span>1870 Rizal, Philippines.</p>
        </div>

        <div>
          <br>
          <p>+63 949-409-0712</p>
        </div>

        <div>
          <br>
          <p><a href="mailto:apigopedracio@gmail.com">apigopedracio@gmail.com</a></p>
        </div>
    </div>
    <div class="footer-right">
      <p class="footer-company-about">
      <span>About the Company</span>
      Our entire dental team is dedicated to provide you with the personalized, gentle care that you deserve.
      Located in the heart of Antipolo, Apigo - Pedracio Dental Clinic is proud to offer Implant and Advanced General Dentistry to our patients.
      <br>
      </p>

    </div>
    </footer>

  </body>
</html>
