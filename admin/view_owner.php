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
                  <h4 class="text-primary mt-3">View Users information</h4>
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
                          <th scope="col">Sex</th> 
                          <th scope="col"></th> 
                          <th scope="col"></th> 
                        </tr>
                      </thead>
                      <tbody>
                        <?php
                        $sel_query = "SELECT * FROM users WHERE role='owner' ";
                        $sel_result = mysqli_query($connection, $sel_query);
                        while($row = mysqli_fetch_assoc($sel_result)){
                         $db_id = $row["id"];
                         $db_username = $row["username"];
                         $db_password = $row["password"];
                         $db_role = $row["role"];
                         $db_block = $row["block"];    
                         $db_house_no = $row["house_no"];
                         $db_bed_rooms = $row["bed_rooms"];
                         $db_phone_no = $row["phone_no"];
                         $db_sex = $row["sex"];

                         echo"
                         <tr>
                            <td>$db_id</td>
                            <td>$db_username</td>
                            <td>$db_password</td>
                            <td>$db_role</td>
                            <td>$db_block</td>
                            <td>$db_house_no</td>
                            <td>$db_bed_rooms</td>
                            <td>$db_phone_no</td>
                            <td>$db_sex</td>
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