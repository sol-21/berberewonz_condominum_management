<?php
 session_start();
 session_destroy();
 header("location: index.php");
//  if(isset($_SESSION["admin"])){
//    unset($_SESSION["admin"]);
//    header("location: index.php");
//  }elseif(isset($_SESSION["owner"]) && isset($_SESSION["owner_pass"])){
//   unset($_SESSION["owner"]);
//   unset($_SESSION["owner_pass"]);
//   header("location: index.php");

//  }elseif(isset($_SESSION["service_provider"])) {
//    unset($_SESSION["service_provider"]);
//    header("location: index.php");
//  }
?> 