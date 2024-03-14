
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>pharma-c</title>
<link rel="stylesheet" href="style.css">
</head>


<body>
    <form action="reciept.html.php" method="POST">
    <div class="container">
<div class="heading">
    <h1>Global Pharma-c</h1>
</div>
<div class="first">
  <div class="first1">                                                                                                  
      <input type="checkbox" value="Panadol" name="panadolcheck"><label for="">Panadol</label> <br>
      <input type="checkbox" value="Postan" name="postan"><label for="">Postan</label> <br>
      <input type="checkbox" value="Postanz_forte" name="Postan_forte"><label for="">Postan-forte</label> <br>
      <input type="checkbox" value="betnasol_N" name="betnasol_N"><label for="">betnasol-N</label> <br>
      <input type="checkbox" value="Risek"  name="Risek"><label for="">Risek</label> <br>
      <input type="checkbox" value="Arinac"  name="Arinac"><label for="">Arinac</label> <br> 
      <input type="checkbox" value="Flygel" name="Flygel"><label for="">Flygel</label> <br>
      <input type="checkbox" value="Desperin" name="Desperin"><label for="">Desperin</label> <br> 
      <input type="checkbox" value="Brufen" name="Brufen"><label for="">Brufen</label> <br>
      <input type="checkbox" value="Softin" name="Softin"><label for="">Softin</label> <br>
  </div>
  <div class="first2">

<select name="panadolmg" id="">
    <option value="0">select</option>
    <option value="50">50mg</option>
    <option value="100">100mg</option>
    <option value="400">400mg</option>
    <option value="800">800mg</option>
</select> <br>
<select name="postanmg" id="">
    <option value="0">select</option>
    <option value="50">50mg</option>
    <option value="100">100mg</option>
    <option value="400">400mg</option>
    <option value="800">800mg</option>
</select> <br>
<select name="postanfortemg" id="">
    <option value="0">select</option>
    <option value="50">50mg</option>
    <option value="100">100mg</option>
    <option value="400">400mg</option>
    <option value="800">800mg</option>
</select> <br>
<select name="betnasolnmg" id="">
    <option value="0">select</option>
    <option value="50">50mg</option>
    <option value="100">100mg</option>
    <option value="400">400mg</option>
    <option value="800">800mg</option>
</select> <br>
<select name="risekmg" id="">
    <option value=" ">select</option>
    <option value="50">50mg</option>
    <option value="100">100mg</option>
    <option value="400">400mg</option>
    <option value="800">800mg</option>
</select> <br>
<select name="arinacmg" id="">
    <option value=" ">select</option>
    <option value="50">50mg</option>
    <option value="100">100mg</option>
    <option value="400">400mg</option>
    <option value="800">800mg</option>
</select> <br>
<select name="flygelmg" id="">
    <option value=" ">select</option>
    <option value="50">50mg</option>
    <option value="100">100mg</option>
    <option value="400">400mg</option>
    <option value="800">800mg</option>
</select> <br>
<select name="desperinmg" id="">
    <option value=" ">select</option>
    <option value="50">50mg</option>
    <option value="100">100mg</option>
    <option value="400">400mg</option>
    <option value="800">800mg</option>
</select> <br>
<select name="brufenmg" id="">
    <option value=" ">select</option>
    <option value="50">50mg</option>
    <option value="100">100mg</option>
    <option value="400">400mg</option>
    <option value="800">800mg</option>
</select> <br>
<select name="softinmg" id="">
    <option value=" ">select</option>
    <option value="50">50mg</option>
    <option value="100">100mg</option>
    <option value="400">400mg</option>
    <option value="800">800mg</option>
