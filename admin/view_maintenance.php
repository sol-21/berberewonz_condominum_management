<?php session_start(); 
 if(!isset($_SESSION["admin"])){
   header("location: ../index.php");
 }
 ?>
<?php include "./includes/header.php" ?>
<?php include "./includes/connect.php" ?>
  
  <?php include "./includes/navbar.php" ?> 
  

  
  <?php include "./includes/sidebar.php" ?>
  <main class="mt-5 pt-3 ">
      <div class="container-fluid">
             <div class="row mb-3">
              <div class="col-md-12">
                  <h4 class="text-primary mt-3">View Maintenance Information</h4>
              </div>
            </div>
            <div class="row">
              <div class="col-md-12">
                <table class="table table-bordered">
                      <thead>
                        <tr  class="text-white" style='background: linear-gradient(300deg, #56ccf2, #2f80ed);'>
                          <th scope="col">Id</th>
                          <th scope="col">Username</th>
                          <th scope="col">password</th>
                          <th scope="col">Role</th>
                          <th scope="col">Block</th>
                          <th scope="col">House no.</th>
                          <th scope="col">Bed Rooms</th>
                          <th scope="col">Phone no.</th>
                          
                        </tr>
                      </thead>
                      <tbody>
                        <?php
                        $sel_query = "SELECT * FROM maintenance";
                        $sel_result = mysqli_query($connection, $sel_query);
                        while($row = mysqli_fetch_assoc($sel_result)){
                         $db_id = $row["id"];
                         $username = $row["username"];
                         $maintenance_type = $row["maintenance_type"];
                         $maintenance_desc = $row["maintenance_desc"];
                         $block = $row["block"];    
                         $house_no = $row["house_no"];
                         $phone_no = $row["phone_no"];
                        
                         echo"
                         <tr>
                            <td>$db_id</td>
                            <td>$username</td>
                            <td>$maintenance_type</td>
                            <td>$maintenance_desc</td>
                            <td>$house_no</td>
                            <td>$block</td>
                            <td>$house_no</td>
                            <td>$phone_no</td>
                        

                         </tr>
                         
                         ";

                        }?>
                        
                      </tbody>
               </table>
              </div>
            </div>
      </div>
  </main>

 
  <?php include "./includes/footer.php"?>