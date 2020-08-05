<?php
session_start();
include('includes/db_connect.php');
include('includes/checklogin.php');
check_login();
?>
<!doctype html>
<html lang="en" class="no-js">

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
            <div class="page-header">
              <h3 class="page-title"> Employee </h3>
              <nav aria-label="breadcrumb">
                <ol class="breadcrumb">
                  <li class="breadcrumb-item"><a href="#">View more Data</a></li>
                  <li class="breadcrumb-item active" aria-current="page"></li>
                </ol>
              </nav>
            </div>
            <div class="row">
	
                <div class="card col-lg-12 grid-margin stretch-card">
                  <div class="card-body">
                    <h4 class="card-title">Employees</h4>
                    
                    <p class="card-description"> employees
                    </p>
								<table id="zctb" class="display table table-striped table-bordered table-hover " cellspacing="0" width="100%">
									<thead>
										<tr>
											<th>Sno.</th>
											<th>Employee No</th>
											<th>First Name</th>
											<th>Sur Name</th>
											<th>Other Name</th>
											<th>Gender</th>
											<th>Email</th>
											<th>Tell No</th>
											


										</tr>
									</thead>
									<tfoot>
										<tr>
											<th>Sno.</th>
											<th>Employee No</th>
											<th>First Name</th>
											<th>Sur Name</th>
											<th>Other Name</th>
											<th>Gender</th>
											<th>Email</th>
											<th>Tell No</th>
											
										</tr>
									</tfoot>
									<tbody>
<?php	
$aid=$_SESSION['userID'];
$ret="select * from employees";
$stmt= $mysqli->prepare($ret) ;
//$stmt->bind_param('i',$aid);
$stmt->execute() ;
$res=$stmt->get_result();
$cnt=1;
while($row=$res->fetch_object())
	  {
	  	?>
<tr><td><?php echo $cnt;;?></td>
<td><?php echo $row->empNo;?></td>
<td><?php echo $row->firstName;?></td>
<td><?php echo $row->surName;?></td>
<td><?php echo $row->otherName;?></td>
<td><?php echo $row->gender;?></td>
<td><?php echo $row->email;?></td>
<td><?php echo $row->tellNo;?></td>

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


	<!-- Loading Scripts -->
	<script src="assets/table/js/jquery.min.js"></script>
	<script src="assets/table/js/bootstrap-select.min.js"></script>
	<script src="assets/table/js/bootstrap.min.js"></script> 
	<script src="assets/table/js/jquery.dataTables.min.js"></script>
	<script src="assets/table/js/dataTables.bootstrap.min.js"></script> 
	<script src="assets/table/js/main.js"></script> 

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
