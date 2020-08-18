    <?php
    session_start();
    include('../includes/db_connect.php');
    include('../includes/checklogin.php');
    check_login();


    
      ?>
    
    <!DOCTYPE html>
    <html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <meta http-equiv="X-UA-Compatible" content="ie=edge">
        <title>BanK List</title>

        <!-- Font Icon -->
        <link rel="stylesheet" href="../pages/fonts/themify-icons/themify-icons.css">

        <!-- Main css -->
        <link rel="stylesheet" href="../pages/css/style.css">

        <!-- Date picker -->
        <link rel="stylesheet" type="text/css" href="https://cdn.jsdelivr.net/npm/daterangepicker/daterangepicker.css" />



            <!-- plugins:css -->
        <link rel="stylesheet" href="../assets/vendors/mdi/css/materialdesignicons.min.css">
        <link rel="stylesheet" href="../assets/vendors/css/vendor.bundle.base.css">
        <!-- endinject -->
        <!-- Plugin css for this page -->
        <!-- End plugin css for this page -->
        <!-- inject:css -->
        <!-- endinject -->
        <!-- Layout styles -->
        <link rel="stylesheet" href="../assets/css/style.css"> 
        <!-- End layout styles -->
        <link rel="shortcut icon" href="../assets/images/favicon.png" />
    </head>
    <body>

        <div class="container-scroller">


         

        

            

             

                <div class="content-wrapper">
                    <button onclick="window.print()">Print this page</button>

            <div class="col-lg-12 grid-margin stretch-card">
                <div class="card">
                  <div class="card-body" style="text-align: center; align-content: center;">
                    <h4 class="card-title">List Of Banks</h4>
                    <p class="card-description">Some desc here
                    </p>
                    <table class="table table-striped table-hover table-bordered">
                      <thead>
                        <tr>
                          <th>Sno.</th>
                          <th>Bank Code</th>
                          <th>Bank Name</th>
                          <th>Email</th>
                          <th>City</th>
                         
                        </tr>
                      </thead>
                      <tfoot>
                        <tr>
                          <th>Sno.</th>
                          <th>Bank Code</th>
                          <th>Bank Name</th>
                          <th>Email</th>
                          <th>City</th>
                          
                        </tr>
                      </tfoot>
                      <tbody>
                       
                             <?php 
$aid=$_SESSION['userID'];
$ret="select * from banks";
$stmt= $mysqli->prepare($ret) ;
//$stmt->bind_param('i',$aid);
$stmt->execute() ;
$res=$stmt->get_result();
$cnt=1;
while($row=$res->fetch_object())
    {
      ?>
<tr><td><?php echo $cnt;;?></td>
<td><?php echo $row->bankCode;?></td>
<td><?php echo $row->bankName;?></td>
<td><?php echo $row->email;?></td>
<td><?php echo $row->city;?></td>


                    </tr>
                  <?php
$cnt=$cnt+1;
                   } ?>
                      </tbody>
                      </tbody>
                    </table>
                  </div>
                </div>
              </div>

        
        

         
          
        </div>
        <!-- container-scroller -->





        <!-- plugins:js -->
        <script src="../assets/vendors/js/vendor.bundle.base.js"></script> 
        <!-- endinject -->
        <!-- Plugin js for this page -->
        <!-- End plugin js for this page -->
        <!-- inject:js -->
        <script src="../assets/js/off-canvas.js"></script>
        <script src="../assets/js/hoverable-collapse.js"></script>
        <script src="../assets/js/misc.js"></script>
        <!-- endinject -->
        <!-- Custom js for this page -->
        <script src="../assets/js/file-upload.js"></script>
        <!-- End custom js for this page --> 

       
    </body>
    </html>