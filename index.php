<?php session_start();


?>
<?php  include "home_includes/home_header.php" ?>
<link rel="stylesheet" href="./home_includes/css/bootstrap.min.css">
<link rel="stylesheet" href="./home_includes/css/style.css">

<?php

include "home_includes/connect.php";

if(isset($_POST["login"])&& isset($_POST["role"])){
  $username = $_POST["username"];
  $password = $_POST["password"];
  $role = $_POST["role"];


  if(empty($username)){

  }elseif(empty($password)){

  }elseif(empty($role)){

  }else{
     $query = "SELECT * FROM users WHERE username='$username' AND password='$password' AND role='$role'"; 
     $result = mysqli_query($connection, $query);
     $row = mysqli_fetch_assoc($result);
     
     if(mysqli_num_rows($result) == 1){

          if($role == "admin"){
            $_SESSION["admin"] = $username;
            $_SESSION["admin_pass"] = $password;
            
            header("location: admin");
          }elseif($role == "owner"){
            $_SESSION["owner"] = $username;
            $_SESSION["owner_pass"] = $password;
            $_SESSION["id"] = $row["id"];
            header("location: user");

          }elseif($role == "service provider"){
            $_SESSION["service_provider"] = $username;
            $_SESSION["service_provider_pass"] = $password;
            $_SESSION["id"] = $row["id"];
            header("location: service_providers");

          }

     }else{

      $_SESSION["error"] = "!Username or Password error";
      echo "
      
      <script>
    window.onload = function() {
      
        history.replaceState('', '', 'index.php');
      }
      const message = document.querySelector('.error');
      message.style.display = 'block';

     </script>  
      ";
      

     }
  }
}

?>






<section  class="bg-img">
  <nav id="navs"  class="navbar navbar-expand-lg bg-transparent navbar-dark navbar-lg ">
    <div class="container px-2 py-1 border">
      <a class="navbar-brand fs-3"  href="#">
        <span class="h1" id="brand">Berbere Wonz Condominium</span>
      </a>
     


      
      <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#top-nav"
      >
        <span><i class=" fa fa-duotone fa-bars"></i></i></span>
      </button>
      <div class="collapse navbar-collapse" id="top-nav">
        <ul class="navbar-nav ms-auto"> 
            
            <li class="nav-item pl-4">
              <a href="emergency_contacts.php" class="nav-link text-white fs-2">Emergency</a>
            </li>
        </ul>

      </div>
    </div>

  </nav>

  <section class=" container d-flex align-items-center h-75 pt-5 justify-content-center">
    

   <form action='index.php' class="row" method="post">
     
       
       <div class="col-sm-6 mt-5 d-flex back-select flex-column p-3 border border-right-2 select-back">
         
       <h1 class=" text-center display-2 text-white">Wellcome</h1>
       <select class="form-select" multiple  name="role">
            <option value="">Select user type</option>
            <option value="admin">Admin</option>
            <hr class="dropdown-divider bg-dark" />
            <option value="owner">User</option>
            <option value="service provider">Service Provider</option>
      </select>
       
         </div>
       
       <div class="col-sm-6 bg-white p-3 mt-5 d-flex flex-column input-back">
         <h2 class=" text-center text-primary">Login</h2>
         <p class="text-danger text-center"><?php if(isset($_SESSION["error"])){
           echo $_SESSION["error"];
         } ?></p>
         
         
         <div class="form-group">

         

           <input type="text" class="form-control mb-3 bg-light form-control-lg" placeholder="Username" name="username">
          
         </div>
         <div class="form-group">

          

           <input type="text" class="form-control mb-3 bg-light form-control-lg" placeholder="password" name="password">
         </div>
         <div class="form-group">
           <input type="submit" name="login" class="form-control btn btn-primary mb-2" value="Login">
         </div>
         <p class="text-center"><a href="#" class="nav-link text-primary">forgot passsword?</a> </p>
       </div>
       

       
     
   </form>
</section>

</section>


<?php include "./home_includes/footer.php" ?>
