
<?php


if($_SESSION["name"] && $_SESSION["email"] && $_SESSION["id"]) {
  
  $name=$_SESSION["name"];
  $email=$_SESSION["email"];
  // $password=$_SESSION["password"];
  $id=$_SESSION["id"];




  
  }?>



<!DOCTYPE html>
<html>
  
<head>
  
  
<style>
   
  </style>
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.4/jquery.min.js"></script>

<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
<link rel="stylesheet" href="assets/css/bik.css">
<script src="https://code.jquery.com/jquery-3.3.1.slim.min.js"
        integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo"
        crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js"
        integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1"
        crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js"
        integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM"
        crossorigin="anonymous"></script>
  <script type="text/javascript" src="assets/js/jquery.js">   </script>  
<script>

  function myFunction() {
  var x = document.getElementById("myTopnav");
  if (x.className === "topnav") {
    x.className += " responsive";
  } else {
    x.className = "topnav";s
  }
}




//load home
$(document).ready(function(){
  
  $.ajax({
      url:"home.php",
      type:"POST",
      success:function(data){
        $("#table").html(data);
        
        }
      });
    });
$(document).ready(function(){

  $("#homes").on("click",function(){

    // alert("hey");
    $.ajax({
      url:"home.php",
      type:"POST",
      success:function(data){
        $("#page").html(data);
        
        }
      });
  });
});



//load contact
$(document).ready(function(){
  $("#contact").on("click",function(){
    $.ajax({
      url:"contact.php",
      type:"POST",
      success:function(data){
        $("#page").html(data);
        }
      });
  });
});

//search result
$(document).ready(function(){
  $("#searchs").on("keyup",function(){
    var search_term=$(this).val();

     
    $.ajax({
      url:"search.php",
      type:"POST",
      data:{search:search_term},
      success:function(data){
        $("#page").html(data);
     
        }
      });
  });



});

//about user detail
$(document).ready(function(){
    $("#detail").on("click",function(){
     
            $.ajax({
            url:"userdetail.php",
            type:"POST",
            data:{id:<?php echo $id?>},
            success:function(data){
              $("#page").html(data);
          
              }
            });
         });
     

  
    });
  
  


var audioPlayer = document.getElementById('audioPlayer');
     var currentSongTitle = document.getElementById('currentSongTitle');
 
</script>


</head>
<body>
<div class="topnav" id="myTopnav">
<a  style="width:20%"></a>



  <a type="button" class="active" id="homes"  >Home</a>
 
  <a type="button" id="detail"> My Profile</a>
  <a type="button" id="contact">Contact Us</a>



  <a href="logout.php">logout</a>

 
  <div class="search-container">
  
      <input id="searchs"type="text" placeholder="Search.." name="search" autocomplete="off">
     
  </div>
</div>

<div class="userinfo" style="background-color:black;"><?php include('user.php');?>

  
</div>

      <div class="page" id="page">
           
     
  
            <table  id="table" width=100%;>
              <tr>
             
            

              </tr>

          </table >


</div>



   


       
 
                
      



 



</body>
</html>





