<!DOCTYPE html>
<html>
<head>
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="stylesheet" href="assets/css/login.css">
<style>
  form{
    height:400px;
    width:700px;
   
  }
</style>
</head>
<body>
  <center>
<br>
<br>
  <h2>Login Form</h2>
<div class="ex_container">

<form action="includes/logins_page.php" method="post">
  
<div class="imgcontainer" style="padding-bottom:150px;">
<img src="assets/photo/easy.png" alt="logo" class="logo" height="200px" width="200px">
  </div>

  <div class="container">
  
    <label for="uname"><b>Email</b></label>
    <input type="text" placeholder="Enter Email" name="email" id="email" required>

    <label for="psw"><b>Password</b></label>
    <input type="password" placeholder="Enter Password" name="password" required>
        
    <button type="submit" name="loginbutton" id="loginbutton">Login</button>
   
  </div>
<br><br>
  <div class="container" style="background-color:#f1f1f1">

    <button type="button" class="signupbtn" onclick="window.location.href='registers.php'">SignUp</button>


    
  </div>

</form>
</div>
</center>
</body>
</html>
