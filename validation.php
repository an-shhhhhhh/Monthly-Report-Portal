<?php
    session_start();
    require_once('db.php');
    
    
    $usertype   = $_POST['usertype'];
    $name       = $_POST['name'];
    $address    = $_POST['address'];
    $phone      = $_POST['phone'];
    $gender     = $_POST['gender'];
    $dob        = $_POST['dob'];
    $department= $_POST['department'];
    $uid        = $_POST['uid'];
    $email      = $_POST['email'];
    $password   = $_POST['password'];


    $s = "SELECT * FROM `users` WHERE email='$email' && password='$password'"; 

    $result   = mysqli_query($con, $s);

    $num= mysqli_num_rows($result);


    if($num==1){

        $_SESSION['email']=$email;
        
        switch($usertype){

            //when the usertype is admin , he will be redirected to admin's display page
            case 'admin':
                header("Location: admin.php");
                exit();
                break;

            //when the usertype is faculty , he will be redirected to users page
            case 'faculty':
                header("Location: faculty.php");
                exit();
                break;

            //when the usertype is blank that means he is a faculty so , he will be redirected to users page
            case NULL:
                header("Location: faculty.php");
                exit();
                break;
        }
        
    }
    else{
        //message to be displayed when user enters wrong email id or password.
        $_SESSION['message2']="Invalid email or password";

        //and after entering wrong email id or password , he will be redirected to the home page.
        header('location: home.php');
    }

?>