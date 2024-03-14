<?php
                                                                  
//  $totall=0;                   
                       
// sandwitch
                    
                // sandwitch and burger /

if(isset($_REQUEST['total'])){
   
    $unit_fries=50; 
    $fries = $_REQUEST['Fries'] *  $unit_fries ;

    $unit_zinger_burger=320; 
    $zinger_burger = $_REQUEST['ZingerBurger'] *  $unit_zinger_burger;

    $unit_cheese_burger=380;
    $cheese_burger = $_REQUEST['CheeseBurger'] *  $unit_cheese_burger;

    
    $unit_roll=180;
    $roll = $_REQUEST['Roll'] *  $unit_roll;

    $unit_chatni_roll=200;
    $chatni_roll = $_REQUEST['ChatniRoll'] *  $unit_chatni_roll;

    $unit_cheese_sandwitch=150; 
    $cheese_sandwitch= $_REQUEST['CheeseSandwitch'] *   $unit_cheese_sandwitch;
    
    
    $unit_chicken_sandwitch=120;
    $chicken_sandwitch= $_REQUEST['ChickenSandwitch'] *   $unit_chicken_sandwitch;


    $unit_fish_sandwitch=200;
    $fish_sandwitch= $_REQUEST['FishSandwitch'] *   $unit_fish_sandwitch;

    $unit_chocalate_brownie=50;
    $chocalate_brownie = $_REQUEST['chocalatebrownie'] * $unit_chocalate_brownie;

    $unit_gulab_jamun=150;
    $gulab_jamun = $_REQUEST['gulabjamun'] * $unit_gulab_jamun;

    $unit_paan=40;
    $paan = $_REQUEST['paan'] * $unit_paan;
     
    $unit_rasmalai=800;
    $rasmalai = $_REQUEST['rasmalai'] * $unit_rasmalai;


    $unit_jalebi=250;
    $jalebi = $_REQUEST['jalebi'] * $unit_jalebi;

     
    $unit_chocalate_shake=150;
    $chocalate_shake = $_REQUEST['chocalateshake'] * $unit_chocalate_shake;

    
    $unit_Milk_Shake=110;
    $Milk_Shake = $_REQUEST['milkshake'] * $unit_Milk_Shake;

    
    $unit_Banana=90;
    $Banana = $_REQUEST['banana'] * $unit_Banana;

    $unit_tea=50;
    $tea = $_REQUEST['tea'] * $unit_tea;

    $unit_cocacola=100;
    $cocacola= $_REQUEST['cocacola'] * $unit_cocacola;

    $unit_coffee=150;
    $coffee = $_REQUEST['coffee'] * $unit_coffee;

    $unit_orange=200;
    $orange = $_REQUEST['orange'] * $unit_orange;

    $unit_water=40;
    $water= $_REQUEST['water'] * $unit_water;

    $totall =  $fries  +  $zinger_burger + $cheese_burger + $roll + $chatni_roll +  $fish_sandwitch + $cheese_sandwitch + $chicken_sandwitch + $chocalate_brownie + $gulab_jamun
    +$paan + $rasmalai + $jalebi + $chocalate_shake + $Milk_Shake + $Banana + $tea + $cocacola + $orange + $coffee + $water;

    
    
    // if(isset($_REQUEST['dis']))($totall>=1000){
    //    
    //     $ftotal= $totall*100/5;
        
    // }
    

    
}


?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
   <!-- <link rel="stylesheet" href="style.css"> -->
</head>
<style>
body {
    background-image : url('https://images.unsplash.com/photo-1550966871-3ed3cdb5ed0c?ixlib=rb-4.0.3&ixid=MnwxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8&auto=format&fit=crop&w=1170&q=80');
    background-size : cover;
    width : 90% ;
}


.header{
    text-align: center;
    border:solid 5px black;
     left:70px;
     position: relative;
}
                  .rest{
                    font-size:50px;
                  }
.main{
    border-style: double;
    border-color: black;
    border-width: 10px;
    height: 70%;
    left:80px;
    /* background-color:aqua ; */
    position: absolute;
    width: 88.5%;
    text-align:center;
}
.lef{

    border: double 5px black;
    width: 20%;
    height: 90%;
    top:4%;
    position: absolute;
    background-color:#c3c5c7;
    left:6%;
} 
.print{
    /* borde    : double 5px black; */
    text-align: center;
    width: 24.5%;
    height: 2%;
  position: absolute;
  top: 76%;
  left:35%;
}  

