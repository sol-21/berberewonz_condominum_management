<?php session_start();
if(!isset($_SESSION["owner"]) ){
  header("location: ../index.php");
}?>
<?php include "./includes/user_header.php" ?>
  <?php include "./includes/connect.php" ?>
  
  <?php 
  
  
  $id = $_GET["update_id"];
  $db_query = "SELECT * FROM users WHERE id=$id";
  $db_result = mysqli_query($connection, $db_query);
  $row = mysqli_fetch_assoc($db_result);
  $db_username = $row["username"];
  $db_password = $row["password"];
  
  


   if(isset($_POST["update"])){
     $username = $_POST["username"];
     $password = $_POST["password"];
     
    
     $query = "UPDATE users SET id=$id, username='$username', password='$password' WHERE id=$id";
      
      $result = mysqli_query($connection, $query);
      header("location: update_personal_info.php?view_id=$id");
   }
  
  ?>
  
  <?php include "./includes/user_navbar.php" ?> 
  
  <?php include "./includes/user_sidebar.php" ?>

  <main class="mt-5 pt-3 ">
      <div class="container-fluid">
             <div class="row">
              <div class="col-md-12">
                
                  <h4 class="text-primary">Update Profile</h4>
                </div>
               </div>
              
                
                    <form action="" method="post">
                  
                    <div class="form-group col-md-6 mb-2">
                      <label for="username">User Name</label>
                      <input type="text" class="form-control" id="username" placeholder="Username" name="username" value="<?php echo "$db_username" ?>">
                    </div>
                    <div class="form-group col-md-6 mb-2">
                      <label for="password">Password</label>
                      <input type="text" class="form-control" id="password" placeholder="Password" name="password" value="<?php echo "$db_password" ?>">
                    </div>
                  
                  <button type="submit" class="btn btn-primary col-md-6 mt-3" name="update">Update Profile</button>
                </form>
         
      </div>
  </main>        

  <?php include "./includes/user_footer.php"?>