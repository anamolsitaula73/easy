<?php
include('includes/config.php');

// include('footer.php');

?>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.4/jquery.min.js"></script>
 <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>








 <h1></h1>

  <?php


$sql = 'SELECT * FROM songs,artists,genres where songs.artist=artists.artist_id AND songs.genre=genres.genre_id';
$result= $con->query($sql);
$output="";


if (mysqli_num_rows($result) > 0) {
 $output=' <table  width="100%">
          <tr>
          <th><h1>Play</h1></th>
            <th><h1>Title<h1></th>
            <th><h1>Artist <h1></th>
            <th><h1>Genre <h1></th>

          

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
         var x = document.getElementById("audioPlayer"); 
        
         var path=$(this).data("path");

         source.src=path;
//              if (x.paused)
//   x.play();
// else
//   x.pause();
                x.load();
                x.play(); 
              
         

    });
});
</script> 



 