.gen{
    font-size: 20px;
    padding-left:3%;
    left:6%;
    padding-top:2%;
    padding-bottom:2%;
    bottom: -45px;
    position:absolute;
    width:100%;
}             
.quantity{
    /* float: right; */
    /* margin-left: 30%; */
    width: 15%;
}  
.cent{
border: double 5px black;
width: 39%;
height: 88.5%;
margin-left: 25%;
left:4.4%;
background-color:#c3c5c7;
/* filter:opacity(50%); */

top:4%;
/* margin-top: -28%; */
position: absolute;
}
.up{
    border-style: double;
    border-color: black;
    border-width: 5px;
    width: 65%;
    margin-left: 15%;
    margin-top: 1%;


}
.down{
    position: absolute;
    border: double 5px black;
    width:65%;
    left:15%;
    margin-top:1%;
    text-align:center;
}
.downtwo{
    /* background-color: darkgrey; */
    width: 40%;
margin-left: 50%;
    
    margin-top: 20%;
    
}

.downone {
    float: left;
    position: relative;
}
.rigt{

    border: double 5px black;
    width: 22%;
    height: 88%;
    margin-left: 63%;
    right: 0%;
    top:4%;
    left:8.5%;
    background-color:#c3c5c7;
    /* margin-top: -28%; */
position: absolute;
text-align:center;
}
.payment{
    border: double 5px black;
    /* text-align: center; */
    width: 22%;
    height: 10%;
    background-color:#c3c5c7;
    position: absolute;
    
    /* margin-left: 65%; */
    /* margin-top: 0%;     */
right:6%;
bottom:5%;
}
input:hover{
    background-color:black;
    color:white;
}
input[type="button"] , input[type="reset"]  , input[type="submit"]{
    padding-left: 30%;
    padding-right: 30%;
    
    /* width: 70%; */
}
input[type="button"]{
    margin-top: 40%;
    width: 89%;
    padding-top: 10%;
    padding-bottom: 10%;
    text-align: center;
}
</style>

<body>

<!-- <img src="https://images.unsplash.com/photo-1550966871-3ed3cdb5ed0c?ixlib=rb-4.0.3&ixid=MnwxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8&auto=format&fit=crop&w=1170&q=80" alt=""> -->

