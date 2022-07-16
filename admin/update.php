<?php session_start(); 
 if(!isset($_SESSION["admin"])){
   header("location: ../index.php");
 }?>
<?php include "./includes/header.php" ?>
  <?php include "./includes/connect.php" ?>
  
  <?php 
  
  $id = $_GET["update_id"];
  $db_query = "SELECT * FROM users WHERE id= $id";
  $db_result = mysqli_query($connection, $db_query);
  $row = mysqli_fetch_assoc($db_result);
  $db_username = $row["username"];
  $db_password = $row["password"];
  $db_role = $row["role"];
  $db_block = $row["block"];
  $db_house_no = $row["house_no"];
  $db_bed_rooms = $row["bed_rooms"];
  $db_phone_no = $row["phone_no"];


   if(isset($_POST["update"])){
     $username = $_POST["username"];
     $password = $_POST["password"];
     $role = $_POST["role"];
     $block = $_POST["block"];
     $house_no = $_POST["house-no"];
     $bed_rooms = $_POST["bed-rooms"];
     $phone_no = $_POST["phone-no"];
    
     $query = "UPDATE users SET id=$id, username='$username', password='$password',block='$block',house_no='$house_no',bed_rooms='$bed_rooms',phone_no='$phone_no' WHERE id=$id";
      
      $result = mysqli_query($connection, $query);
      header("location: viewuser.php");
   }
  
  ?>
  
  <?php include "./includes/navbar.php" ?> 
  
  <?php include "./includes/sidebar.php" ?>

  <main class="mt-5 pt-3 ">
      <div class="container-fluid">
             <div class="row">
              <div class="col-md-12">
                
                  <h4 class="text-primary">Update Users</h4>
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
                  
                  <div class="form-group col-md-6 mb-2">
                    <label for="block">Block</label>
                    <input type="text" class="form-control" id="block" placeholder="B-1" name="block" value="<?php echo "$db_block" ?>">
                  </div>
                  <div class="form-group col-md-6 mb-2">
                    <label for="house-no">Hose no.</label>
                    <input type="number" class="form-control" id="house-no" placeholder="113" name="house-no">
                  </div>
                  
                    <div class="form-group col-md-6 mb-2">
                      <label for="total-rooms">Bed rooms</label>
                      <input type="number" class="form-control" id="total-rooms" placeholder="4" name="bed-rooms" value="<?php echo "$db_bed_rooms" ?>">
                    </div>
                    <div class="form-group col-md-6 mb-2">
                      <label for="role">Role</label>
                        <select class="form-select" id="role" name="role">
                        <option selected><?php echo "$db_role" ?></option>
                        <option value="owner">Owner</option>
                        <option value="service_provider">Service Provider</option>
                        </select>
                    </div>
                    <div class="form-group col-md-6 mb-2">
                      <label for="phone">Phone No.</label>
                      <input type="text" class="form-control" id="phone" name="phone-no" value="<?php echo "$db_phone_no" ?>">
                    </div>
                
                    
                  <button type="submit" class="btn btn-primary col-md-6 mt-3" name="update">Update User</button>
                </form>
         
      </div>
  </main>        

  <?php include "./includes/footer.php"?>