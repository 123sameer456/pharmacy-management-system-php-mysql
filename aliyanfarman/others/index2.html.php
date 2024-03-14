<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
     <!-- <h1>Register Form</h1>

<label for="">First Name</label> <input type="text"  name="fname">
<div class="one">
    <label for="">Last Name</label><input type="text"  name="lname">
</div>
<div class="two">
    <label for="">Course Name</label><select name="CourseName" id="">
        <option value="">---select---</option>
        <option value="Computer course">Computer course</option>
        <option value="language course">language course</option>
    </select>

</div>
<div class="three">
    <label for="">age</label><input type="text"  name="Age">
</div>
<div class="four">
    <label for="">Qualification</label><input type="text"  name="qua"></div> -->

   <br>  

   <form action="" method="POST">
   <input name="gender" value="male" checked type="radio"><label for="">Male</label>
<input value="female" name="gender" type="radio"><label for="">Female</label>


<input type="submit" name="submit">






</form>



</body>
</html>

<?php





if(isset($_POST['submit'])){

    $m=$_POST['gender'];

if($m==""){
    echo"<script>alert('fill again')</script>;";
}
else{
    echo"$m";
}

      
}





?>