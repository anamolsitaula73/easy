<!DOCTYPE html>
<html>
<head>
<link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
<!-- <link rel="stylesheet" href="sideb.css"> -->
<style>
  th{
    text-align:left;
  }
</style>
</head>
<body style="background-color:lightgray;">
<div class="w3-sidebar w3-bar-block w3-collapse w3-card w3-animate-left" style="width:200px;" id="mySidebar">
  
  <a href="song.php" class="w3-bar-item w3-button">Song</a>
 
  <a href="home.php" class="w3-bar-item w3-button">Home</a>
  <a href="artist.php" class="w3-bar-item w3-button">Artist</a>
  <a href="genre.php" class="w3-bar-item w3-button">Genre</a>
 
  <a href="../logout.php" class="w3-bar-item w3-button">Logout</a>


</div>

<!-- <div width="40%" style="float:right;padding-right:500px;"> -->





<?php
include('config.php');
?>

<center>

 



<div style="float:right;margin-left:400px;">

<p>Click on the "Click Upload" button to upload an Song Title:</p>
<form action="" method="post" enctype="multipart/form-data">
  
        <tr>
        <td><label for="song_name">Song Name:</label></td>
        <td><input type="text" name="song_name" required></td>
</tr>
<tr>
    <select name="artist" required>
                <option>Artist</option>
                <?php 
                $query ="SELECT *FROM artists ORDER BY artist_name ASC";
                $result = $con->query($query);
                if($result->num_rows> 0){
                    $options= mysqli_fetch_all($result, MYSQLI_ASSOC);
                }
                foreach ($options as $option) {
                    
                ?>
                    <option value="<?php echo $option['artist_id']; ?>"><?php echo $option['artist_name']; ?> </option>
                    
                    <?php 
                    }
                ?>
                </select>   
                </tr>
    <select name="genre" required>
                <option>Genre</option>
                <?php 
                $query ="SELECT *FROM genres ORDER BY genre_name ASC";
                $result = $con->query($query);
                if($result->num_rows> 0){
                    $options= mysqli_fetch_all($result, MYSQLI_ASSOC);
                }
                foreach ($options as $option) {
                    
                ?>
                    <option value="<?php echo $option['genre_id']; ?>"><?php echo $option['genre_name']; ?> </option>
                    
                    <?php 
                    }
                ?>
                </select>
                </tr>
    <td>    <label for="song_file">Choose a Song:</label></td>
    <td>    <input type="file" name="song_file" id="song_file" required><br></td>

        <input type="submit" value="Upload Song">

    </form>
                </div>
</center>  
                </div> 
<?php
// Process the form submission
if ($_SERVER["REQUEST_METHOD"] === "POST") {
    $song_name = $_POST["song_name"];
    $artist = $_POST["artist"];
    $genre = $_POST["genre"];
    $name=basename($_FILES["song_file"]["name"]);
    // File upload handling
    $target_dir = "../assets/newmusic/";
    $target_file = $target_dir . basename($_FILES["song_file"]["name"]);
    $file_extension = strtolower(pathinfo($target_file, PATHINFO_EXTENSION));
    $allowed_extensions = array("mp3","ogg","mp4","wav","MPEG-4",".m4p",".m4a",".raw"); // Add more extensions if needed

    if (in_array($file_extension, $allowed_extensions)) {
        // Move the uploaded file to the desired location
        move_uploaded_file($_FILES["song_file"]["tmp_name"], $target_file);
        echo "<script>console.log('$name'); </script>";

        // Insert song information into the database
        $sql = "INSERT INTO songs(title, artist, genre, path) VALUES ('$song_name', '$artist',  '$genre',  'assets/newmusic/$name')";

        if ($con->query($sql) === TRUE) {
            echo '<divstyle="float:right;  padding-top:100px;  "><b>Song uploaded successfully.</b></div>';
        } else {
            echo "Error: " . $sql . "<br>" . $con->error;
        }
    } else {
        echo "Invalid file format. Allowed formats: " . implode(", ", $allowed_extensions);
    }
}

$con->close();
   
    ?>
    

    

