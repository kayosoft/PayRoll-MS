  <?php
  session_start();
  include('includes/db_connect.php');
  // include('includes/checklogin.php');
  // check_login();
  //code for registration
  if(isset($_POST['submit']))
  {

  $fname=$_POST['firstName'];
  $sname=$_POST['surName'];
  $mname=$_POST['otherName'];
  $gender=$_POST['gender'];
  $dob = $_POST['dob'];
  $nin = $_POST['nin'];
  $ssNo = $_POST['ssNo'];
  $bankAcc = $_POST['bankAcc'];
  $tin = $_POST['tin'];
  $profile = $_POST['profile'];
  $contactno=$_POST['tell'];
  $emailid=$_POST['email'];

  $query="INSERT  INTO  employees(firstName,surName,otherName,gender,tellNo,email,NIN,ssNo,DoB,TIN) values(?,?,?,?,?,?,?,?,?,?)";
  $stmt = $mysqli->prepare($query);
  $rc=$stmt->bind_param('sssssssisi',$fname,$sname,$mname,$gender,$contactno,$emailid,$nin,$ssNo,$dob,$tin);
  $stmt->execute();
  $stmt->close();



  echo"<script>alert('Employee Succssfully register');</script>";
  }
  ?>


  <!DOCTYPE html>
  <html lang="en">
    <head>
      <!-- Required meta tags -->
      <meta charset="utf-8">
      <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
      <title>X PayRoll</title>
      <!-- plugins:css -->
      <link rel="stylesheet" href="assets/vendors/mdi/css/materialdesignicons.min.css">
      <link rel="stylesheet" href="assets/vendors/css/vendor.bundle.base.css">
      <!-- endinject -->
      <!-- Plugin css for this page -->
      <!-- End plugin css for this page -->
      <!-- inject:css -->
      <!-- endinject -->
      <!-- Layout styles -->
      <link rel="stylesheet" href="assets/css/style.css">
      <!-- End layout styles -->
      <link rel="shortcut icon" href="assets/images/favicon.png" />

      <link href='https://maxcdn.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css' rel='stylesheet'>
      <link href='https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.0.3/css/font-awesome.css' rel='stylesheet'>

      <link rel="stylesheet" type="text/css" href="assets/css/multi-form.css">

    </head>
    <body>



      <div class="container-scroller">


        <?php include('includes/header.php');?>

        <div class="container-fluid page-body-wrapper">
          <?php include('includes/sideNav.php');?>
          <div class="main-panel">
            <div class="content-wrapper">

                <div class="col-12">
                  <div class="card">
                    <div class="card-body">
                      <h4 class="card-title">Register Employee</h4>
                      <div class="row justify-content-center">
                        
                  <h2 id="heading">Sign Up Your User Account</h2>
                  <p>Fill all form field to go to next step</p>
                       <form id="msform" class="form-sample" method="post" action="registerEmployee.php">
                      <!-- progressbar -->
                      <ul id="progressbar">
                          <li class="active" id="account"><strong>Personal</strong></li>
                          <li id="personal"><strong>Personal</strong></li>
                          <li id="payment"><strong>Image</strong></li>
                          <li id="confirm"><strong>Finish</strong></li>
                      </ul>
                      <div class="progress">
                          <div class="progress-bar progress-bar-striped progress-bar-animated" role="progressbar" aria-valuemin="0" aria-valuemax="100"></div>
                      </div> <br> <!-- fieldsets -->
                      <fieldset>
                        <div class="row">
                                  <div class="col-7">
                                      <h2 class="fs-title">Account Information:</h2>
                                  </div>
                                  <div class="col-5">
                                      <h2 class="steps">Step 1 - 4</h2>
                                  </div>
                              </div> 
                        <div class="row">
                          <div class="col-md-6">
                            <div class="form-group row">
                              <label class="col-sm-3 col-form-label">Employee Number</label>
                              <div class="col-sm-9">
                                <input type="text" class="form-control" name="firstName" />
                              </div>
                            </div>
                          </div>
                          
                        </div>
                        <div class="row">
                          <div class="col-md-6">
                            <div class="form-group row">
                              <label class="col-sm-3 col-form-label">First Name</label>
                              <div class="col-sm-9">
                                <input type="text" class="form-control" name="firstName" />
                              </div>
                            </div>
                          </div>
                          <div class="col-md-6">
                            <div class="form-group row">
                              <label class="col-sm-3 col-form-label">SurName</label>
                              <div class="col-sm-9">
                                <input type="text" class="form-control" name="surName" />
                              </div>
                            </div>
                          </div>
                        </div>
                        <div class="row">
                          <div class="col-md-6">
                            <div class="form-group row">
                              <label class="col-sm-3 col-form-label">Other Name</label>
                              <div class="col-sm-9">
                                <input type="text" class="form-control" name="otherName" />
                              </div>
                            </div>
                          </div>
                         <div class="col-md-6">
                            <div class="form-group row">
                              <label class="col-sm-3 col-form-label">Gender</label>
                              <div class="col-sm-9">
                                <select class="form-control" name="gender">
                                  <option>Select here</option>
                                  <option>Male</option>
                                  <option>Female</option>
                                </select>
                              </div>
                            </div>
                          </div>
                        </div>
                        <div class="row">

                          <div class="col-md-6">
                            <div class="form-group row">
                              <label class="col-sm-3 col-form-label">Date of Birth</label>
                              <div class="col-sm-9">
                                <input type="date" class="form-control" placeholder="dd/mm/yyyy" name="dob" />
                              </div>
                            </div>
                          </div>
                          
                          
                        </div>
                        <p class="card-description"> Bank </p>
                        <div class="row">
                          <div class="col-md-6">
                            <div class="form-group row">
                              <label class="col-sm-3 col-form-label">Bank</label>
                              <div class="col-sm-9">
                                <select class="form-control" name="bank">
                                  <option>Select here</option>
                                  <option>B1</option>
                                  <option>B2</option>
                                </select>
                              </div>
                            </div>
                          </div>
                          <div class="col-md-6">
                            <div class="form-group row">
                              <label class="col-sm-3 col-form-label">Bank Account</label>
                              <div class="col-sm-9">
                                <input type="text" class="form-control" name="bankAcc" />
                              </div>
                            </div>
                          </div>
                        </div>
                 
                          <div class="form-card">
                              <div class="row">
                                  <div class="col-7">
                                      <h2 class="fs-title">Account Information:</h2>
                                  </div>
                                  <div class="col-5">
                                      <h2 class="steps">Step 1 - 4</h2>
                                  </div>
                              </div> 
                                     
                          </div> <input type="button" name="next" class="next action-button" value="Next" />
                      </fieldset>
                      <fieldset>
                          <div class="form-card">
                              <div class="row">
                                  <div class="col-7">
                                      <h2 class="fs-title">Personal Information:</h2>
                                  </div>
                                  <div class="col-5">
                                      <h2 class="steps">Step 2 - 4</h2>
                                  </div>
                              </div>  
                            <div class="row">
                          <div class="col-md-6">
                            <div class="form-group row">
                              <label class="col-sm-3 col-form-label">SS No.</label>
                              <div class="col-sm-9">
                                <input type="text" class="form-control" name="ssNo" />
                              </div>
                            </div>
                          </div>
                          <div class="col-md-6">
                            <div class="form-group row">
                              <label class="col-sm-3 col-form-label">NIN</label>
                              <div class="col-sm-9">
                                <input type="text" class="form-control" name="nin" />
                              </div>
                            </div>
                          </div>
                        </div>
                        <div class="row">
                          <div class="col-md-6">
                            <div class="form-group row">
                              <label class="col-sm-3 col-form-label">TIN</label>
                              <div class="col-sm-9">
                                <input type="text" class="form-control" name="tin" />
                              </div>
                            </div>
                          </div>
                         
                        
                          
                        </div>
                          </div> <input type="button" name="next" class="next action-button" value="Next" /> <input type="button" name="previous" class="previous action-button-previous" value="Previous" />
                      </fieldset>
                      <fieldset>
                          <div class="form-card">
                              <div class="row">
                                  <div class="col-7">
                                      <h2 class="fs-title">Image Upload:</h2>
                                  </div>
                                  <div class="col-5">
                                      <h2 class="steps">Step 3 - 4</h2>
                                  </div>
                              </div>  
                    <div class="row">
                          <div class="col-md-6">
                          <div class="form-group row">
                          <label class="col-sm-3 col-form-label">File upload</label>
                          <div class="col-sm-9">
                          <input type="file" name="profile" class="file-upload-default">
                          <div class="input-group col-xs-12">
                            <input type="text" class="form-control file-upload-info" disabled placeholder="Upload Image">
                            <span class="input-group-append">
                              <button class="file-upload-browse btn btn-gradient-primary" type="button">Upload</button>
                            </span>
                          </div>
                        </div>
                        </div>
                      </div>
                    </div>
                          </div>
                          <input type="button" name="next" class="next action-button" value="Submit" /> <input type="button" name="previous" class="previous action-button-previous" value="Previous" />
                      </fieldset>
                      <fieldset>
                          <div class="form-card">
                              <div class="row">
                                  <div class="col-7">
                                      <h2 class="fs-title">Finish:</h2>
                                  </div>
                                  <div class="col-5">
                                      <h2 class="steps">Step 4 - 4</h2>
                                  </div>
                              </div> <br><br>
                              <h2 class="purple-text text-center"><strong>SUCCESS !</strong></h2> <br>
                              <div class="row justify-content-center">
                                  <div class="col-3"> <img src="https://i.imgur.com/GwStPmg.png" class="fit-image"> </div>
                              </div> <br><br>
                              <div class="row justify-content-center">
                                  <div class="col-7 text-center">
                                      <h5 class="purple-text text-center">You Have Successfully Signed Up</h5>
                                  </div>
                              </div>
                          </div>
                      </fieldset>
                  </form>
               
            
                </div>
              </div>
            </div>
          </div>
       


         

            <!-- content-wrapper ends -->
            <!-- partial:../../partials/_footer.html -->
            <footer class="footer">
              <div class="d-sm-flex justify-content-center justify-content-sm-between">
                <span class="text-muted text-center text-sm-left d-block d-sm-inline-block">Copyright © 2020 <a href="##" target="_blank">PayRoll</a>. All rights reserved.</span>
                <span class="float-none float-sm-right d-block mt-1 mt-sm-0 text-center">2020</span>
              </div>
            </footer>
            <!-- partial -->
          </div>
          <!-- main-panel ends -->
        </div>
        <!-- page-body-wrapper ends -->
      </div>
      <!-- container-scroller -->
      <!-- plugins:js -->
      <script src="assets/vendors/js/vendor.bundle.base.js"></script>
      <!-- endinject -->
      <!-- Plugin js for this page -->
      <!-- End plugin js for this page -->
      <!-- inject:js -->
      <script src="assets/js/off-canvas.js"></script>
      <script src="assets/js/hoverable-collapse.js"></script>
      <script src="assets/js/misc.js"></script>
      <!-- endinject -->
      <!-- Custom js for this page -->
      <script src="assets/js/file-upload.js"></script>
      <!-- End custom js for this page -->

      <!-- Multi Step form -->
      <script type='text/javascript' src='https://cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js'></script>
                                  <script type='text/javascript' src='https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js'></script>
                                  <script type='text/javascript' src='https://maxcdn.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js'></script>
                                  <script type='text/javascript'>$(document).ready(function(){

  var current_fs, next_fs, previous_fs; //fieldsets
  var opacity;
  var current = 1;
  var steps = $("fieldset").length;

  setProgressBar(current);

  $(".next").click(function(){

  current_fs = $(this).parent();
  next_fs = $(this).parent().next();

  //Add Class Active
  $("#progressbar li").eq($("fieldset").index(next_fs)).addClass("active");

  //show the next fieldset
  next_fs.show();
  //hide the current fieldset with style
  current_fs.animate({opacity: 0}, {
  step: function(now) {
  // for making fielset appear animation
  opacity = 1 - now;

  current_fs.css({
  'display': 'none',
  'position': 'relative'
  });
  next_fs.css({'opacity': opacity});
  },
  duration: 500
  });
  setProgressBar(++current);
  });

  $(".previous").click(function(){

  current_fs = $(this).parent();
  previous_fs = $(this).parent().prev();

  //Remove class active
  $("#progressbar li").eq($("fieldset").index(current_fs)).removeClass("active");

  //show the previous fieldset
  previous_fs.show();

  //hide the current fieldset with style
  current_fs.animate({opacity: 0}, {
  step: function(now) {
  // for making fielset appear animation
  opacity = 1 - now;

  current_fs.css({
  'display': 'none',
  'position': 'relative'
  });
  previous_fs.css({'opacity': opacity});
  },
  duration: 500
  });
  setProgressBar(--current);
  });

  function setProgressBar(curStep){
  var percent = parseFloat(100 / steps) * curStep;
  percent = percent.toFixed();
  $(".progress-bar")
  .css("width",percent+"%")
  }

  $(".submit").click(function(){
  return false;
  })

  });</script>
    </body>
  </html>