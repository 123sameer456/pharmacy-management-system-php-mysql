<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<style>
    h1{
        background-color: aqua;
    }
</style>
<body>
    
    <h1>welcome to this page</h1>
</body>
</html>

<?php
if(isset($_POST['submit'])){
    $fname= $_POST['fname'];
    $lname= $_POST['lname'];
    echo "First Name : " . "$fname";
    echo "<br/>" . "Last Name : " . "$lname";
}

?>