<form method="post">
    <div class="header">
        <h1 class="rest"> <b> RESTURANT MANAGMENT SYSTEM</b></h1>
    </div>

    <div class="main">





        <div class="lef">
            <h1 class="lh">Fast Meal</h1>

            
                <input type="checkbox" name="" id="">
                <label for=""><b> Fries</b></label>
                <input class="quantity" style="margin-left:35%"  type="number" min="0" name="Fries" value="<?php echo 0 ;?>" id=""> <br>

                <input type="checkbox" name="" id="">
                <label for=""><b>Zinger Burger</b></label>
                <input class="quantity" style="margin-left:14%" type="number" min="0" name="ZingerBurger" value="<?php echo 0 ;?>" id=""><br>


                <input type="checkbox" name="" id="">
                <label for=""><b>Cheese Burger</b></label>
                <input class="quantity" style="margin-left:13.5%" type="number" min="0" name="CheeseBurger" value="<?php echo 0 ;?>" id=""><br>


                <input type="checkbox" name="" id="">
                <label for=""><b>Roll</b></label>
                <input class="quantity" style="margin-left:37%" type="number" min="0" name="Roll" value="<?php echo 0 ;?>" id=""><br>


                <input type="checkbox" name="" id="">
                <label for=""><b>Chatni Roll</b></label>
                <input class="quantity" type="number" min="0" style="margin-left:20.5%" name="ChatniRoll"value="<?php echo 0 ;?>" id=""><br>

            


            <h2><b>Sandwitch</b></h2>
            

                <input type="checkbox" name="" id="">
                <label for=""><b>Cheese Sandwitch</b></label>
                <input class="quantity" type="number" min="0" style="margin-left:6%" name="CheeseSandwitch"value="<?php echo 0 ;?>" id=""><br>


                <input type="checkbox" name="" id="">
                <label for=""><b>Chicken Sandwitch</b></label>
                <input class="quantity" type="number" min="0" style="margin-left:3%" name="ChickenSandwitch"value="<?php echo 0 ;?>" id=""><br>


                <input type="checkbox" name="" id="">
                <label for=""><b>Fish Sandwitch</b></label>
                <input class="quantity" type="number" min="0" name="FishSandwitch"style="margin-left:12%"value="<?php echo 0 ;?>" id=""><br>

            





        </div>
      



        <div class="cent">
            <div class="up">
                <h2><b>Dessert</b></h2>

                

                    <input type="checkbox" name="" id="">
                    <label for=""><b>Chocalate Brownie</b></label>
                    <input class="quantity" style="margin-left:15%" type="number" min="0" name="chocalatebrownie" value="<?php echo 0 ;?>" id=""> <br>

                    <input type="checkbox" name="" id="">
                    <label for=""><b>Gulab Jamun</b></label>
                    <input class="quantity" type="number" min="0"style="margin-left:24.5%" name="gulabjamun" value="<?php echo 0 ;?>" id=""><br>


                    <input type="checkbox" name="" id="">
                    <label for=""><b>Paan</b></label>
                    <input class="quantity" type="number" style="margin-left:40.2%" min="0" name="paan" value="<?php echo 0 ;?>" id=""><br>


                    <input type="checkbox" name="" id="">
                    <label for=""><b>Rasmalai</b></label>
                    <input class="quantity" type="number" style="margin-left:32.5%" min="0" name="rasmalai" value="<?php echo 0 ;?>" id=""><br>


                    <input type="checkbox" name="" id="">
                    <label for=""><b>Jalebi</b></label>
                    <input class="quantity" type="number" style="margin-left:38.5%" min="0" name="jalebi"  value="<?php echo 0 ;?>" id=""><br>

                
            </div>

            <div class="down">
                <div class="downone">
                    <h3><b>Payment Method</b></h3>
                <!-- <input type="button" value="Price List"><br> -->
                <input style="padding-top: 10%;padding-bottom: 10%;text-align: center; border-radius: 20%;" type="submit" name = "total" value="Total"><br>
                <input style="padding-top: 10%;padding-bottom: 10%;text-align: center; width:84%;border-radius: 20%;" type="submit" name = "dis" value="disTotal"><br>

                <input style="padding-top: 10%;padding-bottom: 10%;text-align: center;width:84%;border-radius: 20%;border-radius: 20%; " type="reset" value="Reset"><br>
        
                </div>

                <div class="downtwo">
                    <label for="" ><b>Total</b></label>
                    <input type="text" name="totalbox" readonly  value= "<?php if(isset($_REQUEST['total'])){ echo $totall ; } else{ echo "0" ;} ?>" ><br>
                    
                    
                    <label for=""><b>Discount</b></label>
                    <input type="text" name="discount" ><br>
                    
                    <label for=""><b>Amount recieved</b></label>
                    <input type="text">

                </div>
            </div>
        </div>


        <div  style="position:absolute ; right10%; height:70% ;" class="rigt">
            <h1><b>Drinks</b></h1>

                <input type="checkbox" name="" id="">
                <label for=""><b>Tea</b></label>
                <input class="quantity" type="number" style="margin-left:30%"  value="<?php echo 0 ;?>" min="0" name="tea" id=""> <br>

                <input type="checkbox" name="" id="">
                <label for=""><b>Coca cola</b></label>
                <input class="quantity" type="number" style="margin-left:17%" value="<?php echo 0 ;?>" min="0" name="cocacola" id=""><br>


                <input type="checkbox" name="" id="">
                <label for=""><b>Coffee</b></label>
                <input class="quantity" type="number" style="margin-left:23.8%"  value="<?php echo 0 ;?>" min="0" name="coffee" id=""><br>


                <input type="checkbox" name="" id="">
                <label for=""><b>Orange Juice</b></label>
                <input class="quantity" type="number" style="margin-left:9.1%" value="<?php echo 0 ;?>" min="0" name="orange" id=""><br>


                <input type="checkbox" name="" id="">
                <label for=""><b>Mineral Water</b></label>
                <input class="quantity" type="number" style="margin-left:6%"  value="<?php echo 0 ;?>"  min="0" name="water" id=""><br>

            

            <h1><b>Shakes</b></h1>
            
                <input type="checkbox" name="" id="">
                <label for=""><b>Chocalate Shake</b></label>
                <input class="quantity" type="number" style="margin-left:2%" value="<?php echo 0 ;?>" name="chocalateshake" id=""><br>


                <input type="checkbox" name="" id="">
                <label for=""><b>Milk Shake</b></label>
                <input class="quantity" type="number" style="margin-left:13%" value="<?php echo 0 ;?>" name="milkshake" id=""><br>


                <input type="checkbox" name="" id="">
                <label for=""><b>Banana</b></label>
                <input class="quantity" type="number" style="margin-left:21%" value="<?php echo 0 ;?>" name="banana" id=""><br>

            
        </div>
        
<div class="payment">
    
    <label for=""><b>Total Amount to pay</b></label>
    <input type="text"  disabled value="<?php   if(isset($_REQUEST['dis'])){ echo  $_REQUEST['totalbox'] - $_REQUEST['discount'] ;}  ?>"    >
    
</div>

    </div>
    <div class="print"> <input class="gen" 
    style=" width:100%"type="submit" name="sub" value="Generate Receipt"></div>
    </form>


    <!-- <iframe src="" frameborder="0"></iframe> -->
</body>
</html>