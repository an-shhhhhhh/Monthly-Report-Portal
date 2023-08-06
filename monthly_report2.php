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

        <div class="input-group mb-3">

        <link rel="stylesheet" href="css/bootstrap.min.css">

        <title>Monthly Report</title>

        <link rel="stylesheet" href="monthly_report2.css">
    </head>
    
    <body>
    
        <div class="container">
        
            <h1 style="color: white; font-size: 100px; text-align: center;margin-left:auto;margin-right:auto; ">MONTHLY REPORT</h1>
            <br>

            <div class="right">
                <h3 style="color: orange; font-size: 50px; text-align: center; padding:30px;">Teaching and Learning Process</h3>

                <div class="form">

                    <!-- Registration form -->
                    <form role="form" id="signup" class="was-validated" action="monthly_report2db.php" method="post" data-toggle="validator">

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
                                <select name="subject_no2" id="subject_no2" style="align-items:center; display: inline-block" required>
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
                                        <select name="semester2" id="semester2" class="form-select" required>
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
                                            <select name="department2" id="department2" class="form-select" required>
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
                                        <input type="text" class="login-input form-control" id="topics_no2" name="topics_no2" placeholder="Enter subject" required> 

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
                                        <input type="text" class="login-input form-control" id="topic_coverage_percentage2" name="topic_coverage_percentage2" placeholder="Enter subject" required> 

                                            <!-- validation message -->
                                        <div class="invalid-feedback">
                                        Please fill data!
                                        </div>

                                    </div>
                                        

                                </td>
                                <td>
                                    <div class="form-group">
                                        <label for="backlog_plan2"><b>PLAN FOR BACKLOG IF ANY:</b><br></label>
                                        <input type="text" class="login-input form-control" id="backlog_plan2" name="backlog_plan2" placeholder="Enter subject" required> 

                                        <!-- validation message -->
                                        <div class="invalid-feedback">
                                        Please fill data!
                                        </div>

                                    </div>
                                </td>

                                <td>
                                    <div class="form-group">
                                        <label for="activities_taken2"><b>ACTIVITIES TAKEN IN THE CLASS:</b><br></label>
                                        <input type="text" class="login-input form-control" id="activities_taken2" name="activities_taken2" placeholder="Enter subject" required> 

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
                                        <input type="text" class="login-input form-control" id="tcrt_topics_no2" name="tcrt_topics_no2" placeholder="Enter subject" required> 

                                        <!-- validation message -->
                                        <div class="invalid-feedback">
                                        Please fill data!
                                        </div>

                                    </div>

                                </td>

                                <td>

                                    <div class="form-group">
                                        <label for="tcrt_topic_coverage_percentage2"><b>COVERAGE IN PERCENTAGE OF TOPICS:</b><br></label>
                                        <input type="text" class="login-input form-control" id="tcrt_topic_coverage_percentage2" name="tcrt_topic_coverage_percentage2" placeholder="Enter subject" required> 

                                            <!-- validation message -->
                                        <div class="invalid-feedback">
                                        Please fill data!
                                        </div>

                                    </div>
                                        

                                </td>
                                <td>
                                    <div class="form-group">
                                        <label for="tcrt_attendance_percentage2"><b>PERCENTAGE ATTENDANCE:</b><br></label>
                                        <input type="text" class="login-input form-control" id="tcrt_attendance_percentage2" name="tcrt_attendance_percentage2" placeholder="Enter subject" required> 

                                        <!-- validation message -->
                                        <div class="invalid-feedback">
                                        Please fill data!
                                        </div>

                                    </div>
                                </td>

                                <td>
                                    <div class="form-group">
                                        <label for="tcrt_test_outcome2"><b>OUTCOME OF TEST/QUIZ CONDUCTED:</b><br></label>
                                        <input type="text" class="login-input form-control" id="tcrt_test_outcome2" name="tcrt_test_outcome2" placeholder="Enter subject" required> 

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
                                <select name="subject_no3" id="subject_no3" style="align-items:center; display: inline-block" required>
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
                                        <select name="semester3" id="semester3" class="form-select" required>
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
                                            <select name="department3" id="department3" class="form-select" required>
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
                                        <input type="text" class="login-input form-control" id="topics_no3" name="topics_no3" placeholder="Enter subject" required> 

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
                                        <input type="text" class="login-input form-control" id="topic_coverage_percentage3" name="topic_coverage_percentage3" placeholder="Enter subject" required> 

                                            <!-- validation message -->
                                        <div class="invalid-feedback">
                                        Please fill data!
                                        </div>

                                    </div>
                                        

                                </td>
                                <td>
                                    <div class="form-group">
                                        <label for="backlog_plan3"><b>PLAN FOR BACKLOG IF ANY:</b><br></label>
                                        <input type="text" class="login-input form-control" id="backlog_plan3" name="backlog_plan3" placeholder="Enter subject" required> 

                                        <!-- validation message -->
                                        <div class="invalid-feedback">
                                        Please fill data!
                                        </div>

                                    </div>
                                </td>

                                <td>
                                    <div class="form-group">
                                        <label for="activities_taken3"><b>ACTIVITIES TAKEN IN THE CLASS:</b><br></label>
                                        <input type="text" class="login-input form-control" id="activities_taken3" name="activities_taken3" placeholder="Enter subject" required> 

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
                                        <input type="text" class="login-input form-control" id="tcrt_topics_no3" name="tcrt_topics_no3" placeholder="Enter subject" required> 

                                        <!-- validation message -->
                                        <div class="invalid-feedback">
                                        Please fill data!
                                        </div>

                                    </div>

                                </td>

                                <td>

                                    <div class="form-group">
                                        <label for="tcrt_topic_coverage_percentage3"><b>COVERAGE IN PERCENTAGE OF TOPICS:</b><br></label>
                                        <input type="text" class="login-input form-control" id="tcrt_topic_coverage_percentage3" name="tcrt_topic_coverage_percentage3" placeholder="Enter subject" required> 

                                            <!-- validation message -->
                                        <div class="invalid-feedback">
                                        Please fill data!
                                        </div>

                                    </div>
                                        

                                </td>
                                <td>
                                    <div class="form-group">
                                        <label for="tcrt_attendance_percentage3"><b>PERCENTAGE ATTENDANCE:</b><br></label>
                                        <input type="text" class="login-input form-control" id="tcrt_attendance_percentage3" name="tcrt_attendance_percentage3" placeholder="Enter subject" required> 

                                        <!-- validation message -->
                                        <div class="invalid-feedback">
                                        Please fill data!
                                        </div>

                                    </div>
                                </td>

                                <td>
                                    <div class="form-group">
                                        <label for="tcrt_test_outcome3"><b>OUTCOME OF TEST/QUIZ CONDUCTED:</b><br></label>
                                        <input type="text" class="login-input form-control" id="tcrt_test_outcome3" name="tcrt_test_outcome3" placeholder="Enter subject" required> 

                                        <!-- validation message -->
                                        <div class="invalid-feedback">
                                        Please fill data!
                                        </div>

                                    </div>
                                </td>
                            </tr>
                            

                        </table>
                        <br>
                        <div class="form-group" >
                            <input type="submit" class="register_button " value="NEXT" style="float: right; width: 100%;" >
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
            
        </script>

    </body>
     
 </html>