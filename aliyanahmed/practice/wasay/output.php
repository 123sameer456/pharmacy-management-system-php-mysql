<?php

$server = "localhost" ; 
    $username = "root" ;
    $password = "" ;
    $db = "practice";

    $conn = mysqli_connect($server , $username , $password , $db);


    $select = "SELECT * FROM registration" ;
    
    $result = mysqli_query($conn, $select );
  
?>
<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">

    <title>Hello, world!</title>
  </head>
  <body>
    <h1>Hello, world!</h1>

    <!-- Optional JavaScript; choose one of the two! -->

    <!-- Option 1: Bootstrap Bundle with Popper -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>

    <!-- Option 2: Separate Popper and Bootstrap JS -->
    <!--
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.2/dist/umd/popper.min.js" integrity="sha384-IQsoLXl5PILFhosVNubq5LC7Qb9DXgDA9i+tQ8Zj3iwWAwPtgFTxbJ8NT4GN1R8p" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.min.js" integrity="sha384-cVKIPhGWiC2Al4u+LWgxfKTRIcfu0JTxR+EQDz/bgldoEyl4H0zUF0QKbrJ0EcQF" crossorigin="anonymous"></script>
    -->


    <table class="table">
  <thead>
    <tr>
      <th scope="col">ID</th>
      <th scope="col">First Name</th>
      <th scope="col">Last Name</th>
      <th scope="col">Password</th>
      <th scope="col">Gender</th>
      <th scope="col">Email</th>
      <th scope="col">Phone Number</th>
      <th scope="col">City</th>
      <th scope="col">Join_Date</th>
      
    </tr>
  </thead>
  <tbody>
    <?php 
  if(mysqli_num_rows($result) > 0 ){
   
    while($row =  mysqli_fetch_assoc($result)){ ?>
        <tr>
        <td ><?php echo $row['id'] ; ?></td>
        <td> <?php echo $row['name'] ; ?></td>
        <td><?php echo $row['lastname'] ; ?></td>
        <td><?php echo $row['password'] ; ?></td>
        <td><?php echo $row['gender'] ; ?></td>
        <td><?php echo $row['email'] ; ?></td>
        <td><?php echo $row['phonenumber'] ; ?></td>
        <td><?php echo $row['city'] ; ?></td>
        <td><?php echo $row['createdat'] ; ?></td>
      </tr>
   
   <?php 
    }
    mysqli_close($conn);
  }
   ?>

   
  </tbody>
</table>
  </body>
</html>