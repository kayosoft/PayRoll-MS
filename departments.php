    <?php
    session_start();
    include('includes/db_connect.php');
    include('includes/checklogin.php');
    check_login();



     if(isset($_POST['addDept']))
  {

  $deptCode=$_POST['deptCode'];
  $deptName=$_POST['deptName'];
  $HoD=$_POST['deptHoD'];
 

  $query="INSERT  INTO  departments(deptID,deptName,HoD) values(?,?,?)";
  $stmt = $mysqli->prepare($query);
  $rc=$stmt->bind_param('sss',$deptCode,$deptName,$HoD);
  $stmt->execute();
  $stmt->close();



  echo"<script>alert('New Department is Added');</script>";
  }
  
    ?>
    <!DOCTYPE html>
    <html lang="en">

    <head>

      <meta charset="utf-8">
      <meta http-equiv="X-UA-Compatible" content="IE=edge">
      <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
      <meta name="description" content="">
      <meta name="author" content="">

      <title>PayRoll || Departmnts</title>
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




      <!-- Custom fonts for this template -->
      <link href="assets/fontawesome-free/css/all.min.css" rel="stylesheet" type="text/css">
      <link href="https://fonts.googleapis.com/css?family=Nunito:200,200i,300,300i,400,400i,600,600i,700,700i,800,800i,900,900i" rel="stylesheet">

      <!-- Custom styles for this template -->
      <!-- <link href="assets/sss/css/sb-admin-2.min.css" rel="stylesheet"> -->

      <!-- Custom styles for this page -->
      <link href="assets/datatables/dataTables.bootstrap4.min.css" rel="stylesheet">

    </head>

    <body>

      <div class="container-scroller">


          <?php include('includes/header.php');?>

          <div class="container-fluid page-body-wrapper">

            <?php include('includes/sideNav.php');?>

             <div class="main-panel">
      
              <div class="content-wrapper">
            

              <!-- Page Heading -->
              <!-- <h1 class="h3 mb-2 text-gray-800">Tables</h1>
              <p class="mb-4">DataTables is a third party plugin that is used to generate the demo table below. For more information about DataTables, please visit the <a target="_blank" href="https://datatables.net">official DataTables documentation</a>.</p> -->

              <!-- DataTales Example -->
              
              <div class="card shadow mb-4">
                <div class="card-header py-3">
                  <h6 class="m-0 font-weight-bold text-primary">Departments</h6>


                              <button type="button" class="btn btn-gradient-info btn-icon-text"> Print <i class="mdi mdi-printer btn-icon-append"></i>
                              </button>
                </div>

                  <div class="container">
         <div class="row d-flex justify-content-center mt-200"> <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#exampleModal"> Add a Department </button> </div> <!-- Modal -->
         <div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
             <div class="modal-dialog modal-md modal-dialog-centered" role="document">
                 <div class="modal-content">
                     <div class="modal-header">
                         <h5 class="modal-title" id="exampleModalLabel">Add Departments</h5> <button type="button" class="close" data-dismiss="modal" aria-label="Close"> <span aria-hidden="true">&times;</span> </button>
                     </div>
                     <div class="modal-body">
              
                <div class="col-12 grid-margin stretch-card">
                <div class="card">
                  <div class="card-body">
                    <form class="forms-sample" action="departments.php" method="post">
                      <div class="form-group">
                        <label for="deptCode">Department Code</label>
                        <input type="text" class="form-control" id="deptCode" placeholder="dept Code" name="deptCode">
                      </div>
                      <div class="form-group">
                        <label for="bankName">Department Name</label>
                        <input type="text" class="form-control" id="deptName" placeholder="Dept Name" name="deptName">
                      </div>
                      <div class="form-group">
                        <label for="hod">Head of Department</label>
                        <input type="text" class="form-control" id="email" placeholder="Select HoD" name="deptHoD">
                      </div>
                      
                      <button type="submit" class="btn btn-gradient-primary mr-2" name="addDept">Submit</button>
                      <button class="btn btn-light">Cancel</button>
                    </form>
                  </div>
                </div>
              </div>
              

                 </div>
             </div>
         </div>
     </div>



                <div class="card-body">
                  <div class="table-responsive">
                    <table class="table table-bordered table table-striped table-bordered table-hover" id="dataTable" width="100%" cellspacing="0">
                      <thead>
                        <tr>
                          <th>Sno.</th>
                          <th>DeptCode</th>
                          <th>Department</th>
                          <th>HoD</th>
                          <th>Action</th>
                          
                        </tr>
                      </thead>
                      <tfoot>
                        <tr>
                          <th>Sno.</th>
                          <th>DeptCode</th>
                          <th>Department</th>
                          <th>HoD</th>
                          <th>Action</th>
                        </tr>
                      </tfoot>
                      <tbody>


                        <?php 
$aid=$_SESSION['userID'];
$ret="select * from departments";
$stmt= $mysqli->prepare($ret) ;
//$stmt->bind_param('i',$aid);
$stmt->execute() ;
$res=$stmt->get_result();
$cnt=1;
while($row=$res->fetch_object())
    {
      ?>
<tr><td><?php echo $cnt;;?></td>
<td><?php echo $row->deptID;?></td>
<td><?php echo $row->deptName;?></td>
<td><?php echo $row->HoD;?></td>
<td>
  


  <!-- <button class="btn btn-success btn-xs"><i class="fa fa-check"></i></button> -->
    <a href="#" class="btn btn-primary btn-xs" ><i class="mdi mdi-pencil"></i></a>
    <a href="#" class="btn btn-danger btn-xs" ><i class="mdi mdi-delete"></i></a>
</td>


                    </tr>
                  <?php
$cnt=$cnt+1;
                   } ?>
                        
                      </tbody>
                    </table>
                  </div>
                </div>
              </div>

           </div>

        <!-- content-wrapper ends -->
              <!-- footer -->
              <?php include('includes/footer.php'); ?>
             <!-- End footer -->
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




      <!-- Bootstrap core JavaScript-->
      <script src="assets/jquery/jquery.min.js"></script>
      <!-- <script src="assets/bootstrap/js/bootstrap.bundle.min.js"></script> -->

      <!-- Core plugin JavaScript-->
      <script src="assets/jquery-easing/jquery.easing.min.js"></script>

      <!-- Custom scripts for all pages-->
      <script src="assets/sss/js/sb-admin-2.min.js"></script> 

      <!-- Page level plugins -->
      <script src="assets/datatables/jquery.dataTables.min.js"></script>
      <script src="assets/datatables/dataTables.bootstrap4.min.js"></script>

      <!-- Page level custom scripts -->
      <script src="assets/sss/js/demo/datatables-demo.js"></script>

    </body>

    </html>