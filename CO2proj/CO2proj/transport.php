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
        $emissions_car = 18.9; $emissions_bus = 6.4; $rout = 0; $rout1 = 0; $rout2 = 0; 
        $val= 52; $a= 8300000; $c= 11.61; $distance =0;$week=0;$implement =0;$distance1 =0;$week1=0;$implement1 =0;
        $distance2 =0;$week2=0;$implement2 =0;$implement3 =0;

        if (isset($_POST['submit1'])){
          if (isset($_POST['distance']) & isset($_POST['rout']) & isset($_POST['week']) & isset($_POST['implement'])) {
              $distance = $_POST['distance'];
              $rout = $_POST['rout'];
              $week = $_POST['week'];
              $implement = $_POST['implement'];

          }
        }elseif (isset($_POST['submit2'])){
           if (isset($_POST['distance']) & isset($_POST['rout']) & isset($_POST['week']) & isset($_POST['implement'])) {
            $distance1 = $_POST['distance'];
            $rout1 = $_POST['rout'];
            $week1 = $_POST['week'];
            $implement1 = $_POST['implement'];
          }
        }elseif (isset($_POST['submit3'])){
            if (isset($_POST['distance']) & isset($_POST['rout']) & isset($_POST['week']) & isset($_POST['implement']) & isset($_POST['implement1'])) {
                  $distance2 = $_POST['distance'];
                  $rout2 = $_POST['rout'];
                  $week2 = $_POST['week'];
                  $implement2 = $_POST['implement'];
                  $implement3 = $_POST['implement'];
              }
          }
     
        ?>
          <h2>    konkrete klimafit-Challenge-Aufgaben: Mobilität</h2>
      <br>
      <br>
      <ol>
  <!-- Part 1 -->

  <h3> <li> Wege von einer Gesamtstrecke von z.B. 5 km (X) km (jeweils X/2 km pro Strecke) mache ich X mal pro Woche nicht mit dem Auto. Ich gehe zu Fuß oder nehme das Fahrrad.</li></h3>
        <form action= " " method="post"> 
            <p><h4> Variable Rechnung für Kurs: </h4></p>
            <p> Immer in Hin- und Rückweg gerechnet			 <br></p>

            <label>Wege einer Gesamtstrecke von <input type="text" name="distance"> Km mit dem Auto</label>
            <br>
            <p><?php $res= ($emissions_car/100 * $distance);$res= sprintf('%.2f', $res);
              if (!$distance == 0){
                echo "haben einen CO2 Ausstoß von: ".$res." Kg CO"?><sub>2</sub><?php echo"e<br>";
              } else {
              echo "haben einen CO2 Ausstoß von: 0 Kg CO"?><sub>2</sub><?php echo"e<br>";
              }
            ?></p>
            <br>
            <p> Stattdessen nehme ich das Fahrrad / gehe zu Fuß	 <br></p>
            <label>Wege einer Gesamtstrecke von <input type="text" name="rout"></label>
            <p><?php 
              if (!empty($rout)){
                echo "das auf der gleichen Strecke: ".$rout." Kg CO"?><sub>2</sub><?php echo"e<br>";
              } else {
              echo "das auf der gleichen Strecke:	0 Kg CO"?><sub>2</sub><?php echo"e<br>";
              }
              $everytime= ($res- $rout);$everytime= sprintf('%.2f', $everytime);
              if (!$everytime == 0){
                echo "Damit habe ich jedes Mal: ".$everytime." Kg CO"?><sub>2</sub><?php echo"e<br>";
              } else {
              echo "Damit habe ich jedes Mal: 0 Kg CO"?><sub>2</sub><?php echo"e<br>";
              }
            ?></p>
            <br>
            <label>Durchführung pro Woche <input type="text" name="week"> mal</label>
            <?php $weeval= ($week * $everytime);$weeval= sprintf('%.2f', $weeval);
            if (!$week == 0){ 
                echo " ".$weeval." Kg CO"?><sub>2</sub><?php echo"e<br>";
              } else {
              echo " 0 Kg CO"?><sub>2</sub><?php echo"e<br>";
              }
            ?></p>
            <label>Durchführung  hiervon in  <input type="text" name="implement"> Wochen</label>
            <?php $imp=($implement * $weeval); $imp= sprintf('%.2f', $imp);
                  if (!$week == 0){
                     echo " ". $imp." kg CO"?><sub>2</sub><?php echo"e<br>";
                  } else {
                     echo " 0 kg CO"?><sub>2</sub><?php echo"e<br>";
                  }
            ?>
            <br>
            <?php $ave= ($val * $weeval); $ave= sprintf('%.2f', $ave);
            if (!$distance == 0) {
                echo "Durchführung 1 Jahr lang: 52 Wochen ==>    ". $ave ." kg CO"?><sub>2</sub><?php echo"e<br>";
            }else {
              echo "Durchführung 1 Jahr lang: 52 Wochen ==>  0 kg CO"?><sub>2</sub><?php echo"e<br>";
            }?>
            <br>
            <p>  <?php echo "Machen das 10 % der Bevölkerung ein Jahr lang ergibt sich:   "?>
            <span class="bar"><?php $b= ((($a*$ave)/1000)/1000000);$b= sprintf('%.2f', $b);
                  if (!$distance == 0) {
                  echo $b." Mio. t CO"?><sub>2</sub><?php echo"e<br>";
                  }else{
                    echo " 0 Mio. t CO"?><sub>2</sub><?php echo"e<br>";
                  }?> </span></p>
            <br>
            <p><?php echo "Das entspricht den Emissionen von:   "?>
            <span class="bar"><?php $numb= (($b/$c)*1000000);$numb= sprintf('%.2f', $numb);
                  if (!$distance == 0) {
                  echo $numb." Personen<br>";
                  }else{
                    echo " 0 Personen<br>";
                  }?> </span></p>
            <br>
            <br>
            <!-- <input type="submit" name="submit1" value="Submit">   -->
             <input type="submit" name="submit1" value="Submit">  

            <br>
      </form>
      <br>
    <hr width="75%" size="5" align="center" color= "#008000">
    <br>
    <br>

