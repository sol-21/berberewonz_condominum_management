<?php session_start();
if(!isset($_SESSION["owner"])){
  header("location: ../index.php");
}
?> 
<?php include "./includes/user_header.php" ?>
  <?php include "./includes/connect.php" ?>
  
  <?php   
   if(isset($_POST["report-conflict"])){
     $username = $_POST["username"];
     $conflict_desc= $_POST["conflict_desc"];
     $date = $_POST["report-date"];
     $block = $_POST["block"];
     $house_no = $_POST["house-no"];
     $phone_no = $_POST["phone-no"];
     
     $query = "INSERT INTO conflicts(username,conflict_desc,report_date,block,house_no,phone_no) 
           VALUES('$username','$conflict_desc','$date','$block',$house_no,'$phone_no')";
      
      $result = mysqli_query($connection, $query);
      
   }
  
  ?>
  
  <?php include "./includes/user_navbar.php" ?> 
  
  <?php include "./includes/user_sidebar.php" ?>

  <main class="mt-5 pt-3 ">
      <div class="container-fluid">
             <div class="row">
              <div class="col-md-12">
                  <h4 class="text-primary">Report Conflict</h4>
                </div>
               </div>
              
                
                    <form action="report_conflict.php" method="post">
                  
                    <div class="form-group col-md-6 mb-2">
                      <label for="username">User Name</label>
                      <input type="text" class="form-control" id="username" placeholder="Username" name="username">
                    </div>
                    

                    <div class="form-group col-md-6 mb-2">
                      <label for="conflict" class="mb-2">Conflict Description</label>
                      <textarea name="conflict_desc" id="maintenance" cols="30" rows="5" class="form-control" placeholder="write the conflict here"></textarea>
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
                    
                  <button type="submit" class="btn btn-primary col-md-6 mt-3" name="report-conflict">Report Conflict</button>
                </form>
         
      </div>
  </main>        

  <?php include "./includes/user_footer.php"?>