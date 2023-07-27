<!DOCTYPE html>
<html>
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
<body style="background-color:lightgray;">



<link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
<link rel="stylesheet" href="sideb.css">

<body>

<div class="w3-sidebar w3-bar-block w3-collapse w3-card w3-animate-left" style="width:200px;" id="mySidebar">
  <button class="w3-bar-item w3-button w3-large w3-hide-large" onclick="w3_close()">Close &times;</button>
  <a href="genre.php" class="w3-bar-item w3-button">Genre</a>
 
  <a href="home.php" class="w3-bar-item w3-button">Home</a>
  <a href="artist.php" class="w3-bar-item w3-button">Artist</a>
  <a href="song.php" class="w3-bar-item w3-button">Song</a>
  <a href="../logout.php" class="w3-bar-item w3-button">Logout</a>



</div>
<div width="40%" style="float:right;padding-right:500px;">
<center>
<form action="" method="POST" enctype="multipart/form-data" style="margin: right 100px;">
<p>Fillup to Upload Genre</p>
  <input type="text" id="" name="name" placeholder="name" required/>
  <input type="submit" value="submit" name="send" >
  
</form>
</center>
</div>

        
</body>
</html>
<?php
include('config.php');
?>
<?php
if(isset($_POST["send"]))
{
    $name = $_POST["name"];
    $name = mysqli_real_escape_string($con, $name);
    $query = "INSERT INTO genres (genre_name) values('$name')";
    $result=mysqli_query($con,$query)or die("query unsuccessful.");
    echo '<div style="float:right;  padding-top:100px;  "><b>Genre Added Succefully </b></div>';
    }?>