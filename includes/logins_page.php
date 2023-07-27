<?php
session_start();
include('config.php');


if(isset($_POST['loginbutton'])){
$email = $_POST['email'];


$password = $_POST['password'];
$password = trim($password);

$email=trim($email);
// $password1=md5($password);
// echo $email;
// echo $password;
// header("Location:../index.php");
if ($result = mysqli_query($con,"SELECT * FROM users WHERE email='$email' AND password='$password'")){
    $row_cnt = $result->num_rows;
    echo $row_cnt;

    $row = mysqli_fetch_array($result) ;
    if ($row_cnt > 0) {

        $_SESSION["name"] = $row["username"];
        $_SESSION["email"] = $row["email"];
        $_SESSION["id"]=$row["id"];
        $_SESSION["user"]=$row["usertype"];
        // echo"<script>aler('hey');</script>";

    
    
  

    


if($row["usertype"]=="user"){

    if($_SESSION["name"] && $_SESSION["email"] && $_SESSION["id"]) {

    header("Location:../index.php");
    }
 

}if($row["usertype"]=="admin"){
    if($_SESSION["name"] && $_SESSION["email"] && $_SESSION["id"]) {

        header("Location:../admin/index.php");
        }
     
    
}}
}

// else
// alert('Incorrect Email Or Password');
// header("Location:../logins.php");

}  

?>