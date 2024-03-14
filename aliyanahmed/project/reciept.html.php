<?php

if (isset($_POST['submit'])) {


    $grand_total = 0;


?>


    <!DOCTYPE html>
    <html lang="en">

    <head>
        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Document</title>
        <link rel="stylesheet" href="re.css">
    </head>
    <style>

    </style>

    <body>
        <div class="card" style="width: 30rem;">
            <div class="card-body">
                <h2 class="card-title">Global Pharmacy Reciept</h2>
                <h4 class="card-subtitle mb-2 text-muted">Malir Saudabad</h4>
                <hr>


                <table>

                    <tr>
                        <th>Med. Name</th>
                        <th>Qty</th>
                        <th>Price</th>
                    </tr>

                    <?php if (isset($_POST['panadolcheck'])) {
                        $panadolprice = $_POST['panadolmg'] * $_POST['panadolqty'];
                        $grand_total += $panadolprice;
                    ?>
                        <tr>
                            <td><?php echo $_POST['panadolcheck']; ?></td>
                            <td><?php echo $_POST['panadolqty']; ?></td>
                            <td><?php echo $panadolprice; ?></td>
                        </tr>
                    <?php  } ?>


                    <?php if (isset($_POST['postan'])) {
                        $postanprice = $_POST['postanmg'] * $_POST['postanqty'];
                        $grand_total +=  $postanprice;
                    ?>
                        <tr>
                            <td><?php echo $_POST['postan']; ?></td>
                            <td><?php echo $_POST['postanqty']; ?></td>
                            <td><?php echo $postanprice; ?></td>
                        </tr>
                    <?php  } ?>

                    <?php if (isset($_POST['Postan_forte'])) {
                        $postanforteprice = $_POST['postanfortemg'] * $_POST['postanforteqty'];
                        $grand_total +=  $postanforteprice;
                    ?>
                        <tr>
                            <td><?php echo $_POST['Postan_forte']; ?></td>
                            <td><?php echo $_POST['postanforteqty']; ?></td>
                            <td><?php echo $postanforteprice; ?></td>
                        </tr>
                    <?php  } ?>

                    <?php if (isset($_POST['betnasol_N'])) {
                        $betnasolnprice = $_POST['betnasolnmg'] * $_POST['betnasolnqty'];
                        $grand_total +=  $betnasolnprice;
                    ?>
                        <tr>
                            <td><?php echo $_POST['betnasol_N']; ?></td>
                            <td><?php echo $_POST['betnasolnqty']; ?></td>
                            <td><?php echo $betnasolnprice; ?></td>
                        </tr>
                    <?php  } ?>

                    <tr>
                        <td  colspan="2">Tax</td>
                        
                        <td><?php
                        if(($_POST['tax']>0)){
                            echo $_POST['tax'];
                        }else{
                            echo"0";
                        }
                        ?></td>
                       

                    </tr>

                    <tr>
                        <td  colspan="2">Grand Total</td>
                        
                        <td><?php
                       echo $grand_total+$_POST['tax'];
                        ?></td>
                       

                    </tr>



                </table>



            </div>
            <hr>

        </div>
        </div>
        <button class="print" onclick="window.print()"> Print</button>


    </body>

    </html>
<?php
}

?>