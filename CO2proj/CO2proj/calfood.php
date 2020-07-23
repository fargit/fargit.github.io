<!DOCTYPE HTML>  
<html>
<head>
<style>
.body {background-color: powderblue;}

.container{
  /* text-align: center;
  border: 30px solid green; */
  margin: auto;
  width: 50%;
  border: 3px solid green;
  padding: 10px;
}
.error {color: #00008B;}
.bar {color: #FF0000;}
.sub {
    vertical-align: sub;
    font-size: smaller;

}



}
</style>
</head>
<body>  
<div class="container">
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
<h2>konkrete klimafit-Challenge-Aufgaben: Ernährung</h2>
<br>
<br>
<ol>
<!-- Part 1 -->

<li><h3>Ich reduziere meinen Fleischkonsum und möchte an X Tagen die Woche kein Fleisch essen. (kann auch genutzt werden, um eine rein vegetarische Ernährung zu realisieren!)</li></h3>
<!-- <p><span class="error">Die durchschnittlichen Treibhausgasemissionen für einen durchschnittliche Ernährung mit Fleisch: 1314 (kg CO2e/Jahr)</span></p>
<p><span class="error">Die durchschnittlichen Treibhausgasemissionen für einen vegetarische Ernährung betragen: 978 (kg CO2e/Jahr)</span></p>
<p><span class="error">Differenz der beiden Ernährungsstile und damit die Einsparung von THG bei vegetarischer Ernährung: 336 (kg CO2e/Jahr)</span></p>
<p><span class="error">wir errechnen daraus einen durchschnittlichen täglichen Wert: 0.92 (kg CO2e/Jahr)</span></p> -->

<form action= " " method="post"> 
  <label>Ich stelle an <input type="text" name="days">  Tagen pro Woche auf vegetarische Ernährung um. 
  <br>
  <p><?php $res= ($tag * $average); echo "Daraus errechnet sich eine Einsparung von:".$res."kg CO"?><sub>2</sub><?php echo"e<br>"; ?></p>

  <br>
  <label>Durchführung hiervon in x Wochen <input type="text" name="weeks">
  <br>
  <?php $wee=((float)$ta * $week); echo "Daraus errechnet sich eine Einsparung von:". $wee."<br>";?>
  <br>
  <br>
  <?php $ave= ($val * $res); echo "Durchführung ein Jahr: 52  ==>    ". $ave ;?>
  <br>
  <p>  <?php echo "Machen das 10 % der Bevölkerung ein Jahr lang ergibt sich:   "?>
<span class="bar"><?php $b= ((($a*$ave)/1000)/1000000);echo $b;?> </span></p>
  <br>
  <?php echo "Das entspricht den Emissionen von :   "?>
  <span class="bar"><?php echo (($b/$c)*1000000). "  Personen";?> </span>
  <br>
  <br>
  <input type="submit" name="submit1" value="Submit">  
  <br>
</form>
<br>
<hr width="75%" size="5" align="center" color= "#008000">

  <br>

  <br>
  <br>
  <br>

<!-- Part 4 for test falsh remove then  -->

<li><h3>In den nächsten X Wochen kaufe ich X Flaschen weniger Flaschenwasser und trinke dafür Leitungswasser.</h3></li>

<?php
// define variables and set to empty values
$Differen=489; $avera= 1.34;      $a= 8300000; $c= 11.61;$val= 52;$new= 0.02;

$a= 8300000; $c= 11.61;
// if (!empty($_POST['dayveg'])) {
  //   if (isset($_POST['dayapp'])) {
  //       $tagapp = $_POST['dayapp'];
  //       $ta2=$tagapp ;
  //   }

  // if (isset($_POST['weekapp'])) {
  //     $weekapp = $_POST['weekapp'];
  // }
?>
<br>


<form action= " " method="post"> 
  <label>Ich stelle an <input type="text" name="days">  Tagen pro Woche auf vegetarische Ernährung um. 
  <br>
  <p><?php $res= ($tag * $average); echo "Daraus errechnet sich eine Einsparung von:".$res."kg CO"?><sub>2</sub><?php echo"e<br>"; ?></p>

  <br>
  <label>Durchführung hiervon in x Wochen <input type="text" name="weeks">
  <br>
  <?php $wee=((float)$ta * $week); echo "Daraus errechnet sich eine Einsparung von:". $wee."<br>";?>
  <br>
  <br>
  <?php $ave= ($val * $res); echo "Durchführung ein Jahr: 52  ==>    ". $ave ;?>
  <br>
  <p>  <?php echo "Machen das 10 % der Bevölkerung ein Jahr lang ergibt sich:   "?>
<span class="bar"><?php $b= ((($a*$ave)/1000)/1000000);echo $b;?> </span></p>
  <br>
  <?php echo "Das entspricht den Emissionen von :   "?>
  <span class="bar"><?php echo (($b/$c)*1000000). "  Personen";?> </span>
  <br>
  <br>
  <input type="submit" name="submit1" value="Submit">  
  <br>
</form>
<hr width="75%" size="5" align="center" color= "#008000">

<br>

<br>
<br>





  <!-- Part 2 -->

  <li><h3>Ich möchte mich an X Tagen pro Woche vegan ernähren (keinerlei tierische Produkte wie z. B. Eier, Milch, Fleisch …)</h3></li>
<!-- <p><span class="error">Die durchschnittlichen Treibhausgasemissionen für einen durchschnittliche Ernährung mit Fleisch: 1314 (kg CO2e/Jahr)</span></p>
<p><span class="error">Die durchschnittlichen Treibhausgasemissionen für einen vegane Ernährung betragen: 978 (kg CO2e/Jahr)</span></p>
<p><span class="error">Differenz der beiden Ernährungsstile und damit die Einsparung von THG bei veganer Ernährung: 489 (kg CO2e/Jahr)</span></p>
<p><span class="error">wir errechnen daraus einen durchschnittlichen täglichen Wert: 1.34 (kg CO2e/Jahr)</span></p> -->
<?php
// define variables and set to empty values
$Differen=489; $avera= 1.34;      $a= 8300000; $c= 11.61;$val= 52;

$a= 8300000; $c= 11.61;
// if (!empty($_POST['dayveg'])) {
    if (isset($_POST['dayveg'])) {
        $tagveg = $_POST['dayveg'];
        $ta1=$tagveg ;
    }

  if (isset($_POST['weekveg'])) {
      $weekveg = $_POST['weekveg'];
  }
?>
<br>

<form action= " " method="post"> 
  <label>Ich stelle an <input type="text" name="dayveg">  Tagen pro Woche auf vegetarische Ernährung um. 
  <br>
  <?php $resu= ($tagveg * $avera); echo "Daraus errechnet sich eine Einsparung von:".$resu."<br>"; ?>

  <br>
  <label>Durchführung hiervon in x Wochen <input type="text" name="weekveg">
  <br>
  <?php $wees=((float)$ta1 * (float)$weekveg); echo "Daraus errechnet sich eine Einsparung von:". (float)$wees."<br>";?>
  <br>
  <br>
  <?php $ave1= ($val * $resu); echo "Durchführung ein Jahr: 52  ==>    ". $ave1  ;?>
  <br>
  <p>  <?php echo "Machen das 10 % der Bevölkerung ein Jahr lang ergibt sich:   "?>
  <span class="bar"><?php $b1= ((($a*$ave1)/1000)/1000000);echo $b1;?> </span></p>
  <br>
  <?php echo "Das entspricht den Emissionen von :   "?>
  <span class="bar"><?php echo (($b1/$c)*1000000). "  Personen";?> </span>
  <br>
  <br>
  <input type="submit" name="submit2" value="Submit">  
  <br>
  <br>
</form>
<br>
<hr width="75%" size="5" align="center" color= "#008000">
<br>

<!-- Part 3 -->

<li><h3>Ich möchte mich in den nächsten Wochen hauptsächlich von regionalen Produkten ernähren und esse z. B. keine Bananen über den Kurszeitraum und esse dafür z. B. Äpfel aus Deutschland.</h3></li>
<!-- <p><span class="error">1 Apfel zu 100g: 0,03 (kg CO2e)</span></p>
<p><span class="error">1 Bananen zu je 100g : 0,06 (kg CO2e)</span></p>
<p><span class="error">1 durschnittlicher Apfel wiegt 183,26 g 183 g: 0,05(kg CO2e)</span></p>
<p><span class="error">1 durchschnittliche Banane wiegt 114,7 g  115 g: 0,07(kg CO2e)</span></p>
<p><span class="error">(diese Werte sind Durchschnittswerte, um die Rechnung durchführen zu können)</span></p>
<p><span class="error">Differenz zwischen den beiden Werten : 0,02(kg CO2e)</span></p> --> 


<?php
// define variables and set to empty values
$Differen=489; $avera= 1.34;      $a= 8300000; $c= 11.61;$val= 52;$new= 0.02;

$a= 8300000; $c= 11.61;
// if (!empty($_POST['dayveg'])) {
    if (isset($_POST['dayapp'])) {
        $tagapp = $_POST['dayapp'];
        $ta2=$tagapp ;
    }

  if (isset($_POST['weekapp'])) {
      $weekapp = $_POST['weekapp'];
  }
?>
<br>

<form action= " " method="post"> 
  <label>Ich esse statt  <input type="text" name="dayapp">  Bananen pro Woche  die gleiche Anzahl an Äpfeln pro Woche. 
  <br>
  <?php $resapp= ($tagapp * $new); echo "Daraus errechnet sich eine Einsparung von:".$resapp."kg CO2e<br>"; ?>
  <br>
  <label>Durchführung hiervon in x Wochen <input type="text" name="weekapp">
  <br>
  <?php $weeapp=((float)$ta2 * (float)$weekapp); echo "Daraus errechnet sich eine Einsparung von:". (float)$weeapp."<br>";?>
  <br>
  <?php $ave2= ($val * $resapp); echo "Durchführung ein Jahr: 52  ==>    ". $ave2 ;?>
  <br>
  <p>  <?php echo "Machen das 10 % der Bevölkerung ein Jahr lang ergibt sich:   "?>
  <span class="bar"><?php $b2= ((($a*$ave2)/1000)/1000000);echo $b2;?> </span></p>
  <br>
  <?php echo "Das entspricht den Emissionen von :   "?>
  <span class="bar"><?php echo (($b2/$c)*1000000). "  Personen";?> </span>
  <br>
  <input type="submit" name="submit3" value="Submit">  
  <br>
</form>
<hr width="75%" size="5" align="center" color= "#008000">

<br>

<!-- Part 4 -->

<li><h3>In den nächsten X Wochen kaufe ich X Flaschen weniger Flaschenwasser und trinke dafür Leitungswasser.</h3></li>

<?php
// define variables and set to empty values
$Differen=489; $avera= 1.34;      $a= 8300000; $c= 11.61;$val= 52;$new= 0.02;

$a= 8300000; $c= 11.61;
// if (!empty($_POST['dayveg'])) {
    if (isset($_POST['dayapp'])) {
        $tagapp = $_POST['dayapp'];
        $ta2=$tagapp ;
    }

  if (isset($_POST['weekapp'])) {
      $weekapp = $_POST['weekapp'];
  }
?>
<br>

<form action= " " method="post"> 
  <label>Ich kaufe in einer Woche  <input type="text" name="dayapp">  Liter weniger Mineralwasser und trinke dafür Leitungswasser. 
  <br>
  <?php $parts= "kg CO2e";$resapp= ($tagapp * $new); echo "Daraus errechnet sich eine Einsparung von::".$resapp ?> Kg CO<sub>2</sub>e<br>"
  <br>
  <label>Durchführung hiervon in x Wochen<input type="text" name="weekapp">
  <br>
  <?php $weeapp=((float)$ta2 * (float)$weekapp); echo "Durchführung ein Jahr:". (float)$weeapp."<br>";?> kg CO2e
  <br>
  <?php $ave2= ($val * $resapp); echo "Durchführung ein Jahr: 52  ==>    ". $ave2 ;?> kg CO2e
  <br>
  <p>  <?php echo "Machen das 10 % der Bevölkerung ein Jahr lang ergibt sich:   "?>
  <span class="bar"><?php $b2= ((($a*$ave2)/1000)/1000000);echo $b2;?> </span> Mio. t CO2e </p>
  <br>
  <?php echo "Das entspricht den Emissionen von:   "?>
  <span class="bar"><?php echo (($b2/$c)*1000000). "  Personen";?> </span>
  <br>
  <input type="submit" name="submit4" value="Submit">  
  <br>
  <br>
</form>

  </ol>

  </div>
</body>  
</html>
