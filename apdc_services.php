<!DOCTYPE html>
<html>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="apdc_services.css">
  <link href="https://fonts.googleapis.com/css?family=Montserrat:100,200,300,400,500,600,700,800" rel="stylesheet">

  <head>
    <title>Services | Apigo - Pedracio Dental Clinic</title>
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
        <li><a href="apdc_services.php" class="active">Services</a></li>
        <li><a href="index.php" class="hover-underline-animation">Book Online</a></li>
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
    <b>SERVICES</b>

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
    <div class="content3" style="max-width:100%">

    </div>
    <div class="content3" style="max-width:100%">
      <div class="image">
        <img src="pic1.jpg" class="homeimg3"/>
      </div>

      <div class="text">
        <h1 align="left">Dental Implants</h1>
        <p align="left">Dental implants are the next best thing to your healthy, natural teeth.  Strong and stable, a dental implant restores a lost tooth so that it looks, feels, fits and functions like a natural tooth when implanted by an experienced implant dentist.
        <p align="left"><a href="apdc_services_dentalimplant.php" class="button3"><b>Learn More</b></a></p>
      </div>
    </div>

    <div class="content3" style="max-width:100%">
    <div class="text">
        <h1 align="left">Teeth Whitening</h1>
        <p align="left">Laser tooth whitening takes about an hour with the patient getting three fifteen minute sessions with the Zoom tooth whitening laser. 
          Patients receive custom-fitted whitening trays and whitening gel as part of their whitening treatment. 
          This is best for maintaining whiteness of teeth after having advanced laser whitening.
        <p align="left"><a href="apdc_services_teethwhitening.php" class="button3"><b>Learn More</b></a></p>
      </div>
      <div class="image">
        <img src="pic2.jpg" class="homeimg3"/>
      </div>

      
    </div>

    <div class="content3" style="max-width:100%">
      <div class="image">
        <img src="pic3.png" class="homeimg3"/>
      </div>

      <div class="text">
        <h1 align="left">Cosmetic Dentistry</h1>
        <p align="left">
Cosmetic dentistry is any dental work that improves the appearance of teeth, gums and/or bite. 
It primarily focuses on improvement dental aesthetics in color, position, shape, size, alignment and overall smile appearance.
        <p align="left"><a href="apdc_services_cosmeticdentistry.php" class="button3"><b>Learn More</b></a></p>
      </div>
    </div>

    <div class="content3" style="max-width:100%">

<div class="text">
    <h1 align="left">Oral Surgery</h1>
    <p align="left">Oral surgery includes a number of surgical dental treatments. 
      The goal of oral surgery is to improve the function, health and appearance of your smile and the surrounding structures, such as your jaw. 
      In many cases, we strive to provide the most conservative treatment possible. 
    <p align="left"><a href="apdc_services_oralsurgery.php" class="button3"><b>Learn More</b></a></p>
  </div>
  <div class="image">
    <img src="pic4.jpg" class="homeimg3"/>
  </div>
</div>

<div class="content3" style="max-width:100%">
  <div class="image">
    <img src="pic5.jpg" class="homeimg3"/>
  </div>

  <div class="text">
    <h1 align="left">General Dentistry</h1>
    <p align="left">Our approach to general dentistry focuses on wellness and prevention. 
      We begin by assessing your overall health, as well as that of your teeth, gums, jaw and mouth. 
      Then, we’ll recommend a treatment plan to address immediate and long-term issues.
    <p align="left"><a href="apdc_services_generaldentistry.php" class="button3"><b>Learn More</b></a></p>
  </div>
</div>

<div class="content4" style="max-width:100%">

<?php


include "dbconnect.php";


/*if(!$conn->connect_error){
  echo "Connected";
}*/

if(isset($_POST['submit'])){
  $search = $_POST['search'];

  if($search != NULL){

    $sql = "Select * from tbl_fees where
    services LIKE '%$search%' or
    fees LIKE '%$search%'";

  }else{
    $sql = "Select * from tbl_fees";
  }

}else{
  $sql = "Select * from tbl_fees";
}

$result = $conn->query($sql);

if(!empty($result)){
  echo "<table class='styled-table'";
  echo "<thead>";
  echo "<tr>";
  echo "<th> Services";
  echo "<th> Fees";

  while($row=$result->fetch_assoc()){

    echo"<tr>";
    echo"<td>".$row['services'];
    echo"<td>"."PHP ".$row['fees'];
  }

}else{
  //echo "Empty Table";
}
echo "</table>"

?>
</div>

   <!-- Footer -->
   
   <footer class="footer-distributed">

<div class="footer-left">
  <p class="footer-links">
  <a href="apdc_home.php">Home</a>
  |
  <a href="apdc_about.php">About</a>
  |
  <a href="apdc_services.php">Services</a>
  |
  <a href="index.php">Book Now</a>
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
