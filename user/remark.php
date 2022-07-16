<?php session_start();
if(!isset($_SESSION["owner"]) ){
  header("location: ../index.php");
}?>
<?php include "./includes/user_header.php" ?>
  <?php include "./includes/connect.php" ?>
  
  <?php 
  
  
  $id = $_GET["remark_id"];
  $db_query = "SELECT * FROM maintenance WHERE id=$id";
  $db_result = mysqli_query($connection, $db_query);
  $row = mysqli_fetch_assoc($db_result);
  $maintenace_type = $row["maintenance_type"];
  $remark = $row["remark"];
  
  


   if(isset($_POST["remark_value"])){
     $maintenace_type = $_POST["maintenace_type"];
     $remark = $_POST["remark"];
     
    
     $query = "UPDATE maintenance SET id=$id, remark='$remark' WHERE id=$id";
      
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
                
                  <h4 class="text-primary">Remark Maintenace</h4>
                </div>
               </div>
              
                
                    <form action="" method="post">
                  
                    <div class="form-group col-md-6 mb-2">
                      <label for="maintenace_type">Maintenace type</label>
                      <input type="text" class="form-control" id="maintenace_type" name="maintenace_type" value="<?php echo "$maintenace_type" ?>">
                    </div>
                    <div class="form-group col-md-6 mb-2">
                      <label for="remark">Remark</label>
                        <select class="form-select" id="remark" name="remark">
                        <option selected>Select Remark</option>
                        <option value="done">Done</option>
                        <option value="on going">On Going</option>
                        </select>
                    </div>
                  
                  <input type="submit" class="btn btn-primary col-md-6 mt-3" name="remark_value" value="Remark Maintenace"></input>
                </form>
         
      </div>
  </main>        

  <?php include "./includes/user_footer.php"?>