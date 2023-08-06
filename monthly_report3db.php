<?php
    session_start();

    require_once('db.php');
    header('location: monthly_report4.php');

    mysqli_select_db($con, 'college_project');

    // $usertype    = $_POST['usertype'];
    $industry_interaction        = $_POST['industry_interaction'];
    $project_status  = $_POST['project_status'];
    $guest_lectures     = $_POST['guest_lectures'];

    //insert all the data into database table
    $query    = "INSERT into `mr` (industry_interaction,project_status,guest_lectures) VALUES ( '$industry_interaction','$project_status', '$guest_lectures')";

    mysqli_query($con, $query);

    //message to be displayed when the user registers successfully!
    $_SESSION['status']="Data saved";
    
// }

?>