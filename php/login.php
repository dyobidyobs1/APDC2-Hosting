<?php
    if(isset($_POST['login'])){
        $sql = "SELECT * FROM tbl_patients WHERE email = '".$_POST['email']."';";
        $result = mysqli_query($conn, $sql);
        if (mysqli_num_rows($result) > 0) {
            while($row = mysqli_fetch_array($result)) {
                if($row['password'] == $_POST['password']){
                    if($row['status'] == 0){
                        header('location: login.php?err=502'); // Email not confirmed yet <Your email is not confirmed yet.>
                    }else if($row['status'] == 1){
                        session_start();
                        /* Create Session */
                        $_SESSION['logged_status'] = 1;
                        $_SESSION['logged_time'] = time();
                        $_SESSION['id'] = $row['id'];
                        $_SESSION['name'] = $row['name'];
                        $_SESSION['bday'] = $row['bday'];
                        $_SESSION['email'] = $row['email'];
                        $_SESSION['password'] = $row['password'];
                        $_SESSION['address'] = $row['address'];
                        $_SESSION['contact'] = $row['contact'];
                        $_SESSION['status'] = $row['status'];
                        echo "<script>alert('Authentication Success')</script>";
                        header("location: index.php"); // Authentication Success
                    }else if($row['status'] == -1){
                        echo "<script>alert('Your Account has been blocked. Contact support to reactivate your account.')</script>";
                        header('location: login.php?err=404'); // Blocked Account <Your Account has been blocked. Contact support to reactivate your account.>
                    }
                }else{
                    echo "<script>alert('Incorrect Email or Password.')</script>";
                    header('location: login.php?err=403'); // Incorrect Password <Incorrect Email or Password.>
                }
            }
        }else{
            echo "<script>alert('Incorrect Email or Password.')</script>";
            header('location: login.php?err=403'); // Email not exist <Incorrect Email or Password.>
        }
    }

    if(isset($_GET['signout']) && $_GET['signout'] == $_SESSION['id']){
        session_destroy();
        session_unset();
        header('location: index.php');
    }

    $currentTime = time();
    if (isset($_SESSION['logged_time']) && ($currentTime - $_SESSION['logged_time'] > 2000)) {
        session_destroy();
        session_unset();
        header('location: index.php');
    }else {
        $_SESSION['logged_time'] = time();
    }  
?>