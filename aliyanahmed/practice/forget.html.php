
<?php

if(isset($_POST['submit'])){
    $email = $_POST['email'];
    $phnumber = $_POST['phnumber'];
    $pass = $_POST['password'];
   

    if(empty($_POST['email']) OR empty($_POST['password']) 
    OR empty($_POST['phnumber'] )){
        echo "<script>alert('all fileds must be filled');</script>";
      } else{
  
       
      $server = "localhost" ; 
      $username = "root" ;
      $password = "" ;
      $db = "practice";
      $conn = mysqli_connect($server , $username , $password , $db);
      $select = "SELECT * FROM registration WHERE email = '$email' AND phonenumber = '$phnumber' " ;
  
      $result = mysqli_query($conn , $select);

      if(mysqli_num_rows($result) > 0){
        $row = mysqli_fetch_assoc($result);
       $update = "UPDATE registration
       SET password = '$pass'
       WHERE email  = '$email' AND phonenumber = '$phnumber' " ;

       if($upd_result = mysqli_query($conn , $update)){
        echo "<script>window.location.replace('login.php');</script>";

       }

      }

     
    }
    mysqli_close($conn);
}
    ?>



<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.4.1/dist/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">

    <title>Hello, world!</title>
  </head>
  <style>
    body{ 
        width : 50% ;
margin-left : 30% ;
margin-top : 3% ;
    }
  </style>
  <body>

<h1>Forget Password</h1>
  <form   method="POST">
  <!-- Email input -->
  <div class="form-outline mb-4">
    <input type="email" id="form2Example1" value="" name="email" class="form-control" />
    <label class="form-label" for="form2Example1">Email address</label>
  </div>
  <div class="form-outline mb-4">
    <input type="text" id="form2Example1" value="" name="phnumber" class="form-control" />
    <label class="form-label" for="form2Example1">Phone Number</label>
  </div>
  <!-- Password input -->
  <div class="form-outline mb-4">
    <input type="password" id="form2Example2" name="password" class="form-control" />
    <label class="form-label" for="form2Example2">New Password</label>
  </div>

    <!-- confirm Password input -->
    <!-- <div class="form-outline mb-4">
    <input type="password" id="form2Example2" name="repassword" class="form-control" />
    <label class="form-label" for="form2Example2">Confirm Password</label>
  </div> -->

  <!-- 2 column grid layout for inline styling -->
  <div class="row mb-4">
    <div class="col d-flex justify-content-center">
      <!-- Checkbox -->
      <div class="form-check">
      
       
      </div>
    </div>
    <input type="submit" name="submit" class="btn btn-primary btn-block mb-4" value="Continue">

    <div class="col">
      <!-- Simple link -->
      
    </div>
  </div>
