 <?php session_start(); 
 if(!isset($_SESSION["admin"])){
   header("location: ../index.php");
 }
 ?>
 
 <?php include "./includes/header.php" ?>

 <?php include "./includes/connect.php" ?>
    <!-- navbar -->
    <?php include "./includes/navbar.php" ?> 
    <!-- navbar -->

    <!-- sidebar -->
    <?php include "./includes/sidebar.php" ?>
    <!-- sidebar -->

    <!-- main content -->
    <main class="mt-5 pt-3 ">
      <div class="container-fluid">
        <div class="row">
          <div class="col-md-12">
            <h4 class="text-primary">Admin Dashboard</h4>
          </div>
        </div>
        <div class="row">
          <div class="col-md-3 mb-3">
            <div class="card back-col text-white h-100">
            <?php 
             $user_query = "SELECT * FROM users";
             $user_result = mysqli_query($connection, $user_query);
             $total_users = mysqli_num_rows($user_result);
              ?>
              <div class="card-body py-5">Total Users
              <h1><?php echo $total_users ?></h1>
              </div>
              <div class="card-footer d-flex">
              <a href="viewuser.php" class="nav-item nav-link">View Total Users</a> 
                
              </div>
            </div>
          </div>
          <div class="col-md-3 mb-3">
            <div class="card back-col text-white h-100">
             <?php 
             $owner_query = "SELECT * FROM users WHERE role='owner' ";
             $owner_result = mysqli_query($connection, $owner_query);
             $total_owners = mysqli_num_rows($owner_result);
              ?>
              <div class="card-body py-5"> Total Owners
                <h1><?php echo $total_owners ?></h1>
              </div>
              
              <div class="card-footer d-flex">
              <a href="view_owner.php" class="nav-item nav-link">View Total Owners</a> 
                
              </div>
            </div>
          </div>
          <div class="col-md-3 mb-3">
            <div class="card back-col text-white h-100">
            <?php 
             $serpr_query = "SELECT * FROM users WHERE role='service provider'";
             $serpr_result = mysqli_query($connection, $serpr_query);
             $serpr_result = mysqli_num_rows($serpr_result);
              ?>
              <div class="card-body py-5">
                Service Providers
                <h1><?php echo $serpr_result ?></h1>
              </div>
              <div class="card-footer d-flex">
              <a href="./view_ser_providers.php" class="nav-item nav-link">View Total Service Providers</a>
                
              </div>
            </div>
          </div>
          <div class="col-md-3 mb-3">
            <div class="card back-col text-white h-100">
            <?php 
             $conflict_query = "SELECT * FROM users";
             $conflict_result = mysqli_query($connection, $conflict_query);
             $total_conflicts = mysqli_num_rows($conflict_result);
              ?>
              <div class="card-body py-5">
              Total conflict
              <h1><?php echo $total_conflicts ?></h1>
              </div>
              <div class="card-footer d-flex">
                <a href="view_conflict.php" class="nav-item nav-link">View  All Conflict</a> 
                
              </div>
            </div>
          </div>
          
        </div>
        <!-- second-row -->
        <div class="row">
          
          <div class="col-md-3 mb-3">
            <div class="card back-col text-white h-100">
            <?php 
             $maintenance_query = "SELECT * FROM users";
             $maintenance_result = mysqli_query($connection, $maintenance_query);
             $total_maintenance = mysqli_num_rows($maintenance_result);
              ?>
              <div class="card-body py-5">
              Total Maintenance
              <h1><?php echo $total_maintenance ?></h1>
              </div>
              <div class="card-footer d-flex">
                <ul class="navbar-nav">
                  <li class="nav-item">
              <a href="./view_maintenance.php" class="nav-link">View Maintenance</a>
               </li>
              </ul>
              </div>
            </div>
          </div>
          
        </div>

        <div class="row">
          <div class="col-md-12 mb-3">
            
          </div>
        </div>
      </div>
    </main>
    <!-- main content -->
    
    <!-- footer -->
    <?php include "./includes/footer.php" ?>
    <!-- footer -->
    
