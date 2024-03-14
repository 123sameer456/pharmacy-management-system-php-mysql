<?php
if(isset($_POST['submit'])){
    
    $server = "localhost";
    $username = "root";
    $password = "";
    $db = "practice";
    
    $conn = mysqli_connect($server , $username , $password , $db);
    $fname = $_POST['fname'];
    $lname = $_POST['lname'];
    $password = $_POST['password'];
    $insert = "INSERT INTO hi (name , lastname ,password )
                VALUES ('$fname' , '$lname' , '$password' )";
                
    mysqli_query($conn,$insert);
    echo "great";


    mysqli_close($conn);
}

?>


<form method ="POST">
    <label for="">fname <input type="text" name="fname"></label>
    <br>
    <label for="">lname <input type="text" name="lname" id=""></label>
    <br>
    <label for="">password <input type="text" name = "password"></label>
    <br>
    <input type="submit" name="submit">
</form>
   