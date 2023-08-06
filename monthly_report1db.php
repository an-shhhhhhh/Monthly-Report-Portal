<?php
    session_start();

    require_once('db.php');
    header('location: monthly_report2.php');

    mysqli_select_db($con, 'college_project');

    // $usertype    = $_POST['usertype'];
    $name        = $_POST['name'];
    $department  = $_POST['department'];
    $subject     = $_POST['subject'];
    $semester    = $_POST['semester'];
    $date         = $_POST['date'];
    
    

    // $s = "SELECT * FROM `users` WHERE email='$email'";
    // $result   = mysqli_query($con, $s);

    // $num= mysqli_num_rows($result);

    // if($num==1){

    //     //message to be displayed when the same user tries to register again.
    //     $_SESSION['message1']="It seems you have registered earlier, please login now instead of registering!";
    // }
    // else{
    
        //insert all the data into database table
        $query    = "INSERT into `mr` (name,department,subject,semester,date) VALUES ( '$name','$department', '$subject', '$semester', '".$date."')";

        mysqli_query($con, $query);

        //message to be displayed when the user registers successfully!
        $_SESSION['status']="Data saved";
        
    // }

?>