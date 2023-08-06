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

        <link rel="stylesheet" href="monthly_report1.css">
        
    </head>
    
    <body>
    
        <div class="container">
        
            <h1 style="color: white; font-size: 100px; text-align: center; ">MONTHLY REPORT</h1>

            <div class="right">

                <div class="form">

                    <!-- Registration form -->
                    <form role="form" id="signup" class="was-validated" action="monthly_report1db.php" method="post" data-toggle="validator">
                        
                        <table>

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

                            <tr>

                            </tr>

                            <tr>
                                
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

                            </tr>

                            <tr>

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
                            
                            <tr>
                                <td>

                                    <!-- <div class="form-group">
                                        <input type="submit" class="register_button " value="NEXT" >
                                    </div> -->
                                    <a href="monthly_report2.php">NEXT</a>
                                    
                                </td>
                            
                            </tr>

                        </table>
                                
                    </form>

                    <form action="./" method="post">
                        <div class="tabs" id="tabbedForm">
                            <nav class="tab-nav"></nav>
                            <div class="tab" data-name="Step 1">
                            Content 1
                            </div>
                            <div class="tab" data-name="Step 2">
                            Content 2
                            </div>
                            <div class="tab" data-name="Step 3">
                            Content 3
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
            
        </script>

    </body>
     
 </html>