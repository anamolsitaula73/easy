<?php
include('config.php');

// include('footer.php');

?>
<head>
<link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
<link rel="stylesheet" href="sideb.css">
<style>
  th{
    text-align:left;
  }
</style>
</head>
<!-- <body> -->

<div class="w3-sidebar w3-bar-block w3-collapse w3-card w3-animate-left" style="width:200px;" id="mySidebar">
  <button class="w3-bar-item w3-button w3-large w3-hide-large" onclick="w3_close()">Close &times;</button>
  <a href="home.php" class="w3-bar-item w3-button">Home</a>
  <a href="artist.php" class="w3-bar-item w3-button">Artist</a>
  <a href="genre.php" class="w3-bar-item w3-button">Genre</a>
  <a href="song.php" class="w3-bar-item w3-button">Song</a>
  <a href="../logout.php" class="w3-bar-item w3-button">Logout</a>

 


  <!-- <a href="http://localhost/sidebars/contact.php#" class="w3-bar-item w3-button">Contact Us</a> -->
</div>
<center>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.4/jquery.min.js"></script>
 <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
  <!-- <div class="page">
  
        <table  id="table" width=100%;>
          <tr>
            <th>Title</th>
            <th>Album</th>
            <th>Duration</th>

          </tr>
    
     </table >

</div> -->







 

  <?php
// Connect to your MySQL database
// $servername = 'localhost';
// $username = 'root';
// $password = '';
// $dbname = 'easy-li';

// $con = new mysqli($servername, $username, $password, $dbname);
// if ($conn->connect_error) {
//   die('Connection failed: ' . $conn->connect_error);
// }

// Fetch songs from the database

$sql = 'SELECT * FROM songs,artists,genres where songs.artist=artists.artist_id AND songs.genre=genres.genre_id';
$result = $con->query($sql);
$output="";


if (mysqli_num_rows($result) > 0) {
 $output=' <table  width="70%" style="float:right;">
 <th></th>         
          <th><h1>Title<h1></th>
            <th><h1>Artist<h1></th>
            <th><h1>Genre<h1></th>
           

        
            

            

          </tr>
    
     ';
   while ($row = mysqli_fetch_assoc($result)) {
    // $songs[] = $row;
            $output .="<tr>
          
        <td></td>

           
            <td><h3>{$row['title']}</h3></td>
            <td><h3>{$row['artist_name']}</h3></td>
            <td><h3>{$row['genre_name']}</h3></td>

           <td> <a href='delete.php?id=$row[id]'><input type='button' value='Delete' style='background-color:red;'></a></td>
            
            </tr>";
   }
  $output .="</table>";
  mysqli_close($con);
  echo $output;
}
   else{
    echo "<h2>no record found</h2>";
   }
  

 ?>





  </center>