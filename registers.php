   <?php
  



   ?>
<!DOCTYPE html>
<html>
    <head>

<link rel="stylesheet" href="assets/css/registers.css">

    </head>

 
<body>
 

    <center>
   <div class="ex_container">
    <div id="error"></div>
<form action="registers.php"  method="post" id="regform">
  <div class="container">
    <h1>Sign Up</h1>
    <p>Please fill in this form to create an account.</p>
    <hr>
    <label for="email"><b>Username</b></label>
    <input type="text" placeholder="Enter Username" id="username" name="username"  required  >
    

    <label for="email"><b>Email</b></label>
    <input type="email" placeholder="Enter Email" id="email" name="email" required>
   
    <label for="psw"><b>Password</b></label>
    <input type="password" placeholder="Enter Password" id="password"name="password" required >

 

  
    
    
      <button type="submit" name="registerbutton" id="registerbutton" class="signupbtn" >Sign Up</button>
    
    <br>
    <a href="logins.php">Already Have an Account.Click Here!</a>
  </div>

  <div id="error"  style='margin-left:800px;'><span style='color:red;'> </span></div>
</form>
</div>





</center>
</body>
</html>
<?php
session_start();
include('includes/config.php');







if(isset($_POST['registerbutton'])){
   

$username=$_POST['username'];
$email = $_POST['email'];
$password = $_POST['password'];



$result = mysqli_query($con,"SELECT * FROM users WHERE email='$email' ");
    $row_cnt = $result->num_rows;
    

    $row = mysqli_fetch_array($result) ;
    if ($row_cnt > 0) {
      echo"<script>alert('Email Already EXist');</script>";
       
      //  header("Location:../logins.php");
    }
    else{
   $results=mysqli_query($con,"INSERT INTO users(username,email,password,usertype) VALUES ('$username','$email','$password','user')");
   

     header("Location:logins.php");
    



}
}


?>