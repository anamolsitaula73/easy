<!DOCTYPE html>
<html>
<title>Easy-Li</title>
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">


<body>






<?php
include('config.php');
// include('home_page.php');



?>
<?php

// session_destroy();

session_start();





if($_SESSION["name"] && $_SESSION["email"]&& $_SESSION["id"]) {
  
  include("home_page.php");
  $name=$_SESSION["name"];
  $email=$_SESSION["email"];
  // $password=$_SESSION["password"]; 
  }

  else
    header("Location:../logins.php");
 



?>
</div>
   
</div>

<script>
function w3_open() {
  document.getElementById("mySidebar").style.display = "block";
}

function w3_close() {
  document.getElementById("mySidebar").style.display = "none";
}
</script>
     
</body>
</html>
