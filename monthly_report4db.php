<?php
    session_start();

    require_once('db.php');
    header('location: monthly_report5.php');

    mysqli_select_db($con, 'college_project');

    // $usertype    = $_POST['usertype'];
    $tasks_conducted        = $_POST['tasks_conducted'];
    $moocs_done  = $_POST['moocs_done'];
    $your_skill_development     = $_POST['your_skill_development'];
    $efforts_taken     = $_POST['efforts_taken'];

    //insert all the data into database table
    $query    = "INSERT into `mr` (tasks_conducted,moocs_done,your_skill_development,efforts_taken) VALUES ( '$tasks_conducted','$moocs_done', '$your_skill_development','$efforts_taken')";

    mysqli_query($con, $query);

    //message to be displayed when the user registers successfully!
    $_SESSION['status']="Data saved";
    
// }

?>