</select>


  </div>
  <div class="first3">
    <select name="panadolqty" id="">
        <option value="0">qty</option>
        <option value="01">01</option>
        <option value="02">02</option>
        <option value="03">03</option>
        <option value="04">04</option>
        <option value="05">05</option>
        <option value="06">06</option>
        <option value="07">07</option>
        <option value="08">08</option>
        <option value="09">09</option>
        <option value="10">10</option>
    </select> <br>
    <select name="postanqty" id="">
        <option value="0">qty</option>
        <option value="01">01</option>
        <option value="02">02</option>
        <option value="03">03</option>
        <option value="04">04</option>
        <option value="05">05</option>
        <option value="06">06</option>
        <option value="07">07</option>
        <option value="08">08</option>
        <option value="09">09</option>
        <option value="10">10</option>
    </select> <br>
    <select name="postanforteqty" id="">
        <option value="0">qty</option>
        <option value="01">01</option>
        <option value="02">02</option>
        <option value="03">03</option>
        <option value="04">04</option>
        <option value="05">05</option>
        <option value="06">06</option>
        <option value="07">07</option>
        <option value="08">08</option>
        <option value="09">09</option>
        <option value="10">10</option>
    </select> <br>
    <select name="betnasolnqty" id="">
        <option value="0">qty</option>
        <option value="01">01</option>
        <option value="02">02</option>
        <option value="03">03</option>
        <option value="04">04</option>
        <option value="05">05</option>
        <option value="06">06</option>
        <option value="07">07</option>
        <option value="08">08</option>
        <option value="09">09</option>
        <option value="10">10</option>
    </select> <br>
    <select name="risekqty" id="">
        <option value=" ">qty</option>
        <option value="01">01</option>
        <option value="02">02</option>
        <option value="03">03</option>
        <option value="04">04</option>
        <option value="05">05</option>
        <option value="06">06</option>
        <option value="07">07</option>
        <option value="08">08</option>
        <option value="09">09</option>
        <option value="10">10</option>
    </select> <br>
    <select name="arinacqty" id="">
        <option value=" ">qty</option>
        <option value="01">01</option>
        <option value="02">02</option>
        <option value="03">03</option>
        <option value="04">04</option>
        <option value="05">05</option>
        <option value="06">06</option>
        <option value="07">07</option>
        <option value="08">08</option>
        <option value="09">09</option>
        <option value="10">10</option>
    </select> <br>
    <select name="flygelqty" id="">
        <option value=" ">qty</option>
        <option value="01">01</option>
        <option value="02">02</option>
        <option value="03">03</option>
        <option value="04">04</option>
        <option value="05">05</option>
        <option value="06">06</option>
        <option value="07">07</option>
        <option value="08">08</option>
        <option value="09">09</option>
        <option value="10">10</option>
    </select> <br>
    <select name="desperinqty" id="">
        <option value=" ">qty</option>
        <option value="01">01</option>
        <option value="02">02</option>
        <option value="03">03</option>
        <option value="04">04</option>
        <option value="05">05</option>
        <option value="06">06</option>
        <option value="07">07</option>
        <option value="08">08</option>
        <option value="09">09</option>
        <option value="10">10</option>
    </select> <br>
    <select name="brufenqty" id="">
        <option value=" ">qty</option>
        <option value="01">01</option>
        <option value="02">02</option>
        <option value="03">03</option>
        <option value="04">04</option>
        <option value="05">05</option>
        <option value="06">06</option>
        <option value="07">07</option>
        <option value="08">08</option>
        <option value="09">09</option>
        <option value="10">10</option>
    </select> <br>
    <select name="softinqty" id="">
        <option value=" ">qty</option>
        <option value="01">01</option>
        <option value="02">02</option>
        <option value="03">03</option>
        <option value="04">04</option>
        <option value="05">05</option>
        <option value="06">06</option>
        <option value="07">07</option>
        <option value="08">08</option>
        <option value="09">09</option>
        <option value="10">10</option>
    </select> <br>
  </div>
</div>
<div class="second">
    <div class="second1">
        <input type="checkbox" value="Hydryllin"><label for="">Hydryllin</label> <br>
        <input type="checkbox" value="Olcuf"><label for="">Olcuf</label> <br>
        <input type="checkbox" value="Kofol"><label for="">kofol</label> <br>
        <input type="checkbox" value="Benadryl"><label for="">Benadryl</label> <br>
        <input type="checkbox" value="Panadol Syrup"><label for="">Panadol Syrup</label> <br>
        <input type="checkbox" value="Torex"><label for="">Torex</label> <br> 
        <input type="checkbox" value="Gavison"><label for="">Gavison</label> <br>
        <input type="checkbox" value="Linkus"><label for="">Linkus</label> <br> 
        <input type="checkbox" value="Entocid"><label for="">Entocid</label> <br>
        <input type="checkbox" value="Entoban"><label for="">Entoban</label> <br>
    </div>
    <div class="second2">
  
  <select name="Hydryllinml" id="">
    <option value=" ">select</option>
      <option value="150">100ml</option>
      <option value="250">150ml</option>
  
  </select> <br>
 <select name="olcufml" id="">
    <option value=" ">select</option>
    <option value="150">100ml</option>
    <option value="250">150ml</option>

</select> <br>
<select name="kofolml" id="">
    <option value=" ">select</option>
    <option value="150">100ml</option>
    <option value="250">150ml</option>
</select> <br>
<select name="benadrylml" id="">
    <option value=" ">select</option>
    <option value="150">100ml</option>
    <option value="250">150ml</option>

</select> <br>
<select name="panadolsyrupml" id="">
    <option value=" ">select</option>
    <option value="150">100ml</option>
    <option value="250">150ml</option>

</select> <br>
<select name="torexml" id="">
    <option value=" ">select</option>
    <option value="150">100ml</option>
    <option value="250">150ml</option>

</select> <br>
<select name="Gavisonml" id="">
    <option value=" ">select</option>
    <option value="150">100ml</option>
    <option value="250">150ml</option>

