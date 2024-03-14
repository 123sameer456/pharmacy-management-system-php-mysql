<?php

if(isset($_POST["submit"])){
$panadolprice = $_POST['panadolmg'] * $_POST['panadolqty'];

    if($_POST['tax'] > 0){
        $t =  $_POST['tax'];
        
        echo $panadolprice + $t ;
    } else{
        echo  $panadolprice ;
    }
} else{
    echo " " ;
}

?>