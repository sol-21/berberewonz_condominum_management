<?php session_start();
if(!isset($_SESSION["owner"])){
  header("location: ../index.php");
}
?> 
<?php include "./includes/user_header.php" ?>
  <?php include "./includes/connect.php" ?>
  
  <?php   
   if(isset($_POST["report-maintenance"])){
     $username = $_POST["username"];
     $maintenance_type = $_POST["maintenance-type"];
     $maintenance_desc= $_POST["maintenance_desc"];
     $date = $_POST["report-date"];
     $block = $_POST["block"];
     $house_no = $_POST["house-no"];
     $phone_no = $_POST["phone-no"];
     
     $query = "INSERT INTO maintenance(username,maintenance_type,maintenance_desc,report_date,block,house_no,phone_no) 
           VALUES('$username','$maintenance_type','$maintenance_desc','$date','$block',$house_no,'$phone_no')";
       $result = mysqli_query($connection, $query);
       header("location: view_maintenance.php");
      
   }
  
  ?>
  
  <?php include "./includes/user_navbar.php" ?> 
  
  <?php include "./includes/user_sidebar.php" ?>

  <main class="mt-5 pt-3 ">
      <div class="container-fluid">
             <div class="row">
              <div class="col-md-12">
                  <h4 class="text-primary">Report Maintenance</h4>
                </div>
               </div>
              
                
                    <form action="report_maintenance.php" method="post">
                  
                    <div class="form-group col-md-6 mb-2">
                      <label for="username">User Name</label>
                      <input type="text" class="form-control" id="username" placeholder="Username" name="username">
                    </div>
                    <div class="form-group col-md-6 mb-2">
                      <label for="maintenance-type">Maintenance type</label>
                        <select class="form-select" id="maintenance-type" name="maintenance-type">
                        <option selected>Select type</option>
                        <option value="electrical related">Electrical Related</option>
                        <option value="water pipes">water pipes</option>
                        <option value="others">others</option>
                        </select>
                    </div>

                    <div class="form-group col-md-6 mb-2">
                      <label for="conflict" class="mb-2">Maintenance Description</label>
                      <textarea name="maintenance_desc" id="maintenance" cols="30" rows="5" class="form-control" placeholder="write the conflict here"></textarea>
                    </div>
                    <div class="form-group col-md-6 mb-2">
                      <label for="report-date">Report Date</label>
                      <input type="date" class="form-control" id="report-date" placeholder="report-date" name="report-date">
                    </div>

                  
                  <div class="form-group col-md-6 mb-2">
                    <label for="block">Block</label>
                    <input type="text" class="form-control" id="block" placeholder="B-1" name="block">
                  </div>
                  <div class="form-group col-md-6 mb-2">
                    <label for="house-no">Hose no.</label>
                    <input type="number" class="form-control" id="house-no" placeholder="113" name="house-no">
                  </div>
                  
                    <div class="form-group col-md-6 mb-2">
                      <label for="phone">Phone No.</label>
                      <input type="text" class="form-control" id="phone" name="phone-no">
                    </div>
                    
                  <button type="submit" class="btn btn-primary col-md-6 mt-3" name="report-maintenance">Report Maintenance</button>
                </form>
         
      </div>
  </main>        

  <?php include "./includes/user_footer.php"?>