</select> <br>
<select name="Linkusml" id="">
    <option value=" ">select</option>
    <option value="150">100ml</option>
    <option value="250">150ml</option>

</select> <br>
<select name="Entocidml" id="">
    <option value=" ">select</option>
    <option value="150">100ml</option>
    <option value="250">150ml</option>

</select> <br>
<select name="Entobanml" id="">
    <option value=" ">select</option>
    <option value="150">100ml</option>
    <option value="250">150ml</option>

</select> <br>
      
  
  
    </div>
    <div class="second3">
      <select name="Hydryllinqty" id="">
        <option value=" ">qty</option>
          <option value="01">01</option>
          <option value="02">02</option>
          <option value="03">03</option>
          <option value="04">04</option>
          <option value="05">05</option>
          <option value="06">06</option>
          <option value="07">07</option>
          <option value="08">08</option>
          <option value="09">09</option>
          <option value="10">10</option>
      </select> <br>
      <select name="Olcufqty" id="">
        <option value=" ">qty</option>
        <option value="01">01</option>
        <option value="02">02</option>
        <option value="03">03</option>
        <option value="04">04</option>
        <option value="05">05</option>
        <option value="06">06</option>
        <option value="07">07</option>
        <option value="08">08</option>
        <option value="09">09</option>
        <option value="10">10</option>
      </select> <br>
      <select name="kofolqty" id="">
        <option value=" ">qty</option>
        <option value="01">01</option>
        <option value="02">02</option>
        <option value="03">03</option>
        <option value="04">04</option>
        <option value="05">05</option>
        <option value="06">06</option>
        <option value="07">07</option>
        <option value="08">08</option>
        <option value="09">09</option>
        <option value="10">10</option>
      </select> <br>
      <select name="benadrylqty" id="">
        <option value=" ">qty</option>
        <option value="01">01</option>
        <option value="02">02</option>
        <option value="03">03</option>
        <option value="04">04</option>
        <option value="05">05</option>
        <option value="06">06</option>
        <option value="07">07</option>
        <option value="08">08</option>
        <option value="09">09</option>
        <option value="10">10</option>
      </select> <br>
      <select name="panadolsyrupqty" id="">
        <option value=" ">qty</option>
        <option value="01">01</option>
        <option value="02">02</option>
        <option value="03">03</option>
        <option value="04">04</option>
        <option value="05">05</option>
        <option value="06">06</option>
        <option value="07">07</option>
        <option value="08">08</option>
        <option value="09">09</option>
        <option value="10">10</option>
      </select> <br>
      <select name="Torexqty" id="">
        <option value=" ">qty</option>
        <option value="01">01</option>
        <option value="02">02</option>
        <option value="03">03</option>
        <option value="04">04</option>
        <option value="05">05</option>
        <option value="06">06</option>
        <option value="07">07</option>
        <option value="08">08</option>
        <option value="09">09</option>
        <option value="10">10</option>
      </select> <br>
      <select name="Gavisonqty" id="">
        <option value=" ">qty</option>
        <option value="01">01</option>
        <option value="02">02</option>
        <option value="03">03</option>
        <option value="04">04</option>
        <option value="05">05</option>
        <option value="06">06</option>
        <option value="07">07</option>
        <option value="08">08</option>
        <option value="09">09</option>
        <option value="10">10</option>
      </select> <br>
      <select name="Linkusqty" id="">
        <option value=" ">qty</option>
        <option value="01">01</option>
        <option value="02">02</option>
        <option value="03">03</option>
        <option value="04">04</option>
        <option value="05">05</option>
        <option value="06">06</option>
        <option value="07">07</option>
        <option value="08">08</option>
        <option value="09">09</option>
        <option value="10">10</option>
      </select> <br>
      <select name="Entocidqty" id="">
        <option value=" ">qty</option>
        <option value="01">01</option>
        <option value="02">02</option>
        <option value="03">03</option>
        <option value="04">04</option>
        <option value="05">05</option>
        <option value="06">06</option>
        <option value="07">07</option>
        <option value="08">08</option>
        <option value="09">09</option>
        <option value="10">10</option>
      </select> <br>
      <select name="Entobanqty" id="">
        <option value=" ">qty</option>
        <option value="01">01</option>
        <option value="02">02</option>
        <option value="03">03</option>
        <option value="04">04</option>
        <option value="05">05</option>
        <option value="06">06</option>
        <option value="07">07</option>
        <option value="08">08</option>
        <option value="09">09</option>
        <option value="10">10</option>
      </select> <br>
</div>
<div class="third">
    <input type="text" id="tax" name="tax" value=""><label  for=""> Tax</label>

<input type="submit" name="submit" id="gen" value="Generate Recipt"> <br> <br>
<input id="reset" type="reset">
<br><br>
<h2>Designed By:</h2> 
<h1>Aliyan Farman</h1>


</div>



    </div>
</form>
</body>
</html>
