<?php
 if(isset($_POST['submit'])){
    $task=$_POST['tasks'];
    $result=[$task];
    




 }
?>

<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
 <?php

 if(isset($_POST['submit'])){
  $todo = $_POST['tasks'];
  $lis = $_POST['listt'];
  $f=   $lis .$todo ;
  
 }
 ?>   
<div class="contaner">
<form action="" method="post">
<label for=""> Todays tasks</label>
<br><input type="text" value="" name="tasks">
<input  type="submit" name="submit"  value="add"> 
<br>


 <textarea name="listt" id="" cols="20" rows="5" readonly>

<?php if(empty($f)){echo " ";}else{

  echo  $f   ;} ?>
  
</textarea>
 
</form>
</div>
</body>
</html>