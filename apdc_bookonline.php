<!DOCTYPE html>
<html>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="apdc_bookonline.css">
  <link href="https://fonts.googleapis.com/css?family=Montserrat:100,200,300,400,500,600,700,800" rel="stylesheet">

  <head>
    <title>Book Online | Apigo - Pedracio Dental Clinic</title>
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
        <li><a href="apdc_bookonline.php" class="active">Book Online</a></li>
        <li><a href="index.php" class="button2" style="float:right;float: right;color:white;margin:0px 0px 0px 900px;">Login</a></li>
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
    <b>ONLINE APPOINTMENT</b>

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

    <!-- 2nd Content -->
    <div class="content2" style="max-width:100%">


<form method="POST" action="apdc_bookonline_finaladd.php">
<table class='styled-table'>
<tr>
<tr>
<th colspan=2>
<center><p id=title>Book an Appointment</p></center>
        <tr>
          <th>
            First Name
            <th>
              Last Name
        <tr>
          <td>
            <input type=text name=firstname required>
            <td>
            <input type=text name=lastname required>
      <tr>
        <th>
          Phone
          <th>
            Email
      <tr>
        <td>
          <input type=text name=phone required>
          <td>
            <input type=email name=email required>
      <tr>
        <th>
          Preferred Appointment Date
          <th>
            Preferred Appointment Time
      <tr>
        <td>
          <input type=date name=prefdate required>
          <td>
          <select name=preftime required>
            <option>----------</option>
            <option value="9:00 AM - 10:30 AM">9:00 AM - 10:30 AM</option>
            <option value="11:00 AM - 12:30 PM">11:00 AM - 12:30 PM</option>
            <option value="1:00 PM - 2:30 PM">1:00 PM - 2:30 PM</option>
            <option value="3:00 PM - 4:30 PM">3:00 PM - 4:30 PM</option>
            <option value="5:00 - 6:00 PM">5:00 PM - 6:00 PM</option>
          </select>
      <tr>
        <th>
Service Required
      <tr>
        <td colspan="2">
          <select name=savailability value="<?php echo $savailability;?>">
          <option>----------</option>
          <option value="Cleaning">Cleaning</option>
          <option value="Checkup">Check-Up</option>
          <option value="Cosmetic">Cosmetic Dentistry</option>
          <option value="Fillings">Fillings</option>
          <option value="Surgery">Surgery</option>
          <option value="Orthodontics">Orthodontics</option>
          <option value="Others">Others</option>
        </select>

<tr>
<th colspan="2">  Current Patient
  <tr>
<td>
<input type="radio" id="yes" name="patientstatus" value="Yes" required>
  <label for="yes">Yes</label>
  <input type="radio" id="no" name="patientstatus" value="No" required>
  <label for="no">No</label>

      <tr>
          <th colspan="2">
          <input type=submit name="sub" value="Submit">

      </form>
    </table>

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
