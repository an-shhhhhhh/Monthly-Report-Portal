<?php
    session_start();

    require_once('db.php');
    header('location: home.php');

    mysqli_select_db($con, 'college_project');

    // $usertype    = $_POST['usertype'];
    $name        = $_POST['name'];
    $address     = $_POST['address'];
    $phone       = $_POST['phone'];
    $gender      = $_POST['gender'];
    $dob         = $_POST['dob'];
    $department  = $_POST['department'];
    $uid         = $_POST['uid'];
    $email       = $_POST['email'];
    $password    = $_POST['password'];

    $s = "SELECT * FROM `users` WHERE email='$email'";
    $result   = mysqli_query($con, $s);

    $num= mysqli_num_rows($result);

    if($num==1){

        //message to be displayed when the same user tries to register again.
        $_SESSION['message1']="It seems you have registered earlier, please login now instead of registering!";
    }
    else{
    
        //insert all the data into database table
        $query    = "INSERT into `users` (name,address,phone,gender,dob,department,uid,email,password) VALUES ( '$name', '$address', '$phone', '".$gender."', '".$dob."','$department','$uid', '$email', '" . $password . "')";

        mysqli_query($con, $query);

        //message to be displayed when the user registers successfully!
        $_SESSION['status']="Registered successfully!";
        
    }

?>