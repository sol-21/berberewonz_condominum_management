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
                  <h4 class="text-primary mt-3">View Conflict Information</h4>
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
                          <th scope="col"></th> 
                          <th scope="col"></th> 
                        </tr>
                      </thead>
                      <tbody>
                        <?php
                        $sel_query = "SELECT * FROM conflicts";
                        $sel_result = mysqli_query($connection, $sel_query);
                        while($row = mysqli_fetch_assoc($sel_result)){
                         $db_id = $row["id"];
                         $username = $row["username"];
                         $maintenance_desc = $row["conflict_desc"];
                         $db_date = $row["report_date"];
                         $block = $row["block"];    
                         $house_no = $row["house_no"];
                         $phone_no = $row["phone_no"];
                        
                         echo"
                         <tr>
                            <td>$db_id</td>
                            <td>$username</td>
                            <td>$maintenance_desc</td>
                            <td>$db_date</td>
                            <td>$house_no</td>
                            <td>$block</td>
                            <td>$house_no</td>
                            <td>$phone_no</td>
                            <td class='text-white' style='background: linear-gradient(300deg, #56ccf2, #2f80ed);'><a href='update.php?update_id=$db_id' class='nav-link text-light'>Update</a></td>
                            <td class='text-white' style='background: linear-gradient(300deg, #56ccf2, #2f80ed);'><a href='delete.php?delete_id=$db_id' class='nav-link text-light'>Delete</a></td>

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