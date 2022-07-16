<?php
 include "./includes/connect.php";
 if(isset($_GET["delete_id"])){
   $id = $_GET["delete_id"];
   $query = "DELETE FROM users WHERE id = $id";

   $result = mysqli_query($connection, $query);
   header("location: viewuser.php");

 }

?>