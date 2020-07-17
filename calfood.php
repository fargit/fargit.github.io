<!DOCTYPE HTML>  
<html>
<head>
<style>
.error {color: #00008B;}
.bar {color: #FF0000;}

</style>
</head>
<body>  
<?php
// define variables and set to empty values
$meat = 1314; $vegetarian = 978; $Difference=336; $average= 0.92; $val= 52;
$a= 8300000; $c= 11.61;
  if (isset($_POST['days'])) {
      $tag = $_POST['days'];
      $ta=$tag ;
  }
  if (isset($_POST['weeks'])) {
      $week = $_POST['weeks'];
  }
?>
<h2>PHP Form Validation Example</h2>
<p><span class="error">Die durchschnittlichen Treibhausgasemissionen für einen durchschnittliche Ernährung mit Fleisch: 1314 (kg CO2e/Jahr)</span></p>
<p><span class="error">Die durchschnittlichen Treibhausgasemissionen für einen vegetarische Ernährung betragen: 978 (kg CO2e/Jahr)</span></p>
<p><span class="error">Differenz der beiden Ernährungsstile und damit die Einsparung von THG bei vegetarischer Ernährung: 336 (kg CO2e/Jahr)</span></p>
<p><span class="error">wir errechnen daraus einen durchschnittlichen täglichen Wert: 0,92 (kg CO2e/Jahr)</span></p>

<form action= " " method="post"> 
  <label>Ich stelle an <input type="text" name="days">  Tagen pro Woche auf vegetarische Ernährung um. 
  <br>
  <?php $res= ($tag * $average); echo "Daraus errechnet sich eine Einsparung von:".$res."<br>"; ?>

  <br>
  <label>Durchführung hiervon in x Wochen <input type="text" name="weeks">
  <br>
  <?php $wee=((float)$ta * $week); echo "Daraus errechnet sich eine Einsparung von:". $wee."<br>";?>
  <br>
  <br>
  <?php $ave= ($val * $res); echo "Durchführung ein Jahr: 52  ==>    ". $ave ;?>
  <br>
  <?php echo "Machen das 10 % der Bevölkerung ein Jahr lang ergibt sich:   "?>
  <span class="bar"><?php $b= ((($a*$ave)/1000)/1000000);echo $b;?> </span>
  <br>
  <?php echo "Das entspricht den Emissionen von :   "?>
  <span class="bar"><?php echo (($b/$c)*1000000);?> </span>

  <br>


  <input type="submit" name="submit" value="CalCulation">  
  <br>
  <br>

</form>
<br>

  <br>
  <br>
  <br>

</body>  
</html>
