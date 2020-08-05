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
                    <form class="form-sample" method="post" action="registerEmployee.php">
                      <p class="card-description"> Personal info </p>
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
                            <label class="col-sm-3 col-form-label">Sur Name</label>
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
                            <label class="col-sm-3 col-form-label">SS No.</label>
                            <div class="col-sm-9">
                              <input type="text" class="form-control" name="ssNo" />
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
                      <div class="row">
                        <div class="col-md-6">
                          <div class="form-group row">
                            <label class="col-sm-3 col-form-label">TIN</label>
                            <div class="col-sm-9">
                              <input type="text" class="form-control" name="tin" />
                            </div>
                          </div>
                        </div>
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
                      <p class="card-description"> Contact </p>
                      <div class="row">
                        <div class="col-md-6">
                          <div class="form-group row">
                            <label class="col-sm-3 col-form-label">Email Address</label>
                            <div class="col-sm-9">
                              <input type="text" class="form-control" name="email" />
                            </div>
                          </div>
                        </div>
                        <div class="col-md-6">
                          <div class="form-group row">
                            <label class="col-sm-3 col-form-label">Tell No.</label>
                            <div class="col-sm-9">
                              <input type="text" class="form-control" name="tell" />
                            </div>
                          </div>
                        </div>
                      </div>


                      <button type="submit" class="btn btn-gradient-primary mr-2" name="submit">Submit</button>
                      <button class="btn btn-light">Cancel</button>
            
                    </form>
                  </div>
                </div>
              </div>
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
  </body>
</html>