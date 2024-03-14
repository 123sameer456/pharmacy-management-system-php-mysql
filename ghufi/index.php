
<?php
if(isset($_POST['submit'])){
    $school="school work";
    $namaz = "namaz";
    $checking = "checking Done";
if($_POST['input'] = $school){
    echo $school;
}
elseif($_POST['input'] = $namaz){
    echo $namaz;
}
elseif($_POST['input'] = $checking){
    echo $checking;
}
}

?>


<!DOCTYPE html>

<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <form method="POST">
    <input type="text" name="input">
    <button type="submit" name="submit">Submit</button>
    <div>






    </div>
    </form>
</body>
</html>