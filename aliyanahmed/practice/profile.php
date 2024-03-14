<?php

session_start();

?>
<!DOCTYPE html>
<html>
<head>
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
<style>
.card {
  box-shadow: 0 4px 8px 0 rgba(0, 0, 0, 0.2);
  max-width: 300px;
  margin: auto;
  text-align: center;
  font-family: arial;
}

.title {
  color: grey;
  font-size: 18px;
}

button {
  border: none;
  outline: 0;
  display: inline-block;
  padding: 8px;
  color: white;
  background-color: #000;
  text-align: center;
  cursor: pointer;
  width: 100%;
  font-size: 18px;
}

a {
  text-decoration: none;
  font-size: 22px;
  color: black;
}

button:hover, a:hover {
  opacity: 0.7;
}

img{
    height:200px;
    
}


</style>
</head>
<body>

<h2 style="text-align:center"> <?php  echo $row['id'] ; ?></h2>
<br>
<a href="logout.php">logout</a>
<br>
<div class="card">
  <img src="mohamad-khosravi-Uw3OfKz2J-0-unsplash.jpg" alt="John" style="width:100%">
  <h1 name=""><?php echo $_SESSION['username'] ; ?></h1>
  <p class="title"><?php echo $_SESSION['mail'] ; ?></p>
  <p><?php echo $_SESSION['pnumber'] ; ?></p>
  <p><?php echo $_SESSION['city'] ; ?></p>
  <div style="margin: 24px 0;">
   
    <a href="<?php  echo  $_SESSION['twitter'] ;   ?>"><i class="fa fa-twitter"></i></a>  
    <a href=""><i class="fa fa-linkedin"></i></a>  
   
  </div>
  <p><button>Contact</button></p>
</div> 

</body>
</html>

<?php
 $server = "localhost" ; 
 $username = "root" ;
 $password = "" ;
 $db = "practice";

 $conn = mysqli_connect($server , $username , $password , $db);




?>
