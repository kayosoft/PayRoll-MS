    <?php
    session_start();
    include('includes/db_connect.php');
    include('includes/checklogin.php');
    check_login();

     if(isset($_POST['update']))
  {

  $compName=$_POST['compName'];
  $postalAddress=$_POST['postalAddress'];
  $compEmail=$_POST['compEmail'];
  $city=$_POST['city'];
  $tin = $_POST['tin'];

  $sql = "SELECT companyCode FROM companydetails";
$result = $mysqli->query($sql);

if ($result->num_rows > 0) {
  $update = "UPDATE companydetails SET companyName='$compName',postalAddress='$postalAddress',email='$compEmail',city='$city',TIN='$tin' WHERE companyCode=1";

if (mysqli_query($mysqli, $update)) {
  //echo "Record updated successfully";
} else {
  echo "Error updating record: " . mysqli_error($mysqli);
}
  
} else {

    $query="INSERT  INTO  companydetails(companyName,postalAddress,email,city,TIN) values(?,?,?,?,?)";
  $stmt = $mysqli->prepare($query);
  $rc=$stmt->bind_param('sssss',$compName,$postalAddress,$compEmail,$city,$tin);
  $stmt->execute();
  $stmt->close();



  echo"<script>alert('Detail Succssfully updated');</script>";
  
}
  
  

 
  }
 


    
      ?>
    
    <!DOCTYPE html>
    <html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <meta http-equiv="X-UA-Compatible" content="ie=edge">
        <title>DashBoard</title>

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

            <div class="col-12 grid-margin stretch-card">
                <div class="card">
                  <div class="card-body">
                    <h4 class="card-title">Company Detail</h4>
                    <!-- <p class="card-description"> </p> -->
                    <form class="forms-sample" method="post"  action="companydetail.php">
                      <div class="form-group">
                        <?php


                        $detail = "SELECT * FROM companydetails";
$rslt = $mysqli->query($detail);

if ($rslt->num_rows > 0) {
  // output data of each row
  while($row = $rslt->fetch_assoc()) {
   
    ?>
  
                        <label for="compName">Company Name</label>
                        <input type="text" class="form-control" id="compName" placeholder="Company Name" value="<?php echo $row["companyName"]; ?>" name="compName">
                      </div>
                      <div class="form-group">
                        <label for="postalAddress">Postal Address</label>
                        <input type="text" class="form-control" id="pstAddress" placeholder="Postal Address" name="postalAddress" value="<?php echo $row["postalAddress"]; ?>">
                      </div>
                      <div class="form-group">
                        <label for="compEmail">Email address</label>
                        <input type="email" class="form-control" id="email" placeholder="Email" name="compEmail" value="<?php echo $row["email"]; ?>">
                      </div>
                      <div class="form-group">
                        <label for="tell">Tellephone</label>
                        <input type="text" class="form-control" id="tell" placeholder="0435676679" name="tell" value="0435676679">
                      </div>
                      <div class="form-group">
                        <label for="city">City</label>
                        <select class="form-control" id="city" name="city">
                          <option value="Kampala">Kampala</option>
                          <option value="Lira">Lira</option>
                          <option value="Mbarara">Mbarara</option>
                        </select>
                      </div>
                      <div class="form-group">
                        <label for="tin">TIN</label>
                        <input type="text" class="form-control" id="tin" placeholder="TIN" name="tin" value="<?php echo $row["TIN"]; ?>">
                      </div>
                      <div class="form-group">
                        <label>Company Logo</label>
                        <input type="file" name="img[]" class="file-upload-default">
                        <div class="input-group col-xs-12">
                          <input type="text" class="form-control file-upload-info" disabled placeholder="Upload Image">
                          <span class="input-group-append">
                            <button class="file-upload-browse btn btn-gradient-primary" type="button">Upload</button>
                          </span>
                        </div>
                      </div>
                      
                      <div class="form-group">
                        <label for="descpt">Company Description</label>
                        <textarea class="form-control" id="exampleTextarea1" rows="4" name="descpt"></textarea>
                      </div>
                      <?php

                      }
} else {
  echo "0 results";
  ?>
   <label for="compName">Company Name</label>
                        <input type="text" class="form-control" id="compName" placeholder="Company Name"  name="compName">
                      </div>
                      <div class="form-group">
                        <label for="postalAddress">Postal Address</label>
                        <input type="text" class="form-control" id="pstAddress" placeholder="Postal Address" name="postalAddress" >
                      </div>
                      <div class="form-group">
                        <label for="compEmail">Email address</label>
                        <input type="email" class="form-control" id="email" placeholder="Email" name="compEmail" >
                      </div>
                      <div class="form-group">
                        <label for="tell">Tellephone</label>
                        <input type="text" class="form-control" id="tell" placeholder="0435676679" name="tell" >
                      </div>
                      <div class="form-group">
                        <label for="city">City</label>
                        <select class="form-control" id="city" name="city">
                          <option value="Kampala">Kampala</option>
                          <option value="Lira">Lira</option>
                          <option value="Mbarara">Mbarara</option>
                        </select>
                      </div>
                      <div class="form-group">
                        <label for="tin">TIN</label>
                        <input type="text" class="form-control" id="tin" placeholder="TIN" name="tin" >
                      </div>
                      <div class="form-group">
                        <label>Company Logo</label>
                        <input type="file" name="img[]" class="file-upload-default">
                        <div class="input-group col-xs-12">
                          <input type="text" class="form-control file-upload-info" disabled placeholder="Upload Image">
                          <span class="input-group-append">
                            <button class="file-upload-browse btn btn-gradient-primary" type="button">Upload</button>
                          </span>
                        </div>
                      </div>
                      
                      <div class="form-group">
                        <label for="descpt">Company Description</label>
                        <textarea class="form-control" id="exampleTextarea1" rows="4" name="descpt"></textarea>
                      </div>
  <?php
}
?>
                      <button type="submit" class="btn btn-gradient-primary mr-2" name="update">Update</button>
                      <button class="btn btn-light">Cancel</button>
                    </form>
                  </div>
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

       
    </body>
    </html>