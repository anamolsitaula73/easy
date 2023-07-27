



<?php
$search_value=$_POST["search"];
include('includes/config.php');

// include('footer.php');

?>
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

$sql = "SELECT * FROM songs,artists,genres where songs.artist=artists.artist_id AND songs.genre=genres.genre_id AND songs.title LIKE '$search_value%'";
$result = $con->query($sql);
$output="";


if (mysqli_num_rows($result) > 0) {
 $output=' <table  width="100%">
          <tr>
          <th><h1>Play</h1></th>
            <th><h1>Title<h1></th>
            <th><h1>Artist <h1></th>
            <th><h1>Genre<h1></th>

         

          </tr>
    
     ';
   while ($row = mysqli_fetch_assoc($result)) {
    // $songs[] = $row;
            $output .="<tr>
          
            <td><input type='button' class='play-button' value='play' data-path='{$row['path']}' onclick='toggleRotation();'></td>

            <td><h3>{$row['title']}</h3></td>
            <td><h3>{$row['artist_name']}</h3></td>
            <td><h3>{$row['genre_name']}</h3></td>

            
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

  <script>

      $(document).ready(function(){
            $(document).on("click",".play-button",function(){
               var path=$(this).data("path");
               var x = document.getElementById("audioPlayer"); 
               source.src=path;
                      x.load();
                      x.play(); 
                    



          });
    });
 </script> 





  

