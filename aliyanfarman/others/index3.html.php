





<?php

$m=$_POST['gender'];



if(isset($_POST['submit'])){




if($m==""){

    echo"<script>alert('something is wrong');</script>";
    echo "<script>window.location.replace('index2.html.php');</script>";
}

else{
    echo"</br>". "$m";
}

      
}


?>