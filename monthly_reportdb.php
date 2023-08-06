<?php
    session_start();

    require_once('db.php');
    header('location: faculty.php');

    mysqli_select_db($con, 'college_project');

    //set1
    $name        = $_POST['name'];
    $department  = $_POST['department'];
    $subject     = $_POST['subject'];
    $semester    = $_POST['semester'];
    $date         = $_POST['date'];
    
    //set2
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
    
    //set3
    $industry_interaction        = $_POST['industry_interaction'];
    $project_status  = $_POST['project_status'];
    $guest_lectures     = $_POST['guest_lectures'];

    //set4
    $tasks_conducted        = $_POST['tasks_conducted'];
    $moocs_done  = $_POST['moocs_done'];
    $your_skill_development     = $_POST['your_skill_development'];
    $efforts_taken     = $_POST['efforts_taken'];

    //set5
    $tutions_visited =$_POST['tutions_visited'];
    $contact_details =$_POST['contact_details'];
    $data_collection =$_POST['data_collection'];
    $students_name =$_POST['students_name'];


    
        //insert all the data into database table
        $query    = "INSERT into `mr` (name,department,subject,semester,date,subject_no1,semester1,department1,topics_no1,topic_coverage_percentage1,backlog_plan1,activities_taken1,tcrt_topics_no1,tcrt_topic_coverage_percentage1,tcrt_attendance_percentage1,tcrt_test_outcome1,subject_no2,semester2,department2,topics_no2,topic_coverage_percentage2,backlog_plan2,activities_taken2,tcrt_topics_no2,tcrt_topic_coverage_percentage2,tcrt_attendance_percentage2,tcrt_test_outcome2,subject_no3,semester3,department3,topics_no3,topic_coverage_percentage3,backlog_plan3,activities_taken3,tcrt_topics_no3,tcrt_topic_coverage_percentage3,tcrt_attendance_percentage3,tcrt_test_outcome3,industry_interaction,project_status,guest_lectures,tasks_conducted,moocs_done,your_skill_development,efforts_taken,tutions_visited,contact_details,data_collection,students_name) 
        VALUES ('$name','$department', '$subject', '$semester', '".$date."','$subject_no1',' $semester1', '$department1 ', '$topics_no1','$topic_coverage_percentage1','$backlog_plan1','$activities_taken1','$tcrt_topics_no1','$tcrt_topic_coverage_percentage1','$tcrt_attendance_percentage1','$tcrt_test_outcome1','$subject_no2',' $semester2', '$department2 ', '$topics_no2','$topic_coverage_percentage2','$backlog_plan2','$activities_taken2','$tcrt_topics_no2','$tcrt_topic_coverage_percentage2','$tcrt_attendance_percentage2','$tcrt_test_outcome2', '$subject_no3',' $semester3', '$department3 ', '$topics_no3','$topic_coverage_percentage3','$backlog_plan3','$activities_taken3','$tcrt_topics_no3','$tcrt_topic_coverage_percentage3','$tcrt_attendance_percentage3','$tcrt_test_outcome3','$industry_interaction','$project_status', '$guest_lectures','$tasks_conducted','$moocs_done', '$your_skill_development','$efforts_taken','$tutions_visited','$contact_details','$data_collection','$students_name')";
        
        // --  '".$date."')";

        mysqli_query($con, $query);

        //message to be displayed when the user registers successfully!
        $_SESSION['status']="Data saved";
        
    // }

?>