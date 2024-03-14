<?php
 session_start();
if(isset($_POST['submit'])){

    if(empty($_POST['email']) OR empty($_POST['password']) ){
      echo "<script>alert('all fileds must be filled');</script>";
    } else{

     
    $server = "localhost" ; 
    $username = "root" ;
    $password = "" ;
    $db = "practice";
    $conn = mysqli_connect($server , $username , $password , $db);
    $email = $_POST['email'];
    $password = $_POST['password'];
  $insert = "SELECT * FROM registration WHERE email = '$email' AND
   password = '$password'";
   $result = mysqli_query($conn,$insert);
   $row = mysqli_fetch_assoc($result);
 

   
      if($row > 0){
        // echo $row['email'] ;
        // echo $row['id'];
        // echo $row ; 
        $_SESSION['id'] = $row['id'];
        // $_SESSION['username'] = $row['name'];
      
        $_SESSION['mail'] = $row['email'];
        $_SESSION['pnumber'] = $row['phonenumber'];
        $_SESSION['city'] = $row['city'];
        $_SESSION['twitter'] = $row['gender'];
        $_SESSION['linkedin'] = $row['lastname'];
        

    } else{
      echo "<script>alert('fields are incorrect');</script>";
      
    }
    mysqli_close($conn);
    }
  
    
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


  <form   method="POST" action="profile.php">
  <!-- Email input -->
  <div class="form-outline mb-4">
    <input type="email" id="form2Example1" name="email" class="form-control" />
    <label class="form-label" for="form2Example1">Email address</label>
  </div>

  <!-- Password input -->
  <div class="form-outline mb-4">
    <input type="password" id="form2Example2" name="password" class="form-control" />
    <label class="form-label" for="form2Example2">Password</label>
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
        <input class="form-check-input" type="checkbox" value="" id="form2Example31" checked />
        <label class="form-check-label" for="form2Example31"> Remember me </label>
      </div>
    </div>

    <div class="col">
      <!-- Simple link -->
      <a href="forget.html.php">Forgot password?</a>
    </div>
  </div>

  <!-- Submit button -->
  <input type="submit" name="submit" class="btn btn-primary btn-block mb-4" value="Log in">

  <!-- Register buttons -->
  <div class="text-center">
    <p>Not a member? <a href="register.php" >Register</a></p>
    <p>or sign up with:</p>
    <button type="button" class="btn btn-link btn-floating mx-1">
      <i class="fab fa-facebook-f"></i>
    </button>

    <button type="button" class="btn btn-link btn-floating mx-1">
      <i class="fab fa-google"></i>
    </button>

    <button type="button" class="btn btn-link btn-floating mx-1">
      <i class="fab fa-twitter"></i>
    </button>

    <button type="button" class="btn btn-link btn-floating mx-1">
      <i class="fab fa-github"></i>
    </button>
  </div>
</form>

    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.4.1.slim.min.js" integrity="sha384-J6qa4849blE2+poT4WnyKhv5vZF5SrPo0iEjwBvKU7imGFAV0wwj1yYfoRSJoZ+n" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.4.1/dist/js/bootstrap.min.js" integrity="sha384-wfSDF2E50Y2D1uUdj0O3uMBJnjuUD4Ih7YwaYd1iqfktj0Uod8GCExl3Og8ifwB6" crossorigin="anonymous"></script>
  </body>
</html>