<!-- Part 2 -->

<h3> <li>Wege von einer Gesamtstrecke von z.B. 20 km (X) (jeweils 10 km (X/2) pro Strecke) mache ich X mal pro Woche nicht mit dem Auto. Ich nehme öffentliche Verkehrsmittel.</li></h3>
        <form action= " " method="post"> 
            <p><h4> Variable Rechnung für Kurs: </h4></p>
            <p> Immer in Hin- und Rückweg gerechnet			 <br></p>

            <label>Wege einer Gesamtstrecke von <input type="text" name="distance"> Km mit dem Auto</label>
            <br>
            <p><?php $res= ($emissions_car/100 * $distance1);$res= sprintf('%.2f', $res);
              if (!$distance1 == 0){
                echo "haben einen CO2 Ausstoß von: ".$res." Kg CO"?><sub>2</sub><?php echo"e<br>";
              } else {
              echo "haben einen CO2 Ausstoß von: 0 Kg CO"?><sub>2</sub><?php echo"e<br>";
              }
            ?></p>
            <br>
            <p> Stattdessen fahre ich ÖPNV				 <br></p>
            <label>das auf der gleichen Strecke		 <input type="text" name="rout"></label>
            <p><?php 
              if (!empty($rout1)){
                echo "das auf der gleichen Strecke: ".$rout1." Kg CO"?><sub>2</sub><?php echo"e<br>";
              } else {
              echo "das auf der gleichen Strecke:	0 Kg CO"?><sub>2</sub><?php echo"e<br>";
              }
              $everytime= ($res- $rout1);$everytime= sprintf('%.2f', $everytime);
              if (!$everytime == 0){
                echo "Damit habe ich jedes Mal: ".$everytime." Kg CO"?><sub>2</sub><?php echo"e<br>";
              } else {
              echo "Damit habe ich jedes Mal: 0 Kg CO"?><sub>2</sub><?php echo"e<br>";
              }
            ?></p>
            <br>
            <label>Durchführung pro Woche <input type="text" name="week"> mal</label>
            <?php $weeval= ($week1 * $everytime);$weeval= sprintf('%.2f', $weeval);
            if (!$week1 == 0){ 
                echo " ".$weeval." Kg CO"?><sub>2</sub><?php echo"e<br>";
              } else {
              echo " 0 Kg CO"?><sub>2</sub><?php echo"e<br>";
              }
            ?></p>
            <label>Durchführung  hiervon in  <input type="text" name="implement"> Wochen</label>
            <?php $imp=($implement1 * $weeval); $imp= sprintf('%.2f', $imp);
                  if (!$week1 == 0){
                     echo " ". $imp." kg CO"?><sub>2</sub><?php echo"e<br>";
                  } else {
                     echo " 0 kg CO"?><sub>2</sub><?php echo"e<br>";
                  }
            ?>
            <br>
            <?php $ave= ($val * $weeval); $ave= sprintf('%.2f', $ave);
            if (!$distance1 == 0) {
                echo "Durchführung 1 Jahr lang: 52 Wochen ==>    ". $ave ." kg CO"?><sub>2</sub><?php echo"e<br>";
            }else {
              echo "Durchführung 1 Jahr lang: 52 Wochen ==>  0 kg CO"?><sub>2</sub><?php echo"e<br>";
            }?>
            <br>
            <p>  <?php echo "Machen das 10 % der Bevölkerung ein Jahr lang ergibt sich:   "?>
            <span class="bar"><?php $b= ((($a*$ave)/1000)/1000000);$b= sprintf('%.2f', $b);
                  if (!$distance1 == 0) {
                  echo $b." Mio. t CO"?><sub>2</sub><?php echo"e<br>";
                  }else{
                    echo " 0 Mio. t CO"?><sub>2</sub><?php echo"e<br>";
                  }?> </span></p>
            <br>
            <p><?php echo "Das entspricht den Emissionen von:   "?>
            <span class="bar"><?php $numb= (($b/$c)*1000000);$numb= sprintf('%.2f', $numb);
                  if (!$distance1 == 0) {
                  echo $numb." Personen<br>";
                  }else{
                    echo " 0 Personen<br>";
                  }?> </span></p>
            <br>
            <br>
            <!-- <input type="submit" name="submit1" value="Submit">   -->
             <input type="submit" name="submit2" value="Submit">  

            <br>
      </form>
      <br>
    <hr width="75%" size="5" align="center" color= "#008000">
    <br>
    <br>

