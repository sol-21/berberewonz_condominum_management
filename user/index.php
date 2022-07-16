<?php session_start();
if(!isset($_SESSION["owner"])){
  header("location: ../index.php");
}
?> 
<?php include "includes/user_header.php" ?>
<?php include "./includes/user_navbar.php" ?>
<?php include "./includes/user_sidebar.php"?>

<main class="mt-5 pt-3 ">
      <div class="container-fluid">
        <div class="row">
          <div class="col-md-12">
            <h4 class="text-primary">User Dashboard</h4>
          </div>
        </div>
        <div class="row">
          <div class="col-md-3 mb-3">
            <div class="card back-col text-white h-100">
              <div class="card-body py-5">maintenance</div>
              <div class="card-footer d-flex">
                View Maintenance
                
              </div>
            </div>
          </div>
          <div class="col-md-3 mb-3">
            <div class="card back-col text-white h-100">
              <div class="card-body py-5">conflict</div>
              <div class="card-footer d-flex">
              <a href="rep_conflict.php" class="nav-link text-light">View Conflicts</a>
                
              </div>
            </div>
          </div>
          <div class="col-md-3 mb-3">
            <div class="card back-col text-white h-100">
              <div class="card-body py-5">Personal information</div>
              <div class="card-footer d-flex">
              <a href="update_personal_info.php?viewid=$_SESSION['id']; class="nav-item nav-link">View Total Owners</a>
                
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
<?php include "./includes/user_footer.php" ?>