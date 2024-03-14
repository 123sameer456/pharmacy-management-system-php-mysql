<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Form</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <div  class="container">
        <form  action= "welcome.html.php" method ="POST">
<div class="one">
    <h1>Admission Form </h1>
</div>
<div class="two">
    <label for="">First Name</label><input type="text" id="a" name="fname" value="First Name">
<label for="">Last Name</label><input type="text" id="a" name="lname" value="last Name">
</div>
<div class="three">
<label for="">Father Name</label><input type="text" id="a" value="Father Name">
<label for="">Qualificatoin</label>
<select name="" id="">
    <option value="">---Select---</option>
    <option value="">Matric</option>
    <option value="">Intermediate</option>
    <option value="">Bcom</option>
    <option value="">Master</option>
</select>
</div>
<div class="four">
<label for="">Age</label><input type="text" value="Age">
<label for="">Birth Of Date</label> <input type="date">
</div>

<div class="five">
<label for="">Select Your Course</label> 
<select name="" id="">
<option value="">---Select---</option>
<option value="">C.I.T</option>
<option value="">Web designing & Development</option>
<option value="">Graphic Designing</option>
<option value="">English Languge</option>
<input type="submit" name="submit" value="Submit">

</select>
</div>
        </form>
    </div>


</body>
</html>