<!-- Part 3 -->

<h3><li> Wenn ich Autofahrten von einer Gesamtstrecke von z.B. 40 km (X) (jeweils 20 km pro Strecke (X/2)) nicht vermeiden kann, suche ich mir einen / eine Mitfahrer:in für die Autofahrten. z. B. zur Arbeit oder zum Sport.</li></h3>
        <form action= " " method="post"> 
            <p><h4> Variable Rechnung für Kurs: </h4></p>
            <p> Immer in Hin- und Rückweg gerechnet			 <br></p>

            <label>Wege einer Gesamtstrecke von <input type="text" name="distance"> Km mit dem Auto</label>
            <br>
            <p><?php $res= ($emissions_car/100 * $distance2);$res= sprintf('%.2f', $res);
              if (!$distance2 == 0){
                echo "haben einen CO2 Ausstoß von: ".$res." Kg CO"?><sub>2</sub><?php echo"e<br>";
              } else {
              echo "haben einen CO2 Ausstoß von: 0 Kg CO"?><sub>2</sub><?php echo"e<br>";
              }
            ?></p>
            <br>
            <p> werden getrennt von 2 Personen gefahren				 <br></p>
            <label>haben damit einen CO2 Ausstoß von jeweils	<input type="text" name="rout"></label>
            <p><?php 
              if (!empty($rout2)){
                echo "das auf der gleichen Strecke: ".$rout1." Kg CO"?><sub>2</sub><?php echo"e<br>";
              } else {
              echo "das auf der gleichen Strecke:	0 Kg CO"?><sub>2</sub><?php echo"e<br>";
              }
              $everytime = ($res- $rout2);$everytime= sprintf('%.2f', $everytime);
              if (!$everytime == 0){
                echo "Damit werden pro Kopf: ".$everytime." Kg CO"?><sub>2</sub><?php echo"e<br>";
              } else {
              echo "Damit werden pro Kopf: 0 Kg CO"?><sub>2</sub><?php echo"e<br>";
              }
            ?></p>
            <br>
            <label>Durchführung pro Woche <input type="text" name="week"> mal</label>
            <?php $weeval= ($week1 * $everytime);$weeval= sprintf('%.2f', $weeval);
            if (!$week2 == 0){ 
                echo " ".$weeval." Kg CO"?><sub>2</sub><?php echo"e<br>";
              } else {
              echo " 0 Kg CO"?><sub>2</sub><?php echo"e<br>";
              }
            ?></p>
            <label>Durchführung  hiervon in  <input type="text" name="implement"> Wochen</label>
            <?php $imp=($implement2 * $weeval); $imp= sprintf('%.2f', $imp);
                  if (!$week2 == 0){
                     echo " ". $imp." kg CO"?><sub>2</sub><?php echo"e<br>";
                  } else {
                     echo " 0 kg CO"?><sub>2</sub><?php echo"e<br>";
                  }
            ?>
            <br>
            <label>Durchführung  hiervon in  <input type="text" name="implement1"> Wochen</label>
            <?php $imp1=($implement3 * 2); $imp= sprintf('%.2f', $imp1);
                  if (!$week2 == 0){
                     echo " ". $imp1." kg CO"?><sub>2</sub><?php echo"e<br>";
                  } else {
                     echo " 0 kg CO"?><sub>2</sub><?php echo"e<br>";
                  }
            ?>
            <br>
            <?php $ave= ($val * $weeval); $ave= sprintf('%.2f', $ave);
            if (!$distance2 == 0) {
                echo "Durchführung 1 Jahr lang: 52 Wochen ==>    ". $ave ." kg CO"?><sub>2</sub><?php echo"e<br>";
            }else {
              echo "Durchführung 1 Jahr lang: 52 Wochen ==>  0 kg CO"?><sub>2</sub><?php echo"e<br>";
            }?>
            <br>
            <p>  <?php echo "Machen das 10 % der Bevölkerung ein Jahr lang ergibt sich:   "?>
            <span class="bar"><?php $b= ((($a*$ave)/1000)/1000000);$b= sprintf('%.2f', $b);
                  if (!$distance2 == 0) {
                  echo $b." Mio. t CO"?><sub>2</sub><?php echo"e<br>";
                  }else{
                    echo " 0 Mio. t CO"?><sub>2</sub><?php echo"e<br>";
                  }?> </span></p>
            <br>
            <p><?php echo "Das entspricht den Emissionen von:   "?>
            <span class="bar"><?php $numb= (($b/$c)*1000000);$numb= sprintf('%.2f', $numb);
                  if (!$distance2 == 0) {
                  echo $numb." Personen<br>";
                  }else{
                    echo " 0 Personen<br>";
                  }?> </span></p>
            <br>
            <br>
            <!-- <input type="submit" name="submit1" value="Submit">   -->
             <input type="submit" name="submit3" value="Submit">  

            <br>
      </form>
      <br>
    <hr width="75%" size="5" align="center" color= "#008000">
    <br>
    <br>
    </ol>
    </div>
  </body>  
</html>
