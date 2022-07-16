<?php session_start();
if(!isset($_SESSION["owner"])){
  header("location: ../index.php");
}
?> 
<?php include "./includes/user_header.php" ?>
<?php include "./includes/connect.php" ?>
  
  <?php include "./includes/user_navbar.php" ?> 
  

  
  <?php include "./includes/user_sidebar.php" ?>
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
                          <th scope="col">Maintenance Type</th>
                          <th scope="col">Maintenance Description</th>
                          <th scope="col">Report Date</th>
                          <th scope="col">Remark</th>
                          
                        </tr>
                      </thead>
                      <tbody>
                        <?php
                        $profile = $_SESSION["owner"];
                        $sel_query = "SELECT * FROM maintenance Where username = '$profile'";
                        $sel_result = mysqli_query($connection, $sel_query);
                        while($row = mysqli_fetch_assoc($sel_result)){
                         $db_id = $row["id"];
                         $db_username = $row["username"];
                         $db_maintenance_type = $row["maintenance_type"];
                         $db_maintenance_desc = $row["maintenance_desc"];
                         $db_date = $row["report_date"];
                         
                         

                         echo"
                         <tr>
                            <td>$db_id</td>
                            <td>$db_username</td>
                            <td>$db_maintenance_type</td>
                            <td>$db_maintenance_desc</td>
                            <td>$db_date</td>
                            <td class='text-white' style='background: linear-gradient(300deg, #56ccf2, #2f80ed);'><a href='remark.php?remark_id=$db_id' class='nav-link text-light'>Remark</a></td>
                         
                         </tr>
                         
                         ";

                        }?>
                        
                      </tbody>
               </table>
              </div>
            </div>
      </div>
  </main>

 
  <?php include "./includes/user_footer.php"?>