<?php
if($level == 'System Admin'){

  ?>
 <!-- partial:../../partials/_sidebar.html -->
        <nav class="sidebar sidebar-offcanvas" id="sidebar">
          <ul class="nav" id="totop">
            <li class="nav-item nav-profile">
              <a href="#" class="nav-link">
                <div class="nav-profile-image">
                  <img src="assets/images/faces-clipart/pic-4.png" alt="profile">
                  <span class="login-status online"></span>
                  <!--change to offline or busy as needed-->
                </div>
               
                <div class="nav-profile-text d-flex flex-column">
                  <span class="font-weight-bold mb-2"><?php echo $row['firstName']. ". " . $row['lastName'];?></span>
                  <span class="text-secondary text-small"><?php echo $row['accessLevel'];?></span>
                </div>
                <i class="mdi mdi-bookmark-check text-success nav-profile-badge"></i>
              </a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="dashboard.php">
                <span class="menu-title">Dashboard</span>
                
               
                      <i class="mdi mdi-home menu-icon"></i>
                   
              </a>
            </li>
            
             <li class="nav-item">
              <a class="nav-link" data-toggle="collapse" href="#employee" aria-expanded="false" aria-controls="employee">
                <span class="menu-title">Employees</span>
                <i class="menu-arrow"></i>
                <i class="mdi mdi-contacts menu-icon"></i>
              </a>
              <div class="collapse" id="employee">
                <ul class="nav flex-column sub-menu">
                  <li class="nav-item"> <a class="nav-link" href="register.php">Add Employees</a></li>
                  <li class="nav-item"> <a class="nav-link" href="employee.php">Manage Employees</a></li>
                </ul>
              </div>
            </li>
            <li class="nav-item">
              <a class="nav-link" data-toggle="collapse" href="#loan" aria-expanded="false" aria-controls="loan">
                <span class="menu-title">Loans & Advances</span>
                <i class="menu-arrow"></i>
                <i class="mdi mdi-book-minus menu-icon"></i>
              </a>
              <div class="collapse" id="loan">
                <ul class="nav flex-column sub-menu">
                  <li class="nav-item"> <a class="nav-link" href="view_loans.php"> View Loans </a></li>
                  <li class="nav-item"> <a class="nav-link" href="soon.php"> Manage Loans </a></li>
                </ul>
              </div>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="transaction.php">
                <span class="menu-title">Monthly Transactions</span>
                <i class="mdi mdi-cash-multiple menu-icon"></i>
              </a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="payroll.php">
                <span class="menu-title">Compute PayRoll</span>
                <i class="mdi mdi-book-open menu-icon"></i>
              </a>
            </li>
            <li class="nav-item">
              <a class="nav-link" data-toggle="collapse" href="#report" aria-expanded="false" aria-controls="report">
                <span class="menu-title">Reports</span>
                <i class="menu-arrow"></i>
                <i class="mdi mdi-file menu-icon"></i>
              </a>
              <div class="collapse" id="report">
                <ul class="nav flex-column sub-menu">
                  <li class="nav-item"> <a class="nav-link" href="soon.php"> Monthly Report </a></li>
                  <li class="nav-item"> <a class="nav-link" href="soon.php"> Allowances </a></li>
                  <li class="nav-item"> <a class="nav-link" href="soon.php"> NSSF </a></li>
                  <li class="nav-item"> <a class="nav-link" href="soon.php"> Annual Report </a></li>
                </ul>
              </div>
            </li>

            <li class="nav-item">
             
                <span class="menu-title"></span>
               
              
            </li>


            <li class="nav-item">
              <a class="nav-link" href="soon.php">
                <span class="menu-title">Support</span>
               
              </a>
            </li>
             
            
           
            
           
            
          
          </ul>
        </nav>
        <?php
      }else{
        ?>


        <!-- partial:../../partials/_sidebar.html -->
        <nav class="sidebar sidebar-offcanvas" id="sidebar">
          <ul class="nav" id="totop">
            <li class="nav-item nav-profile">
              <a href="#" class="nav-link">
                <div class="nav-profile-image">
                  <img src="assets/images/faces-clipart/pic-4.png" alt="profile">
                  <span class="login-status online"></span>
                  <!--change to offline or busy as needed-->
                </div>
                <div class="nav-profile-text d-flex flex-column">
                  <span class="font-weight-bold mb-2"><?php echo $row['firstName']. ". " . $row['lastName'];?></span>
                  <span class="text-secondary text-small"><?php echo $row['accessLevel'];?></span>
                </div>
                <i class="mdi mdi-bookmark-check text-success nav-profile-badge"></i>
              </a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="dashboard.php">
                <span class="menu-title">Dashboard</span>
                <i class="mdi mdi-home menu-icon"></i>
              </a>
            </li>
            
             <li class="nav-item">
              <a class="nav-link" data-toggle="collapse" href="#employee" aria-expanded="false" aria-controls="employee">
                <span class="menu-title">Employees</span>
                <i class="menu-arrow"></i>
                <i class="mdi mdi-contacts menu-icon"></i>
              </a>
              <div class="collapse" id="employee">
                <ul class="nav flex-column sub-menu">
                  <!-- <li class="nav-item"> <a class="nav-link" href="register.php">Add Employees</a></li> -->
                  <li class="nav-item"> <a class="nav-link" href="employee.php">Manage Employees</a></li>
                </ul>
              </div>
            </li>
            
            <li class="nav-item">
              <a class="nav-link" href="transaction.php">
                <span class="menu-title">Monthly Transactions</span>
                <i class="mdi mdi-cash-multiple menu-icon"></i>
              </a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="payroll.php">
                <span class="menu-title">Compute PayRoll</span>
                <i class="mdi mdi-book-open menu-icon"></i>
              </a>
            </li>
            <li class="nav-item">
              <a class="nav-link" data-toggle="collapse" href="#report" aria-expanded="false" aria-controls="report">
                <span class="menu-title">Reports</span>
                <i class="menu-arrow"></i>
                <i class="mdi mdi-file menu-icon"></i>
              </a>
              <div class="collapse" id="report">
                <ul class="nav flex-column sub-menu">
                  <li class="nav-item"> <a class="nav-link" href="soon.php"> Monthly Report </a></li>
                  <li class="nav-item"> <a class="nav-link" href="soon.php"> Allowances </a></li>
                  <li class="nav-item"> <a class="nav-link" href="soon.php"> NSSF </a></li>
                  <li class="nav-item"> <a class="nav-link" href="soon.php"> Annual Report </a></li>
                </ul>
              </div>
            </li>

            <li class="nav-item">
             
                <span class="menu-title"></span>
               
              
            </li>


            <li class="nav-item">
              <a class="nav-link" href="soon.php">
                <span class="menu-title">Support</span>
               
              </a>
            </li>
             
            
           
            
           
            
          
          </ul>
        </nav>

        <?php
      }
