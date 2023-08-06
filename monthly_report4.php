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
                <h3 style="color: orange; font-size: 50px; text-align: center; padding:30px;"> EXTRA CURRICULAR</h3>

                <div class="form">

                    <!-- Registration form -->
                    <form role="form" id="signup" class="was-validated" action="monthly_report4db.php" method="post" data-toggle="validator">
                        <br>
                                      
                        <br>
                        
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