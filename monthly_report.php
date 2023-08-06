<!-- HTML code to display data in tabular format -->
<!DOCTYPE html>
    <html lang="en">
    <head>
        <meta charset="UTF-8">

        <meta http-equiv="X-UA-Compatible" content="IE=edge">

        <meta name="viewport"
            content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">

        <meta name="viewport" content="width=device-width, initial-scale=1.0">

        <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/@fortawesome/fontawesome-free@5.15.4/css/fontawesome.min.css" integrity="sha384-jLKHWM3JRmfMU0A5x5AkjWkw/EYfGUAGagvnfryNV3F9VqM98XiIH7VBGVoxVSc7" crossorigin="anonymous">

        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-KyZXEAg3QhqLMpG8r+8fhAXLRk2vvoC2f3B09zVXn8CA5QIVfZOJ3BCsw2P0p/We" crossorigin="anonymous">

        <link
        rel="stylesheet"
        href="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/css/bootstrap.min.css"
        integrity="sha384-TX8t27EcRE3e/ihU7zmQxVncDAy5uIKz4rEkgIXeMed4M0jlfIDPvg6uqKI2xXr2"
        crossorigin="anonymous"
        />

        <script
        src="https://code.jquery.com/jquery-3.5.1.slim.min.js"
        integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj"
        crossorigin="anonymous"
        ></script>

        <script
        src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js"
        integrity="sha384-9/reFTGAW83EW2RDu2S0VKaIzap3H66lZH81PoYlFhbGU+6BZp6G7niu735Sk7lN"
        crossorigin="anonymous"
        ></script>

        <script
        src="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/js/bootstrap.min.js"
        integrity="sha384-w1Q4orYjBQndcko6MimVbzY0tgp4pWB4lZ7lr30WKz0vr/aWKhXdBNmNb5D92v7s"
        crossorigin="anonymous"
        ></script>

        <link href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" rel="stylesheet"></link>

        <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>

        <script src="https://cdnjs.cloudflare.com/ajax/libs/1000hz-bootstrap-validator/0.11.9/validator.min.js"></script>

        <script   src="https://code.jquery.com/jquery-1.12.1.js"   integrity="sha256-VuhDpmsr9xiKwvTIHfYWCIQ84US9WqZsLfR4P7qF6O8="   crossorigin="anonymous"></script>

        <div class="input-group mb-3">

        <link rel="stylesheet" href="css/bootstrap.min.css">

        <title>Monthly Report</title>

        <link rel="stylesheet" href="monthly_report2.css">
        <style>
            body {
              margin: 0;
              font-family: sans-serif;
            }

            .tabs {
              width: 100%;
            }

            .tab-nav {
              display: flex;
              background: #f0f0f0;
            }

            .nav-item {
              display: block;
              padding: 16px;
              cursor: pointer;
            }
            .nav-item.selected {
              font-weight: bold;
              background: #fff;
            }

            .tab {
              display: none;
              padding: 16px;
            }
            .tab.selected {
              display: block;
            }

            .tab-pag {
              padding: 0 16px;
              display: flex;
              justify-content: flex-end;
            }

            .pag-item {
              display: block;
              padding: 12px;
              cursor: pointer;
              border: 1px solid #ccc;
              border-radius: 4px;
              margin-right: 8px;
            }
            .pag-item:last-child {
              margin-right: 0;
            }
            .pag-item.hidden {
              display: none;
            }

            .pag-item-submit {
              flex: 0 1 180px;
              font-size: 1rem;
              color: #fff;
              border-color: #696969;
              background: #696969;
            }
            a{
              text-decoration: none;
              color: #696969
            }
            a :hover{
              background:linear-gradient(45deg, #dee607, #ea5616f3) ;
              color:black;
              cursor: pointer;
              border: 3px solid yellow;
            }
        </style>
        
    </head>
    
    <body>
    
        <div class="container">
        
            <h1 style="color: white; font-size: 100px; text-align: center; ">MONTHLY REPORT</h1>

            <div class="right">

                <div class="form">

                    <!-- Registration form -->
                    <form role="form" id="signup" class="was-validated" action="monthly_reportdb.php" method="post" data-toggle="validator">

                        <div class="tabs" id="tabbedForm">
                            <nav class="tab-nav"></nav>
                            <div class="tab" data-name="Set 1">
                              <table style="margin-left:auto;margin-right:auto; border: none; ">

                                <tr>

                                    <td>

                                        <div class="form-group">

                                            <label for="name"> <b>Name:</b><br></label>

                                                <input type="text" class="login-input form-control" id="name" name="name" placeholder="Enter Name" data-error="You must have a name." required> 

                                                <!-- validation message -->
                                                <div class="invalid-feedback">
                                                    Enter your name please!
                                                </div>

                                                <div class="help-block with-errors"></div>
                                        
                                        </div>

                                    </td>

                                
                                    
                                    <td>

                                        <!-- Department -->
                                        <div class="form-group">
                                                <label for="department"><b>Department:</b></label>
                                                <select name="department" id="department" class="form-select" required>
                                                    <option selected value="" style="display: none;">Select</option>
                                                    <option value="ce">COMPUTER ENGINEERING</option>
                                                    <option value="etc">ELECTRONICS AND TELECOMMUNICATION ENGINEERING</option>
                                                    <option value="mech">MECHANICAL ENGINEERING</option>
                                                    <option value="allied">ALLIED SCIENCE</option>
                                                </select>

                                    </td>

                                </tr>

                                <tr>

                                    <td>

                                        <div class="form-group">
                                            <label for="subject"><b>Subject:</b><br></label>
                                            <input type="text" class="login-input form-control" id="subject" name="subject" placeholder="Enter subject" required> 

                                            <!-- validation message -->
                                            <div class="invalid-feedback">
                                                Subject can't be empty
                                            </div>

                                        </div>

                                    </td>

                                

                                    <td>

                                        <div class="form-group">
                                            <label for="semester"><b>Semester:</b></label>
                                            <select name="semester" id="semester" class="form-select" required>
                                                <option selected value="" style="display: none;">Select</option>
                                                <option value="1">First</option>
                                                <option value="2">Second</option>
                                                <option value="3">Third</option>
                                                <option value="4">Fourth</option>
                                                <option value="5">Fifth</option>
                                                <option value="6">Sixth</option>
                                                <option value="7">Seventh</option>
                                                <option value="8">Eighth</option>
                                            </select>

                                            <!-- validation message -->
                                            <div class="invalid-feedback">
                                                Please select Semester.
                                            </div>
                                        </div>

                                    </td>

                                </tr>
                                <tr>
                                
                                        <td>

                                            <!-- Submission of Report -->
                                            <div class="form-group">
                                                <label for="date"><b>Date:</b><br></label>
                                                <input type="date" class="login-input form-control" id="date" name="date" placeholder="Select Your Date of Submission of your Report" required>

                                                <!-- validation message -->
                                                <div class="invalid-feedback">
                                                    Select your Date Of Submission.  
                                                </div>
                                            </div>

                                        </td>
                                 
                                </tr>

                            </table>
                            </div>
                            <div class="tab" data-name="Set 2">
                              <h3 style="color: orange; font-size: 50px; text-align: center; padding:30px;">Teaching and Learning Process</h3>
                              <br>
                              <br>
                              <table style="margin-left:auto;margin-right:auto; border: none; ">
                                  <tr>
                                      <td>
                                          <h3 style="text-align: center ; display:inline-block;">Subject</h3>
                                          <select name="subject_no1" id="subject_no1" style="align-items:center; display: inline-block" required>
                                                              <option selected value="" style="display: none;">Select</option>
                                                              <option value="1">1</option>
                                                              <option value="2">2</option>
                                                              <option value="3">3</option>
                                                          </select>
                                      </td>
                                  </tr>
                                  <br>
                                  </table>
                                  <br>
                                  <table style="border:1px solid black;margin-left:auto;margin-right:auto;">
                                  <!-- <h3 style="text-align: center;">Subject 1</h3><br> -->
                                      <tr style="justify-items: center; align-items:center; text-align: center;">
                                          <!-- <td></td> -->
                                          <td>

                                              <div class="form-group">
                                                  <label for="semester1"><b>Semester:</b></label>
                                                  <select name="semester1" id="semester1" class="form-select" required>
                                                      <option selected value="" style="display: none;">Select</option>
                                                      <option value="1">First</option>
                                                      <option value="2">Second</option>
                                                      <option value="3">Third</option>
                                                      <option value="4">Fourth</option>
                                                      <option value="5">Fifth</option>
                                                      <option value="6">Sixth</option>
                                                      <option value="7">Seventh</option>
                                                      <option value="8">Eighth</option>
                                                  </select>

                                                  <!-- validation message -->
                                                  <div class="invalid-feedback">
                                                      Please select Semester.
                                                  </div>
                                              </div>

                                          </td>

                                          <td>

                                              <!-- Department -->
                                              <div class="form-group">
                                                      <label for="department1"><b>Department:</b></label>
                                                      <select name="department1" id="department1" class="form-select" required>
                                                          <option selected value="" style="display: none;">Select</option>
                                                          <option value="ce">COMPUTER ENGINEERING</option>
                                                          <option value="etc">ELECTRONICS AND TELECOMMUNICATION ENGINEERING</option>
                                                          <option value="mech">MECHANICAL ENGINEERING</option>
                                                          <option value="allied">ALLIED SCIENCE</option>
                                                      </select>

                                          </td>
                                          <!-- <td></td> -->

                                      </tr>
                                  </table>
                                  <br>
                                  <br>
                                  <br>
                                  
                                  <table style="border:1px solid black;margin-left:auto;margin-right:auto;">

                                      <tr>

                                          <td>

                                              <div class="form-group">
                                                  <label for="topics_no1"><b>NUMBER OF TOPICS TARGETED THIS MONTH:</b><br></label>
                                                  <input type="text" class="login-input form-control" id="topics_no1" name="topics_no1" placeholder="Enter subject" required> 

                                                  <!-- validation message -->
                                                  <div class="invalid-feedback">
                                                      Please fill data!
                                                  </div>

                                              </div>

                                          </td>

                                          <td>

                                              <div class="form-group">
                                                  <label for="topic_coverage_percentage1"><b>COVERAGE IN
                                                  PERCENTAGE
                                                  OF TOPICS:</b><br></label>
                                                  <input type="text" class="login-input form-control" id="topic_coverage_percentage1" name="topic_coverage_percentage1" placeholder="Enter subject" required> 

                                                      <!-- validation message -->
                                                  <div class="invalid-feedback">
                                                  Please fill data!
                                                  </div>

                                              </div>
                                                  

                                          </td>
                                          <td>
                                              <div class="form-group">
                                                  <label for="backlog_plan1"><b>PLAN FOR BACKLOG IF ANY:</b><br></label>
                                                  <input type="text" class="login-input form-control" id="backlog_plan1" name="backlog_plan1" placeholder="Enter subject" required> 

                                                  <!-- validation message -->
                                                  <div class="invalid-feedback">
                                                  Please fill data!
                                                  </div>

                                              </div>
                                          </td>

                                          <td>
                                              <div class="form-group">
                                                  <label for="activities_taken1"><b>ACTIVITIES TAKEN IN THE CLASS:</b><br></label>
                                                  <input type="text" class="login-input form-control" id="activities_taken1" name="activities_taken1" placeholder="Enter subject" required> 

                                                  <!-- validation message -->
                                                  <div class="invalid-feedback">
                                                  Please fill data!
                                                  </div>

                                              </div>
                                          </td>
                                      </tr>

                                      <tr>

                                          <td>

                                              <div class="form-group">
                                                  <label for="tcrt_topics_no1"><b>NUMBER OF TOPICS TARGETED THIS MONTH FOR TCRT:</b><br></label>
                                                  <input type="text" class="login-input form-control" id="tcrt_topics_no1" name="tcrt_topics_no1" placeholder="Enter subject" required> 

                                                  <!-- validation message -->
                                                  <div class="invalid-feedback">
                                                  Please fill data!
                                                  </div>

                                              </div>

                                          </td>

                                          <td>

                                              <div class="form-group">
                                                  <label for="tcrt_topic_coverage_percentage1"><b>COVERAGE IN PERCENTAGE OF TOPICS:</b><br></label>
                                                  <input type="text" class="login-input form-control" id="tcrt_topic_coverage_percentage1" name="tcrt_topic_coverage_percentage1" placeholder="Enter subject" required> 

                                                      <!-- validation message -->
                                                  <div class="invalid-feedback">
                                                  Please fill data!
                                                  </div>

                                              </div>
                                                  

                                          </td>
                                          <td>
                                              <div class="form-group">
                                                  <label for="tcrt_attendance_percentage1"><b>PERCENTAGE ATTENDANCE:</b><br></label>
                                                  <input type="text" class="login-input form-control" id="tcrt_attendance_percentage1" name="tcrt_attendance_percentage1" placeholder="Enter subject" required> 

                                                  <!-- validation message -->
                                                  <div class="invalid-feedback">
                                                  Please fill data!
                                                  </div>

                                              </div>
                                          </td>

                                          <td>
                                              <div class="form-group">
                                                  <label for="tcrt_test_outcome1"><b>OUTCOME OF TEST/QUIZ CONDUCTED:</b><br></label>
                                                  <input type="text" class="login-input form-control" id="tcrt_test_outcome1" name="tcrt_test_outcome1" placeholder="Enter subject" required> 

                                                  <!-- validation message -->
                                                  <div class="invalid-feedback">
                                                  Please fill data!
                                                  </div>

                                              </div>
                                          </td>
                                      </tr>
                                      

                                  </table>
                                  <br>
                                  <hr>
                                  <br>
                                  <table style="margin-left:auto;margin-right:auto; border: none; ">
                                <tr>
                                    <td>
                                        <h3 style="text-align: center ; display:inline-block;">Subject</h3>
                                        <select name="subject_no2" id="subject_no2" style="align-items:center; display: inline-block" >
                                                            <option selected value="" style="display: none;">Select</option>
                                                            <option value="1">1</option>
                                                            <option value="2">2</option>
                                                            <option value="3">3</option>
                                                        </select>
                                    </td>
                                </tr>
                                <br>
                                </table>
                                <br>
                                <table style="border:1px solid black;margin-left:auto;margin-right:auto;">
                                <!-- <h3 style="text-align: center;">Subject 2</h3><br> -->
                                    <tr style="justify-items: center; align-items:center; text-align: center;">
                                        <!-- <td></td> -->
                                        <td>

                                            <div class="form-group">
                                                <label for="semester2"><b>Semester:</b></label>
                                                <select name="semester2" id="semester2" class="" >
                                                    <option selected value="" style="display: none;">Select</option>
                                                    <option value="1">First</option>
                                                    <option value="2">Second</option>
                                                    <option value="3">Third</option>
                                                    <option value="4">Fourth</option>
                                                    <option value="5">Fifth</option>
                                                    <option value="6">Sixth</option>
                                                    <option value="7">Seventh</option>
                                                    <option value="8">Eighth</option>
                                                </select>

                                                <!-- validation message -->
                                                <div class="invalid-feedback">
                                                    Please select Semester.
                                                </div>
                                            </div>

                                        </td>

                                        <td>

                                            <!-- Department -->
                                            <div class="form-group">
                                                    <label for="department2"><b>Department:</b></label>
                                                    <select name="department2" id="department2" class="" >
                                                        <option selected value="" style="display: none;">Select</option>
                                                        <option value="ce">COMPUTER ENGINEERING</option>
                                                        <option value="etc">ELECTRONICS AND TELECOMMUNICATION ENGINEERING</option>
                                                        <option value="mech">MECHANICAL ENGINEERING</option>
                                                        <option value="allied">ALLIED SCIENCE</option>
                                                    </select>

                                        </td>
                                        <!-- <td></td> -->

                                    </tr>
                                </table>
                                <br>
                                <br>
                                <br>
                                
                                <table style="border:1px solid black;margin-left:auto;margin-right:auto;">

                                    <tr>

                                        <td>

                                            <div class="form-group">
                                                <label for="topics_no2"><b>NUMBER TOPICS TARGETED THIS MONTH:</b><br></label>
                                                <input type="text" class="login-input form-control" id="topics_no2" name="topics_no2" placeholder="Enter subject" > 

                                                <!-- validation message -->
                                                <div class="invalid-feedback">
                                                    Please fill data!
                                                </div>

                                            </div>

                                        </td>

                                        <td>

                                            <div class="form-group">
                                                <label for="topic_coverage_percentage2"><b>COVERAGE IN
                                                PERCENTAGE
                                                OF TOPICS:</b><br></label>
                                                <input type="text" class="login-input form-control" id="topic_coverage_percentage2" name="topic_coverage_percentage2" placeholder="Enter subject" > 

                                                    <!-- validation message -->
                                                <div class="invalid-feedback">
                                                Please fill data!
                                                </div>

                                            </div>
                                                

                                        </td>
                                        <td>
                                            <div class="form-group">
                                                <label for="backlog_plan2"><b>PLAN FOR BACKLOG IF ANY:</b><br></label>
                                                <input type="text" class="login-input form-control" id="backlog_plan2" name="backlog_plan2" placeholder="Enter subject" > 

                                                <!-- validation message -->
                                                <div class="invalid-feedback">
                                                Please fill data!
                                                </div>

                                            </div>
                                        </td>

                                        <td>
                                            <div class="form-group">
                                                <label for="activities_taken2"><b>ACTIVITIES TAKEN IN THE CLASS:</b><br></label>
                                                <input type="text" class="login-input form-control" id="activities_taken2" name="activities_taken2" placeholder="Enter subject" > 

                                                <!-- validation message -->
                                                <div class="invalid-feedback">
                                                Please fill data!
                                                </div>

                                            </div>
                                        </td>
                                    </tr>

                                    <tr>

                                        <td>

                                            <div class="form-group">
                                                <label for="tcrt_topics_no2"><b>NUMBER OF TOPICS TARGETED THIS MONTH FOR TCRT:</b><br></label>
                                                <input type="text" class="login-input form-control" id="tcrt_topics_no2" name="tcrt_topics_no2" placeholder="Enter subject" > 

                                                <!-- validation message -->
                                                <div class="invalid-feedback">
                                                Please fill data!
                                                </div>

                                            </div>

                                        </td>

                                        <td>

                                            <div class="form-group">
                                                <label for="tcrt_topic_coverage_percentage2"><b>COVERAGE IN PERCENTAGE OF TOPICS:</b><br></label>
                                                <input type="text" class="login-input form-control" id="tcrt_topic_coverage_percentage2" name="tcrt_topic_coverage_percentage2" placeholder="Enter subject" > 

                                                    <!-- validation message -->
                                                <div class="invalid-feedback">
                                                Please fill data!
                                                </div>

                                            </div>
                                                

                                        </td>
                                        <td>
                                            <div class="form-group">
                                                <label for="tcrt_attendance_percentage2"><b>PERCENTAGE ATTENDANCE:</b><br></label>
                                                <input type="text" class="login-input form-control" id="tcrt_attendance_percentage2" name="tcrt_attendance_percentage2" placeholder="Enter subject" > 

                                                <!-- validation message -->
                                                <div class="invalid-feedback">
                                                Please fill data!
                                                </div>

                                            </div>
                                        </td>

                                        <td>
                                            <div class="form-group">
                                                <label for="tcrt_test_outcome2"><b>OUTCOME OF TEST/QUIZ CONDUCTED:</b><br></label>
                                                <input type="text" class="login-input form-control" id="tcrt_test_outcome2" name="tcrt_test_outcome2" placeholder="Enter subject" > 

                                                <!-- validation message -->
                                                <div class="invalid-feedback">
                                                Please fill data!
                                                </div>

                                            </div>
                                        </td>
                                    </tr>
                                    

                                </table>
                                <br>
                                <hr>
                                <br>

                                <table style="margin-left:auto;margin-right:auto; border: none; ">
                                <tr>
                                    <td>
                                        <h3 style="text-align: center ; display:inline-block;">Subject</h3>
                                        <select name="subject_no3" id="subject_no3" style="align-items:center; display: inline-block" >
                                                            <option selected value="" style="display: none;">Select</option>
                                                            <option value="1">1</option>
                                                            <option value="2">2</option>
                                                            <option value="3">3</option>
                                                        </select>
                                    </td>
                                </tr>
                                <br>
                                </table>
                                <br>
                                <table style="border:1px solid black;margin-left:auto;margin-right:auto;">
                                
                                    <tr style="justify-items: center; align-items:center; text-align: center;">
                                        <!-- <td></td> -->
                                        <td>

                                            <div class="form-group">
                                                <label for="semester3"><b>Semester:</b></label>
                                                <select name="semester3" id="semester3" class="" >
                                                    <option selected value="" style="display: none;">Select</option>
                                                    <option value="1">First</option>
                                                    <option value="2">Second</option>
                                                    <option value="3">Third</option>
                                                    <option value="4">Fourth</option>
                                                    <option value="5">Fifth</option>
                                                    <option value="6">Sixth</option>
                                                    <option value="7">Seventh</option>
                                                    <option value="8">Eighth</option>
                                                </select>

                                                <!-- validation message -->
                                                <div class="invalid-feedback">
                                                    Please select Semester.
                                                </div>
                                            </div>

                                        </td>

                                        <td>

                                            <!-- Department -->
                                            <div class="form-group">
                                                    <label for="department3"><b>Department:</b></label>
                                                    <select name="department3" id="department3" class="" >
                                                        <option selected value="" style="display: none;">Select</option>
                                                        <option value="ce">COMPUTER ENGINEERING</option>
                                                        <option value="etc">ELECTRONICS AND TELECOMMUNICATION ENGINEERING</option>
                                                        <option value="mech">MECHANICAL ENGINEERING</option>
                                                        <option value="allied">ALLIED SCIENCE</option>
                                                    </select>

                                        </td>
                                        <!-- <td></td> -->

                                    </tr>
                                </table>
                                <br>
                                <br>
                                <br>
                                
                                <table style="border:1px solid black;margin-left:auto;margin-right:auto;">

                                    <tr>

                                        <td>

                                            <div class="form-group">
                                                <label for="topics_no3"><b>NUMBER TOPICS TARGETED THIS MONTH:</b><br></label>
                                                <input type="text" class="login-input form-control" id="topics_no3" name="topics_no3" placeholder="Enter subject" > 

                                                <!-- validation message -->
                                                <div class="invalid-feedback">
                                                    Please fill data!
                                                </div>

                                            </div>

                                        </td>

                                        <td>

                                            <div class="form-group">
                                                <label for="topic_coverage_percentage3"><b>COVERAGE IN
                                                PERCENTAGE
                                                OF TOPICS:</b><br></label>
                                                <input type="text" class="login-input form-control" id="topic_coverage_percentage3" name="topic_coverage_percentage3" placeholder="Enter subject" > 

                                                    <!-- validation message -->
                                                <div class="invalid-feedback">
                                                Please fill data!
                                                </div>

                                            </div>
                                                

                                        </td>
                                        <td>
                                            <div class="form-group">
                                                <label for="backlog_plan3"><b>PLAN FOR BACKLOG IF ANY:</b><br></label>
                                                <input type="text" class="login-input form-control" id="backlog_plan3" name="backlog_plan3" placeholder="Enter subject" > 

                                                <!-- validation message -->
                                                <div class="invalid-feedback">
                                                Please fill data!
                                                </div>

                                            </div>
                                        </td>

                                        <td>
                                            <div class="form-group">
                                                <label for="activities_taken3"><b>ACTIVITIES TAKEN IN THE CLASS:</b><br></label>
                                                <input type="text" class="login-input form-control" id="activities_taken3" name="activities_taken3" placeholder="Enter subject" > 

                                                <!-- validation message -->
                                                <div class="invalid-feedback">
                                                Please fill data!
                                                </div>

                                            </div>
                                        </td>
                                    </tr>

                                    <tr>

                                        <td>

                                            <div class="form-group">
                                                <label for="tcrt_topics_no3"><b>NUMBER OF TOPICS TARGETED THIS MONTH FOR TCRT:</b><br></label>
                                                <input type="text" class="login-input form-control" id="tcrt_topics_no3" name="tcrt_topics_no3" placeholder="Enter subject" > 

                                                <!-- validation message -->
                                                <div class="invalid-feedback">
                                                Please fill data!
                                                </div>

                                            </div>

                                        </td>

                                        <td>

                                            <div class="form-group">
                                                <label for="tcrt_topic_coverage_percentage3"><b>COVERAGE IN PERCENTAGE OF TOPICS:</b><br></label>
                                                <input type="text" class="login-input form-control" id="tcrt_topic_coverage_percentage3" name="tcrt_topic_coverage_percentage3" placeholder="Enter subject" > 

                                                    <!-- validation message -->
                                                <div class="invalid-feedback">
                                                Please fill data!
                                                </div>

                                            </div>
                                                

                                        </td>
                                        <td>
                                            <div class="form-group">
                                                <label for="tcrt_attendance_percentage3"><b>PERCENTAGE ATTENDANCE:</b><br></label>
                                                <input type="text" class="login-input form-control" id="tcrt_attendance_percentage3" name="tcrt_attendance_percentage3" placeholder="Enter subject" > 

                                                <!-- validation message -->
                                                <div class="invalid-feedback">
                                                Please fill data!
                                                </div>

                                            </div>
                                        </td>

                                        <td>
                                            <div class="form-group">
                                                <label for="tcrt_test_outcome3"><b>OUTCOME OF TEST/QUIZ CONDUCTED:</b><br></label>
                                                <input type="text" class="login-input form-control" id="tcrt_test_outcome3" name="tcrt_test_outcome3" placeholder="Enter subject" > 

                                                <!-- validation message -->
                                                <div class="invalid-feedback">
                                                Please fill data!
                                                </div>

                                            </div>
                                        </td>
                                    </tr>
                                    

                                </table>
                            </div>
                            <div class="tab" data-name="Set 3">
                              <h3 style="color: orange; font-size: 50px; text-align: center; padding:30px;">Industry Interaction</h3>
                              <br><br>
                              <table style="border:1px solid black;margin-left:auto;margin-right:auto;">

                                <tr>

                                    <td>

                                        <div class="form-group">
                                            <label for="industry_interaction"><b>INDUSTRY INTERACTION INCLUDING VISITS</b><br></label>
                                            <input type="text" class="login-input form-control" id="industry_interaction" name="industry_interaction" placeholder="Enter subject" required> 

                                            <!-- validation message -->
                                            <div class="invalid-feedback">
                                                Please fill data!
                                            </div>

                                        </div>

                                    </td>

                                </tr>
                                <tr>
                                    <td>
                                        <div class="form-group">
                                            <label for="project_status"><b>INDUSTRY PROJECT COMPLETION STATUS</b><br></label>
                                            <input type="text" class="login-input form-control" id="project_status" name="project_status" placeholder="Enter subject" required> 

                                            <!-- validation message -->
                                            <div class="invalid-feedback">
                                            Please fill data!
                                            </div>

                                        </div>
                                    </td>
                                </tr>
                                <tr>

                                    <td>
                                        <div class="form-group">
                                            <label for="guest_lectures"><b>GUEST LECTURES ARRANGED BY YOU FOR YOUR SUBJECT / INDUSTRY LECTURES ARRANGED</b><br></label>
                                            <input type="text" class="login-input form-control" id="guest_lectures" name="guest_lectures" placeholder="Enter subject" required> 

                                            <!-- validation message -->
                                            <div class="invalid-feedback">
                                            Please fill data!
                                            </div>

                                        </div>
                                    </td>
                                </tr>

                                
                            </table>
                            </div>
                            <div class="tab" data-name="Set 4">
                              <h3 style="color: orange; font-size: 50px; text-align: center; padding:30px;"> Extra Curricular</h3>
                              <table style="border:1px solid black;margin-left:auto;margin-right:auto;">

                                <tr>

                                    <td>

                                        <div class="form-group">
                                            <label for="tasks_conducted"><b>EXTRA TASK CONDUCTED BY YOU FOR THE DEVELOPEMENT OF THE COLLEGE</b><br></label>
                                            <input type="text" class="login-input form-control" id="tasks_conducted" name="tasks_conducted" placeholder="Enter subject" required> 

                                            <!-- validation message -->
                                            <div class="invalid-feedback">
                                                Please fill data!
                                            </div>
                                            <input type="file" name="choosefile" value="" />

<div>

    <button type="submit" name="uploadfile">

    UPLOAD

    </button>

</div>

                                        </div>

                                    </td>

                                </tr>
                                <tr>
                                    <td>
                                        <div class="form-group">
                                            <label for="moocs_done"><b>Bhaubij Contribution</b><br></label>
                                            <input type="text" class="login-input form-control" id="moocs_done" name="moocs_done" placeholder="Enter subject" required> 

                                            <!-- validation message -->
                                            <div class="invalid-feedback">
                                            Please fill data!
                                            </div>
                                            <input type="file" name="choosefile" value="" />

                                        </div>
                                    </td>
                                </tr>
                                <tr>
                                    <td>
                                        <div class="form-group">
                                            <label for="moocs_done"><b>MOOCS DONE BY YOU</b><br></label>
                                            <input type="text" class="login-input form-control" id="moocs_done" name="moocs_done" placeholder="Enter subject" required> 

                                            <!-- validation message -->
                                            <div class="invalid-feedback">
                                            Please fill data!
                                            </div>
                                            <input type="file" name="choosefile" value="" />

                                        </div>
                                    </td>
                                </tr>
                                <tr>

                                    <td>
                                        <div class="form-group">
                                            <label for="your_skill_development"><b>SKILL DEVELOPEMENT DONE BY YOU FOR YOURSELF</b><br></label>
                                            <input type="text" class="login-input form-control" id="your_skill_development" name="your_skill_development" placeholder="Enter subject" required> 

                                            <!-- validation message -->
                                            <div class="invalid-feedback">
                                            Please fill data!
                                            </div>

                                        </div>
                                    </td>
                                </tr>
                                <tr>

                                    <td>
                                        <div class="form-group">
                                            <label for="efforts_taken"><b>EFFORTS TAKEN BY YOU ON YOUR OWN FOR COLLEGE DEVELOPEMENT</b><br></label>
                                            <input type="text" class="login-input form-control" id="efforts_taken" name="efforts_taken" placeholder="Enter subject" required> 

                                            <!-- validation message -->
                                            <div class="invalid-feedback">
                                            Please fill data!
                                            </div>

                                        </div>
                                    </td>
                                </tr>

                                
                            </table>
                            </div>
                            <div class="tab" data-name="Set 5">
                              <h3 style="color: orange; font-size: 50px; text-align: center; padding:30px;"> Admission Campaign Details</h3>
                              <table style="border:1px solid black;margin-left:auto;margin-right:auto;">

                                <tr>

                                    <td>

                                        <div class="form-group">
                                            <label for="tutions_visited"><b>NAMES OF JR COLLEGE/TUTION CLASSES VISITED</b><br></label>
                                            <input type="text" class="login-input form-control" id="tutions_visited" name="tutions_visited" placeholder="Enter subject" required> 

                                            <!-- validation message -->
                                            <div class="invalid-feedback">
                                                Please fill data!
                                            </div>

                                        </div>

                                    </td>

                                </tr>
                                <tr>
                                    <td>
                                        <div class="form-group">
                                            <label for="contact_details"><b>DETAILS OF CONTACT</b><br></label>
                                            <input type="text" class="login-input form-control" id="contact_details" name="contact_details" placeholder="Enter subject" required> 

                                            <!-- validation message -->
                                            <div class="invalid-feedback">
                                            Please fill data!
                                            </div>

                                        </div>
                                    </td>
                                </tr>
                                <tr>

                                    <td>
                                        <div class="form-group">
                                            <label for="data_collection"><b>DATA COLLECTION DETAILS</b><br></label>
                                            <input type="text" class="login-input form-control" id="data_collection" name="data_collection" placeholder="Enter subject" required> 

                                            <!-- validation message -->
                                            <div class="invalid-feedback">
                                            Please fill data!
                                            </div>

                                        </div>
                                    </td>
                                </tr>


                                </table>
                                
                                <br>
                                <br><br>
                                <table style="border:1px solid black;margin-left:auto;margin-right:auto;" id="students">

                                <tr>

                                    <td>

                                        <div class="form-group">
                                            <label for="students_name"><b>NAMES OF STUDENTS COUNSELLED BY YOU</b><br></label>
                                            <input type="text" class="login-input form-control" id="students_name" name="students_name" placeholder="Enter subject" required> 
                                            <input type="button" class="button add_another" value="Add another Value"/>

                                            <!-- validation message -->
                                            <div class="invalid-feedback">
                                                Please fill data!
                                            </div>

                                        </div>

                                    </td>

                                </tr>
                                
                                </table>
                            </div>
                            <nav class="tab-pag"></nav>
                        </div>
                    </form>

                </div>

            </div>

        </div>


        <script src="js/bootstrap.min.js"></script>

        <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>

        <script>
                
            (function () {
                'use strict'

                // Fetch all the forms we want to apply custom Bootstrap validation styles to
                var forms = document.querySelectorAll('.needs-validation')

                // Loop over them and prevent submission
                Array.prototype.slice.call(forms)
                    .forEach(function (form) {
                    form.addEventListener('submit', function (event) {
                        if (!form.checkValidity()) {
                            event.preventDefault()
                            event.stopPropagation()
                        }

                        form.classList.add('was-validated')
                        }, false)
                    })
            })()

            //for date
            $(document).ready(function(){

                $('#date').datepicker({

                    format: "dd-mm-yyyy",
                    startDate: new Date('1-1-1980'),
                    endDate:  new Date('1-1-3000')

                });   

            });

            var tabs = function(id) {
            this.el = document.getElementById(id);
            
            this.tab = {
              el: '.tab',
              list: null
            }
            
            this.nav = {
              el: '.tab-nav',
              list: null
            }
            
            this.pag = {
              el: '.tab-pag',
              list: null
            }
            
            this.count = null;
            this.selected = 0;
            
            this.init = function() {
              // Create tabs
              this.tab.list = this.createTabList();
              this.count = this.tab.list.length;
              
              // Create nav
              this.nav.list = this.createNavList();
              this.renderNavList();
              
              // Create pag
              this.pag.list = this.createPagList();
              this.renderPagList();
              
              // Set selected
              this.setSelected(this.selected);
            }
            
            this.createTabList = function() {
              var list = [];
              
              this.el.querySelectorAll(this.tab.el).forEach(function(el, i) {
                list[i] = el;
              });
              
              return list;
            }
            
            this.createNavList = function() {
              var list = [];
              
              this.tab.list.forEach(function(el, i) {
                var listitem = document.createElement('a');
                    listitem.className = 'nav-item',
                    listitem.innerHTML = el.getAttribute('data-name'),
                    listitem.onclick = function() {
                      this.setSelected(i);
                      return false;
                    }.bind(this);
                
                list[i] = listitem;
              }.bind(this));
              
              return list;
            }
            
            this.createPagList = function() {
              var list = [];
              
              list.prev = document.createElement('a');
              list.prev.className = 'pag-item pag-item-prev',
                list.prev.innerHTML = 'Prev',
                list.prev.onclick = function() {
                this.setSelected(this.selected - 1);
                return false;
              }.bind(this);

              list.next = document.createElement('a');
              list.next.className = 'pag-item pag-item-next',
                list.next.innerHTML = 'Next',
                list.next.onclick = function() {
                this.setSelected(this.selected + 1);
                return false;
              }.bind(this);
              
              list.submit = document.createElement('button');
              list.submit.className = 'pag-item pag-item-submit',
              list.submit.innerHTML = 'Submit';
              
              return list;
            }
            
            this.renderNavList = function() {
              var nav = document.querySelector(this.nav.el);
              
              this.nav.list.forEach(function(el) {
                nav.appendChild(el);
              });
            }
            
            this.renderPagList = function() {
              var pag = document.querySelector(this.pag.el);
              
              pag.appendChild(this.pag.list.prev);
              pag.appendChild(this.pag.list.next);
              pag.appendChild(this.pag.list.submit);
            }
            
            this.setSelected = function(target) {
              var min = 0,
                  max = this.count - 1;
              
              if(target > max || target < min) {
                return;
              }
              
              if(target == min) {
                this.pag.list.prev.classList.add('hidden');
              } else {
                this.pag.list.prev.classList.remove('hidden');
              }
              
              if(target == max) {
                this.pag.list.next.classList.add('hidden');
                this.pag.list.submit.classList.remove('hidden');
              } else {
                this.pag.list.next.classList.remove('hidden');
                this.pag.list.submit.classList.add('hidden');
              }
              
              this.tab.list[this.selected].classList.remove('selected');
              this.nav.list[this.selected].classList.remove('selected');

              this.selected = target;
              this.tab.list[this.selected].classList.add('selected');
              this.nav.list[this.selected].classList.add('selected');
            }
          };

          var tabbedForm = new tabs('tabbedForm');
          tabbedForm.init();

          
          $('document').ready(function() {
          $('.add_another').click(function() {
              $("#students").append('<tr><td><input type="text" class="login-input form-control" id="students_name" name="students_name" placeholder="Enter subject" required> </td></tr>');
          });
          })

            
        </script>

    </body>
     
 </html>