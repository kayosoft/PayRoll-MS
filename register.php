    <?php
    session_start();
    include('includes/db_connect.php');
    include('includes/checklogin.php');
    check_login();


    if(isset($_POST['submit']))
      {

      $fname=$_POST['first_name'];
      $sname=$_POST['last_name'];
      $mname=$_POST['other_name'];
      $dob = $_POST['birth_date'];
      $gender=$_POST['gender_type'];
      $emailid=$_POST['email'];
      $contactno=$_POST['phone'];
      $address=$_POST['address'];
      $empID = $_POST['employee_id'];
      $job = $_POST['job'];
      $dept = $_POST['dept'];
      $nin = $_POST['nin'];
      $tin = $_POST['tin'];
      $ssNo = $_POST['ssno'];
      $bank_name = $_POST['bank_name'];
      $bankAcc = $_POST['account_number'];
      // $start_date = $_POST['start_date'];
      // $profile = $_POST['profile'];
      $salary=$_POST['salary'];
      $loanID = "LN".$empID;
      $loanAmount = '0';
      $loanDeduction = '0';
      $loanBalance = '0';
      
      $qry="INSERT  INTO  loans(loanID,empNo,loanAmount,loanDeduction,loanBalance) values(?,?,?,?,?)";
      $loandt = $mysqli->prepare($qry);
      $rslt=$loandt->bind_param('sssss',$loanID,$empID,$loanAmount,$loanDeduction,$loanBalance);
      $loandt->execute();

      $query="INSERT  INTO  employees(empNo,firstName,surName,otherName,gender,tellNo,email,NIN,ssNo,DoB,TIN,deptID,jobCode,bankAccount,bankCode,sID,loanID) values(?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?)";
      $stmt = $mysqli->prepare($query);
      $rc=$stmt->bind_param('sssssssssssssssss',$empID,$fname,$sname,$mname,$gender,$contactno,$emailid,$nin,$ssNo,$dob,$tin,$dept,$job,$bankAcc,$bank_name,$salary,$loanID);
      $stmt->execute();
      $stmt->close();
      if($rc){


      echo"<script>alert('Employee Succssfully register');</script>";
      }
      }
      ?>
    
    <!DOCTYPE html>
    <html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <meta http-equiv="X-UA-Compatible" content="ie=edge">
        <title>Sign Up Employee</title>

        <!-- Font Icon -->
        <link rel="stylesheet" href="pages/fonts/themify-icons/themify-icons.css">

        <!-- Main css -->
        <link rel="stylesheet" href="pages/css/style.css">

        <!-- Date picker -->
        
        <link rel="stylesheet" type="text/css" href="https://cdn.jsdelivr.net/npm/daterangepicker/daterangepicker.css" />



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

            <div class="container">
                <h2>REGISTER EMPLOYEE ACCOUNT</h2>

                <form id="signup-form" class="signup-form" method="post" action="register.php">
                        <h3>
                            <span class="icon"><i class="ti-user"></i></span>
                            <span class="title_text">Personal</span>
                        </h3>
                        <fieldset>
                            <legend>
                                <span class="step-heading">Personal Informaltion: </span>
                                <span class="step-number">Step 1 / 4</span>
                            </legend>
                            <div class="form-group">
                                <label for="first_name" class="form-label required">First name</label>
                                <input type="text" name="first_name" id="first_name" />
                            </div>

                            <div class="form-group">
                                <label for="last_name" class="form-label required">Surname</label>
                                <input type="text" name="last_name" id="last_name" />
                            </div>
                            <div class="form-group">
                                <label for="other_name" class="form-label required">Other name</label>
                                <input type="text" name="other_name" id="other_name" />
                            </div>

                            <div class="form-row">
                                <div class="form-date">
                                    <label for="birth_date" class="form-label required">Date of birth</label>
                                    <div class="form-date-group">
                                        <input type="date" name="birth_date" value="01/01/2002" placeholder="01/01/2002" id="birth_date" />
                                    </div>
                                </div>
        
                                <!-- <div class="form-select">
                                    <label for="gender" class="form-label">Gender</label>
                                    <div class="select-list">
                                        <select name="gender_type" id="gender">
                                            <option value="">Select Gender</option>
                                            <option value="Male">Male</option>
                                            <option value="Female">Female</option>
                                        </select>
                                    </div>
                                </div> -->
                                <div class="form-select form-group">
                                    <label for="gender_type" class="form-label required">Gender</label>
                                    <div class="select-list">
                                        <select name="gender_type" id="gender_type">
                                            <option value="">Select Gender</option>

    
                                            <option value="Male">Male</option>
                                            <option value="Female">Female</option>
                                            
                                    </select>
                            </div>

                            </div>

                        

                            <!-- <div class="form-group">
                                <label for="user_name" class="form-label required">User name</label>
                                <input type="text" name="user_name" id="user_name" />
                            </div>

                            <div class="form-group">
                                <label for="password" class="form-label required">Password</label>
                                <input type="password" name="password" id="password" />
                            </div> -->
                           
                            <!-- <input type="button" name="previous" class="previous btn btn-default" value="Previous" />
                            <input type="submit" name="submit" class="submit btn btn-success" value="Submit" /> -->
                        </fieldset>

                        <h3>
                            <span class="icon"><i class="ti-email"></i></span>
                            <span class="title_text">Contact</span>
                        </h3>
                        <fieldset>
                            <legend>
                                <span class="step-heading">Contact Informaltion: </span>
                                <span class="step-number">Step 2 / 4</span>
                            </legend>
                            <div class="form-group">
                                <label for="email" class="form-label required">Email</label>
                                <input type="email" name="email" id="email" />
                            </div>

                            <div class="form-group">
                                <label for="phone" class="form-label required">Phone</label>
                                <input type="number" name="phone" id="phone" />
                            </div>

                            <div class="form-group">
                                <label for="address" class="form-label required">Address</label>
                                <input type="text" name="address" id="address" />
                            </div>

                            <!-- <div class="form-select">
                                <label for="country" class="form-label">Country</label>
                                <div class="select-list">
                                    <select name="country" id="country">
                                        <option value="">Australia</option>
                                        <option value="Australia">Australia</option>
                                        <option value="USA">America</option>
                                    </select>
                                </div>
                            </div> -->
                        </fieldset>

                        <h3>
                            <span class="icon"><i class="ti-star"></i></span>
                            <span class="title_text">Official</span>
                        </h3>
                        <fieldset>
                            <legend>
                                <span class="step-heading">Official Informaltion: </span>
                                <span class="step-number">Step 3 / 4</span>
                            </legend>
                            <div class="form-group">
                                <label for="employee_id" class="form-label required">Employee ID</label>
                                <input type="text" name="employee_id" id="employee_id" />
                            </div>

                            <div class="form-select form-group">
                                    <label for="job" class="form-label required">Designation</label>
                                    <div class="select-list">
                                        <select name="job" id="job">
                                            <option value="">Select Job Title</option>

                                                            <?php   
    
    $job="select * from jobtittles";
    $stmt= $mysqli->prepare($job) ;
    //$stmt->bind_param('i',$aid);
    $stmt->execute() ;
    $res=$stmt->get_result();
    
    while($row=$res->fetch_object())
          {


            ?>
    
        <option value="<?php echo $row->jobCode;?>"><?php echo $row->jobTittle;?></option>
                                          
    

                                           
                                        <?php
    
                                         } ?>

                                           
                                        </select>
                            </div>

                            <div class="form-select form-group">
                                    <label for="dept" class="form-label required">Department</label>
                                    <div class="select-list">
                                        <select name="dept" id="dept">
                                            <option value="">Select Dept</option>

                                                          <?php   
   
    $dept="select * from departments";
    $stmtDept= $mysqli->prepare($dept) ;
    //$stmt->bind_param('i',$aid);
    $stmtDept->execute() ;
    $resDept=$stmtDept->get_result();
    
    while($row=$resDept->fetch_object())
          {


            ?>
    
        <option value="<?php echo $row->deptID;?>"><?php echo $row->deptName;?></option>
                                          
    

                                           
                                        <?php
    
                                         } ?>
                                            
                                        </select>
                            </div>

                            <div class="form-group">
                                <label for="nin" class="form-label required">NIN</label>
                                <input type="text" name="nin" id="nin" />
                            </div>
                            <div class="form-row">
                                <div class="form-group">
                                    <label for="tin" class="form-label required">TIN</label>
                                    <input type="number" name="tin" id="tin" />
                                </div>

                                <div class="form-group">
                                    <label for="ssno" class="form-label required">ss No.</label>
                                    <input type="text" name="ssno" id="ssno" />
                                </div>
                            </div>
                        </fieldset>

                        <h3>
                            <span class="icon"><i class="ti-credit-card"></i></span>
                            <span class="title_text">Payment</span>
                        </h3>
                        <fieldset>
                            <legend>
                                <span class="step-heading">Payment Informaltion: </span>
                                <span class="step-number">Step 4 / 4</span>
                            </legend>
                            <div class="form-select form-group">
                                    <label for="bank_name" class="form-label required">Bank Name</label>
                                    <div class="select-list">
                                        <select name="bank_name" id="bank_name">
                                            <option value="">Select Bank</option>
                                            
                                                          <?php   
    $aid=$_SESSION['userID'];
    $bank="select * from banks";
    $stmtBank= $mysqli->prepare($bank) ;
    //$stmt->bind_param('i',$aid);
    $stmtBank->execute() ;
    $resBank=$stmtBank->get_result();
    
    while($row=$resBank->fetch_object())
          {


            ?>
    
        <option value="<?php echo $row->bankCode;?>"><?php echo $row->bankName;?></option>
                                          
    

                                           
                                        <?php
    
                                         } ?>
                                        </select>
                                    </div>
                                </div>

                            <div class="form-group">
                                <label for="account_number" class="form-label required">Account Number</label>
                                <input type="text" name="account_number" id="account_number" />
                            </div>

                            <div class="form-row">
                                <div class="form-date">
                                    <label for="expiry_date" class="form-label">Start Date</label>
                                    <div class="form-date-group">
                                        <div class="form-date-item">
                                            <select id="expiry_date" name="expiry_date"></select>
                                            <span class="select-icon"><i class="ti-angle-down"></i></span>
                                        </div>
                                        <div class="form-date-item">
                                            <select id="expiry_month" name="expiry_month"></select>
                                            <span class="select-icon"><i class="ti-angle-down"></i></span>
                                        </div>
                                        <div class="form-date-item">
                                            <select id="expiry_year" name="expiry_year"></select>
                                            <span class="select-icon"><i class="ti-angle-down"></i></span>
                                        </div>
                                    </div>
                                </div>
        
                                <div class="form-select">
                                    <label for="salary" class="form-label">Salary Scale</label>
                                    <div class="select-list">
                                        <select name="salary" id="salary">
                                            <option value="">Select salary</option>
                                            <?php   
    
    $rslt="select * from salary";
    $stmtRslt= $mysqli->prepare($rslt) ;
    //$stmt->bind_param('i',$aid);
    $stmtRslt->execute() ;
    $resRslt=$stmtRslt->get_result();
    
    while($row=$resRslt->fetch_object())
          {


            ?>
    
        <option value="<?php echo $row->sID;?>"><?php echo $row->sID;?></option>
                                          
    

                                           
                                        <?php
    
                                         } ?>
                                        </select>
                                    </div>
                                </div>
                            </div>

                           <input type="submit" name="submit" value="Submit Now">
                        </fieldset>
                        
                </form>
            </div>
        </div>

        
        <?php include('includes/footer.php'); ?>

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

        <!-- JS register form -->
        <script src="pages/vendor/jquery/jquery.min.js"></script>
        <script src="pages/vendor/jquery-validation/dist/jquery.validate.min.js"></script>
        <script src="pages/vendor/jquery-validation/dist/additional-methods.min.js"></script>
        <script src="pages/vendor/jquery-steps/jquery.steps.min.js"></script>
        <script src="pages/vendor/minimalist-picker/dobpicker.js"></script>
        <script src="pages/js/main.js"></script>

        <!-- Date picker -->
        <script type="text/javascript" src="https://cdn.jsdelivr.net/momentjs/latest/moment.min.js"></script>
        <script type="text/javascript" src="https://cdn.jsdelivr.net/npm/daterangepicker/daterangepicker.min.js"></script>
        <script>
$(function() {
  $('input[name="birthday"]').daterangepicker({
    singleDatePicker: true,
    showDropdowns: true,
    minYear: 1970,
    maxYear: parseInt(moment().format('YYYY'),10)
  }, function(start, end, label) {
    var years = moment().diff(start, 'years');
    // alert("You are " + years + " years old!");
  });

});
</script>
    </body>
    </html>