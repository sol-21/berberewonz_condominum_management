<?php include "./includes/header.php" ?>
  <!-- navbar -->
  <?php include "./includes/navbar.php" ?> 
  <!-- navbar -->

  <!-- sidebar -->
  <?php include "./includes/sidebar.php" ?>

  <main class="mt-5 pt-3 ">
      <div class="container-fluid">
             <div class="row">
              <div class="col-md-12">
                  <h4 class="text-primary">Add Users</h4>
                </div>
               </div>
              
                
                    <form>
                  
                    <div class="form-group col-md-6 mb-2">
                      <label for="username">User Name</label>
                      <input type="email" class="form-control" id="username" placeholder="Username">
                    </div>
                    <div class="form-group col-md-6 mb-2">
                      <label for="password">Password</label>
                      <input type="password" class="form-control" id="password" placeholder="Password">
                    </div>
                  
                  <div class="form-group col-md-6 mb-2">
                    <label for="block">Block</label>
                    <input type="text" class="form-control" id="block" placeholder="B-1">
                  </div>
                  <div class="form-group col-md-6 mb-2">
                    <label for="house-no">Hose no.</label>
                    <input type="text" class="form-control" id="house-no" placeholder="113">
                  </div>
                  
                    <div class="form-group col-md-6 mb-2">
                      <label for="total-rooms">total rooms</label>
                      <input type="text" class="form-control" id="total-rooms" placeholder="4">
                    </div>
                    <div class="form-group col-md-6 mb-2">
                      <label for="role">Role</label>
                        <select class="form-select" id="role">
                        <option selected>Select Role</option>
                        <option value="1">Owner</option>
                        <option value="2">Service Provider</option>
                        </select>
                    </div>
                    <div class="form-group col-md-6 mb-2">
                      <label for="phone">Phonne No.</label>
                      <input type="text" class="form-control" id="phone">
                    </div>
                    <div class="form-group">
                      <div>Sex</div>
                      <input class="form-check-input " type="radio" name="gender" id="male">
                      <label class="form-check-label " for="male">
                        Male
                      </label>
                      <input class="form-check-input ms-4" type="radio" name="gender" id="female">
                      <label class="form-check-label" for="female">
                        Female
                      </label>
                    </div>
                    
                  
                  
                  <button type="submit" class="btn btn-primary col-md-6 mt-3">ADD</button>
                </form>
         
      </div>
  </main>        

  <?php include "./includes/footer.php"?>