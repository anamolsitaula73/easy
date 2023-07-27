
<?php
$id=$_POST["id"];
include('includes/config.php');




$sql = "SELECT * FROM users where id=$id";
$result = $con->query($sql);

$row = mysqli_fetch_array($result);


  
   $id= $row['id'];
  $username=  $row['username'];
    $email=$row['email'];

// echo"<script>alert('$email');</script>";





?>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.4/jquery.min.js"></script>
<style>

body {font-family: Arial, Helvetica, sans-serif;}
* {box-sizing: border-box} */

.ex_container{
    width:60%;
  }

  input[type=text], input[type=password],input[type=email] {
    width: 100%;
    padding: 15px;
      display: inline-block;*/
    border: none; 
    background: #f1f1f1; */
  }
  input[type=text]:focus, input[type=password],input[type=email]:focus {
    background-color: #ddd;
    outline: none;
  }
hr {
  border: 1px solid #f1f1f1;
  margin-bottom: 25px;
}
/*  */
.signupbtn{
  
  color: white;
  padding: 14px 20px;
  margin: 8px 0;
  border: none;
  cursor: pointer;
  width: 100%;
  background-color:green;
}
/*  */
.signupbtn:hover {
  background-color: lightblue;
  color: black;
}

*/

.container {
  padding:100px;
}
 







</style>

  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
 <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.4/jquery.min.js"></script>



 
     <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js"
        integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1"
        crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js"
        integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM"
        crossorigin="anonymous"></script>  
  <script type="text/javascript" src="assets/js/jquery.js">   </script>   
  
 
 <center>
 



<form action="userdetail.php"  method="post" id="regform">
  <div class="container">
    <h1>Update Detail</h1>
    <p>Please fill in this form to update your Account.</p>
    <hr>
    <label for="username"><b>Username</b></label>
    <input type="text" placeholder="Enter Username" id="username" name="username" value="<?php echo $username;?>" required  >
 
    <label for="email"><b>Email</b></label>
    <input type="email" placeholder="Enter Email" id="email" name="email" value="<?php echo$email?>"required>
    
    <label for="psw"><b>Password</b></label>
    <input type="password" placeholder="Enter Password" id="password"name="password" required >

 <input type="hidden" name="id" value="<?php echo$id?>">

  
    
    
      <button type="submit" name="submit" id="registerbutton" class="signupbtn" >update</button>
    
  
  </div>
</form> 






</center>
 <?php 

if(isset($_POST['submit']))
{	
    $id = $_POST['id'];
    $name = $_POST['username'];

    $email = $_POST['email'];
    $psw=$_POST['password'];

echo'<script>alert("hrhrh");</script>';



	// update user data
	$result = mysqli_query($con,"UPDATE users SET username='$name'
    ,email='$email',password='$psw' WHERE id='$id'");

   header("Location:index.php");
}
?>  
