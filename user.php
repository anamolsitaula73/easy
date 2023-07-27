<?php 

include('includes/config.php');
// $name=$_POST[""];

if($_SESSION["name"] && $_SESSION["email"]  && $_SESSION["id"]){
  // include("header.php");
  $name=$_SESSION["name"];
  $email=$_SESSION["email"];
  
  $id=$_SESSION["id"];

  $result = mysqli_query($con,"SELECT * FROM users WHERE id=$id");
    $row_cnt = $result->num_rows;
    // echo $row_cnt;

    $row = mysqli_fetch_array($result) ;
    if ($row_cnt > 0) {

        $_SESSION["name"] = $row["username"];
        $_SESSION["email"] = $row["email"];
        $_SESSION["id"]=$row["id"];
        $_SESSION["user"]=$row["usertype"];

    }
    
  

    
  }
?>
<style>
    .playing{ 
    /* position:fixed; */
     margin-top:-15px;
     
  
}
#image{
  height:300px;
  width:300px;
  margin-left:80px;
}

.song-info{
  margin-left:35px;
}

#user-info{
  margin-top:20px;
}
.button{
  background-color: #4CAF50;
}
#frm1{
  /* background-color:lightblue; */
  color:black;
margin-top:-10px;
padding-top:70px;
padding-bottom:70px;


}
</style>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.4/jquery.min.js"></script>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.4/jquery.min.js"></script>
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">

<script src="https://code.jquery.com/jquery-3.3.1.slim.min.js"
        integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo"
        crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js"
        integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1"
        crossorigin="anonymous"></script>
    <!-- <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js"
        integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM"
        crossorigin="anonymous"></script> -->
  <script type="text/javascript" src="assets/js/jquery">   </script>

<center>


<div class="playing " >

<div style="background-color:lightgray;color:rgba(11,149,212,255);padding-top:3px;padding-bottom:0.009px;margin-top:2.5px;"><h1 >Easy Listen</h1></div>
<img style="
  border-radius: 50%;"
src="assets/photo/easy.png" id="image"> 
<br>
<!-- <br> -->


</div>

<div id="user-info">
<form id="frm1">
<h1 style="color:white;" >Welcome to <b style="color:rgba(140,198,64,255);" >Easy-Li</b> <br><b style="color:rgba(95,203,236,255);" ><?php echo $name;?></b> </h1>
<h3 style="color:rgba(241,91,38,255);" >Email: <?php echo $email;?></h3
</form>
</div>




</div>
<div class="songplayer">
<div id="player" >
                          <h2> <span id="currentSongTitle"></span></h2>
                 
                          <audio id="audioPlayer" controls>
                          <source id="source" src="">
                          </audio>
                       
                        
                        </div>

</div>

</center>