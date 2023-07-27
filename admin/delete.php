<?php

include_once('config.php');

$id = $_GET['id'];
// echo"<script>alert('$id');</script>";
$result = mysqli_query($con, "DELETE FROM songs WHERE id=$id");
header("Location:home.php");
?>
	