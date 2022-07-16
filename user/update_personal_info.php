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
                  <h4 class="text-primary mt-3">Update My Profile</h4>
              </div>
            </div>
            <div class="row">
              <div class="col-md-12">
                <table class="table table-bordered">
                      <thead>
                        <tr  class="text-white" style='background: linear-gradient(300deg, #56ccf2, #2f80ed);'>
                          
                          <th scope="col">Username</th>
                          <th scope="col">password</th>
                          <th scope="col"></th>
                          
                        </tr>
                      </thead>
                      <tbody>
                        <?php
                        $profile = $_SESSION["owner"];
                        $profile_password = $_SESSION["owner_pass"];
                        
                        
                        $view_id = $_GET["view_id"];
                        $_SESSION["view_id"] = $view_id;
                        
                        $sel_query = "SELECT * FROM users WHERE  id=$view_id";
                        $sel_result = mysqli_query($connection, $sel_query);
                        $row = mysqli_fetch_assoc($sel_result);
                         $db_id = $row["id"];
                         $db_username = $row["username"];
                         $db_password = $row["password"];
                        
                         echo"
                         <tr>
                            
                            <td>$db_username</td>
                            <td>$db_password</td>
                            
                            <td class='text-white' style='background: linear-gradient(300deg, #56ccf2, #2f80ed);'><a href='update_form.php?update_id=$db_id' class='nav-link text-light'>Update</a></td>
                          
                         
                         </tr>
                         
                         ";

                        ?>
                        
                      </tbody>
               </table>
              </div>
            </div>
      </div>
  </main>

 
  <?php include "./includes/user_footer.php"?>