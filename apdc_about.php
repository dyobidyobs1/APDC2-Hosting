<!DOCTYPE html>
<html>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="apdc_about.css">
  <link href="https://fonts.googleapis.com/css?family=Montserrat:100,200,300,400,500,600,700,800" rel="stylesheet">

  <head>
    <title>About Us | Apigo - Pedracio Dental Clinic</title>
  </head>
  <body>

    <!-- Navigation -->
    <nav class="topnav" style="max-width:100%">
      <a href="#">
        <!--<img src="bigbrewlogo.png">-->
      </a>
      <ul>
        <li><a href="apdc_home.php" class="hover-underline-animation" >Home</a></li>
        <li><a href="apdc_about.php" class="active">About Us</a></li>
        <li><a href="apdc_services.php" class="hover-underline-animation">Services</a></li>
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
    <div class="centered2">
    <b>About Our Dental Practice</b>
    <p style="font-size: 25px;">10+ years of personalized & high-tech dentistry. <br>
Focused on your comfort and lifelong health. Always accepting new patients!</p>

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

<div class="content2" style="max-width:100%">


      <p class="p" align="center" style="font-size: 25px;"><i> "Dr. Let and her office is amazing! Everybody in the office is courteous, kind, and professional.<b> I am so happy I made the switch to Dr. Let’s office</b>.</i>”
      <p class="p" align="center" style="font-size: 20px;">- MIQUEL D.</p>
    </div>


    <div class="content3" style="max-width:100%">
    
    <h6>
      <img src="heart.png" class="homeimg2">
      <p align="center" style="font-size: 25px;"><b>Comfort</b></p>
      <p align="center" style="font-weight:normal">Relax and enjoy your time at the dentist. Our entire staff is dedicated to delivering a pleasant and high-comfort experience unlike any other dentist!</p>
    </h6>
    <h6>
      <img src="chat.png" class="homeimg2">
      <p align="center" style="font-size: 25px;"><b>Relationships</b></p>
      <p align="center" style="font-weight:normal">Experience a personalized approach. We focus on establishing long-term relationships by designing a care and prevention plan meant just for you.</p>
    </h6>
    <h6>
       <img src="like.png" class="homeimg2"/>
      <p align="center" style="font-size: 25px;"><b>Results</b></p>
      <p align="center" style="font-weight:normal">Modern, high-tech treatments ensure every tooth in your mouth is healthy and beautiful! We offer proven dental technologies to ensure you achieve dental health</p>
    </h6>
  </div>


    <!-- 2nd Content -->
    <div class="content4" style="max-width:100%">
    <img src="about_1.jpg" style="max-width: 600px;float:right;padding-top:30px;padding-left:80px;padding-right:60px;padding-bottom:30px;">
      <h2 class="h2" align="center" style="text-align:left">STYLE YOUR SMILE</h2>
     
      <p class="p" style="text-align:left">
      Style your smile beyond beautiful at Apigo - Pedracio Dental Clinic which is a premium one stop Dental, a first of its kind in the Metro.

      <p class="p" style="text-align:left">
      Merging the rich art culture and magnificent aesthetics with world –class hospitality and services of the Philippines.
      Giving our top notch patients an extraordinary experience and the premium quality services that they deserve.</p>

      <p class="p" style="text-align:left">
      Over the past years, our Founders Dr. Emelita Apigo Pedracio & her husband Gaylord Pedracio educated their patients about the importance
      of Dental health. And how the health of your mouth, teeth and gums can affect your general health and the connection between the health of your teeth and gums and facial
      attractiveness.</p>

      <p class="p" style="text-align:left">
      Offering a wide range of specialized services in one center including, Teeth Whitening,
      Smile Makeover, Dental Implants & Surgery, Orthodontics.</p>

      <p class="p" style="text-align:left">
      Apigo - Pedracio have a comprehensive solution for all your dental needs, we assure you that we strive to give
      you and all our patients a positive, comfortable experience and assist in every step of the treatment.</p>

    </div>


    <div class="parallax1"></div>

    <!-- 4th Content -->
<div class="content4" style="max-width:100%">

    <h2 align="center" > APDC ADVANTAGES</h2>
    <p class="p" align="center" > Apigo - Pedracio Dental Clinic, a frontrunner in advanced modern dentistry, prides itself on its proficiency, mastery, and high level of competency,
      and in using only top-of-the-line medical and dental equipment to provide patients with premium dental care in a comfortable, relaxed and upscale environment. Offering a variety of general services, APDC specializes in cosmetic and reconstructive dentistry.
      It is also one of the few dental offices that offer breath therapy. </p>
    
    
    
      <h2 align="center" > INNOVATION</h2>
    <p class="p" align="center" > Meet doctor for a private comprehensive consultation with digital photography for facial and smile analysis.
Experience the mock-up or virtual smile design to help you visualize your end result.
Customized functional provisionals to test drive your new teeth and smile, and ensure the best result.
Our porcelain, unlike most clinics, is hand made by a master ceramist.
We use the newest ceramic bonding systems to ensure long-term success, and a smile that will be an asset for a life time.</p>


</div>
</div>


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
