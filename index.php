<?php

// session_destroy();

session_start();





if($_SESSION["name"] && $_SESSION["email"]&& $_SESSION["id"]) {
  
  include("header.php");
  $name=$_SESSION["name"];
  $email=$_SESSION["email"];
  // $password=$_SESSION["password"]; 
  }

else
    header("Location:logins.php");
 



?>

 