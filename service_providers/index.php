<?php session_start(); 
if(!isset($_SESSION["service_provider"])){
   header("location: ../index.php");
 }
 ?>
<?php include "./includes/servicepr_header.php" ?>
<?php include "./includes/servicepr_navbar.php" ?>
<?php include "./includes/servicepr_sidebar.php" ?>

<!-- main content -->
<main class="mt-5 pt-3 ">
      <div class="container-fluid">
        <div class="row">
          <div class="col-md-12">
            <h4 class="text-primary">Service Provider Dashboard</h4>
          </div>
        </div>
        <div class="row">
          <div class="col-md-3 mb-3">
            <div class="card back-col text-white h-100">
              <div class="card-body py-5">Maintenance</div>
              <div class="card-footer d-flex">
                View Maintenance
                
              </div>
            </div>
          </div>
          <div class="col-md-3 mb-3">
            <div class="card back-col text-white h-100">
              <div class="card-body py-5">Personal Information</div>
              <div class="card-footer d-flex">
                View Personal Information
                
              </div>
            </div>
          </div>
          
          
        </div>
        <!-- second-row -->
       

        <div class="row">
          <div class="col-md-12 mb-3">
            
          </div>
        </div>
      </div>
    </main>
<!-- main content -->
<?php include "./includes/servicepr_footer.php" ?>