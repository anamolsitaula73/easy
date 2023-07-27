
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


}
?>