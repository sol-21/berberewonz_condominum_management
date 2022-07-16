<?php session_start(); 
 if(!isset($_SESSION["admin"])){
   header("location: ../index.php");
 }
 ?>
  <?php include "./includes/header.php" ?>
  <?php include "./includes/connect.php" ?>
  
  <?php   
   if(isset($_POST["add-user"])){
     $username = $_POST["username"];
     $password = $_POST["password"];
     $role = $_POST["role"];
     $block = $_POST["block"];
     $house_no = $_POST["house-no"];
     $bed_rooms = $_POST["bed-rooms"];
     $phone_no = $_POST["phone-no"];
     $sex = $_POST["gender"];
     $query = "INSERT INTO users(username,password,role,block,house_no,bed_rooms,phone_no,sex) 
           VALUES('$username','$password','$role','$block',$house_no,$bed_rooms,'$phone_no','$sex')";
      
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
                  <h4 class="text-primary">Add Users</h4>
                </div>
               </div>
              
                
                    <form action="adduser.php" method="post">
                  
                    <div class="form-group col-md-6 mb-2">
                      <label for="username">User Name</label>
                      <input type="text" class="form-control" id="username" placeholder="Username" name="username">
                    </div>
                    <div class="form-group col-md-6 mb-2">
                      <label for="password">Password</label>
                      <input type="password" class="form-control" id="password" placeholder="Password" name="password">
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
                      <label for="total-rooms">Bed rooms</label>
                      <input type="number" class="form-control" id="total-rooms" placeholder="4" name="bed-rooms">
                    </div>
                    <div class="form-group col-md-6 mb-2">
                      <label for="role">Role</label>
                        <select class="form-select" id="role" name="role">
                        <option selected>Select Role</option>
                        <option value="owner">Owner</option>
                        <option value="service provider">Service Provider</option>
                        </select>
                    </div>
                    <div class="form-group col-md-6 mb-2">
                      <label for="phone">Phone No.</label>
                      <input type="text" class="form-control" id="phone" name="phone-no">
                    </div>
                    <div class="form-group">
                      <div>Sex</div>
                      <input class="form-check-input " type="radio" name="gender" id="male" value="male">
                      <label class="form-check-label " for="male">
                        Male
                      </label>
                      <input class="form-check-input ms-4" type="radio" name="gender" id="female" value="female">
                      <label class="form-check-label" for="female">
                        Female
                      </label>
                    </div>
                    
                  <button type="submit" class="btn btn-primary col-md-6 mt-3" name="add-user">Add User</button>
                </form>
         
      </div>
  </main>        

  <?php include "./includes/footer.php"?>