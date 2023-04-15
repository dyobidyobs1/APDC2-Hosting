<?php
    if(isset($_POST['register'])){
        if($_POST['password'] == $_POST['repassword']){
            $sql = "SELECT * FROM tbl_patients WHERE email = '".$_POST['email']."';";
            $result = mysqli_query($conn, $sql);
            if (mysqli_num_rows($result) <= 0) {
                $id = rand(1000,9999).rand(10000,99999);
                $sql1 = "INSERT INTO tbl_patients VALUES(".$id.",'".$_POST['name']."', '".$_POST['address']."', '".$_POST['bday']."', ".$_POST['contact'].", '".$_POST['email']."', '".$_POST['password']."', 'tokentest', 0);";
                if ($conn->query($sql1) === TRUE) {

                    /* Confirmation Email Send */
                    require_once 'vendor/autoload.php';
                    $transport = (new Swift_SmtpTransport('smtp-relay.sendinblue.com', 587))
                    ->setUsername('0110harold@gmail.com')
                    ->setPassword('Q6rFpKD8nOAUGYJR')
                    ;
                    $mailer = new Swift_Mailer($transport);
                    $message = (new Swift_Message('Email Confirmation'))
                    ->setFrom(['apdc@gmail.com' => 'Apigo-Pedracio Dental Clinic'])
                    ->setTo([$_POST['email'], $_POST['email'] => $_POST['name']])
                    ->setBody('Hi <b>'.$_POST['name'].'</b>,
                    <p>Click the One-Time Link (OTL) below to verify your email address. <br>
                    <p>http://localhost/APDC/register.php?id='.$id.'&confirmAccount=JasLLAksAAS1'.RAND(111,999).'0aAPosA@'.$id.'</p>
                    <p>Do not share this link with anyone. We take account security very seriously at APDC.<br>
                    Customer Care will never ask you for your account password, credit card, or banking account number.</p>
                    <p>Kind regards,<br>
                    <b>Apigo-Pedracio Dental Clinic Staff</b></p>')
                    ;
                    $result = $mailer->send($message);
                    
                    header('location: register.php?emailsent=1'); // Registration Success & Email Confirmation Sent <Your account has been successfully registered. We sent an email confirmation to your registered email address.>
                } else {
                    header('location: register.php?err=305'); // Internal Error <Oops. Something went wrong.>
                }
            }else{
                header('location: register.php?err=304'); // Account already registerd <This email is already taken.>
            }
        }else{
            header('location: register.php?err=303'); // Password Doesnt Matched <Password doesn't matched. Check your spelling.>
        }
    }

    if(isset($_GET['confirmAccount'])){
        $sql1 = "UPDATE tbl_patients SET status = 1 WHERE id = '".$_GET['id']."';";
        if ($conn->query($sql1) === TRUE) {
            header('location: register.php?confirmed=1'); // Account Confirmed <Your email is now confirmed. Please login to continue.>
        }
    }
                
?>