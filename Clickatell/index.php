<?php
    include "php/ClickatellSMS.php";

    if(isset($_GET['sendSMS'])){
        if(notifSMS('h31-G9dlTi-LBWen05L24Q==', $_GET['to'], 'Thank you for you request. Your appointment has been approved. Please arrive on time to your scheduled appointment. \n - Apigo Pedracio Dental Clinic')){
            echo "SMS successfully sent!";
        }else{
            echo "Something went wrong!";
        }
    }
    
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>SMS Test</title>
</head>
<body>
    <form method="GET">
        <input type="text" name="to" placeholder="Test Contact Number" required>
        <input type="submit" name="sendSMS" value="Send SMS">
    </form>
</body>
</html>
