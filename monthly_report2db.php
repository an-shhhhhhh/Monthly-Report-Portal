<?php
    session_start();

    require_once('db.php');
    header('location: monthly_report3.php');

    mysqli_select_db($con, 'college_project');

    $name        = $_POST['name'];
    $department  = $_POST['department'];
    $subject     = $_POST['subject'];
    $semester    = $_POST['semester'];
    $date         = $_POST['date'];
    

    $subject_no1        = $_POST['subject_no1'];
    $semester1  = $_POST['semester1'];
    $department1         = $_POST['department1'];
    $topics_no1     = $_POST['topics_no1'];
    $topic_coverage_percentage1    = $_POST['topic_coverage_percentage1'];
    $backlog_plan1         = $_POST['backlog_plan1'];
    $activities_taken1         = $_POST['activities_taken1'];
    $tcrt_topics_no1         = $_POST['tcrt_topics_no1'];
    $tcrt_topic_coverage_percentage1	         = $_POST['tcrt_topic_coverage_percentage1	'];
    $tcrt_attendance_percentage1         = $_POST['tcrt_attendance_percentage1'];
    $tcrt_test_outcome1         = $_POST['tcrt_test_outcome1'];


    $subject_no2        = $_POST['subject_no2'];
    $semester2  = $_POST['semester2'];
    $department2         = $_POST['department2'];
    $topics_no2     = $_POST['topics_no2'];
    $topic_coverage_percentage2    = $_POST['topic_coverage_percentage2'];
    $backlog_plan2         = $_POST['backlog_plan2'];
    $activities_taken2         = $_POST['activities_taken2'];
    $tcrt_topics_no2         = $_POST['tcrt_topics_no2'];
    $tcrt_topic_coverage_percentage2	         = $_POST['tcrt_topic_coverage_percentage2	'];
    $tcrt_attendance_percentage2         = $_POST['tcrt_attendance_percentage2'];
    $tcrt_test_outcome2         = $_POST['tcrt_test_outcome2'];


    $subject_no3        = $_POST['subject_no3'];
    $semester3  = $_POST['semester3'];
    $department3         = $_POST['department3'];
    $topics_no3     = $_POST['topics_no3'];
    $topic_coverage_percentage3    = $_POST['topic_coverage_percentage3'];
    $backlog_plan3         = $_POST['backlog_plan3'];
    $activities_taken3         = $_POST['activities_taken3'];
    $tcrt_topics_no3         = $_POST['tcrt_topics_no3'];
    $tcrt_topic_coverage_percentage3	         = $_POST['tcrt_topic_coverage_percentage3	'];
    $tcrt_attendance_percentage3         = $_POST['tcrt_attendance_percentage3'];
    $tcrt_test_outcome3         = $_POST['tcrt_test_outcome3'];
    

    
        //insert all the data into database table
        $query    = "INSERT into `mr` (subject_no1,semester1,department1,topics_no1,topic_coverage_percentage1,backlog_plan1,activities_taken1,tcrt_topics_no1,tcrt_topic_coverage_percentage1,tcrt_attendance_percentage1,tcrt_test_outcome1,subject_no2,semester2,department2,topics_no2,topic_coverage_percentage2,backlog_plan2,activities_taken2,tcrt_topics_no2,tcrt_topic_coverage_percentage2,tcrt_attendance_percentage2,tcrt_test_outcome2,subject_no3,semester3,department3,topics_no3,topic_coverage_percentage3,backlog_plan3,activities_taken3,tcrt_topics_no3,tcrt_topic_coverage_percentage3,tcrt_attendance_percentage3,tcrt_test_outcome3) 
        VALUES ('$subject_no1',' $semester1', '$department1 ', '$topics_no1','$topic_coverage_percentage1','$backlog_plan1','$activities_taken1','$tcrt_topics_no1','$tcrt_topic_coverage_percentage1','$tcrt_attendance_percentage1','$tcrt_test_outcome1','$subject_no2',' $semester2', '$department2 ', '$topics_no2','$topic_coverage_percentage2','$backlog_plan2','$activities_taken2','$tcrt_topics_no2','$tcrt_topic_coverage_percentage2','$tcrt_attendance_percentage2','$tcrt_test_outcome2', '$subject_no3',' $semester3', '$department3 ', '$topics_no3','$topic_coverage_percentage3','$backlog_plan3','$activities_taken3','$tcrt_topics_no3','$tcrt_topic_coverage_percentage3','$tcrt_attendance_percentage3','$tcrt_test_outcome3')";
        
        // --  '".$date."')";

        mysqli_query($con, $query);

        //message to be displayed when the user registers successfully!
        $_SESSION['status']="Data saved";
        
    // }

?>