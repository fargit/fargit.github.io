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
        $a= 8300000; $c= 11.61; $days1 =0;$days2=0;$days3 =0;$days4=0;$week1 =0;$week2 =0;$week3 =0;$week4 =0;
        if (isset($_POST['submit1'])){
          if (isset($_POST['days']) & isset($_POST['week'])) {
              $days1 = $_POST['days'];
              $week1 = $_POST['week'];
          }
        }elseif(isset($_POST['submit2'])) {
          if (isset($_POST['days']) & isset($_POST['week'])){
              $days2 = $_POST['days'];
              $week2 = $_POST['week'];

            }
        }elseif (isset($_POST['submit3']) ){
          if (isset($_POST['days'])& isset($_POST['week'])) {
              $days3 = $_POST['days'];
              $week3 = $_POST['week'];

          }
        }elseif (isset($_POST['submit4'])){
            if (isset($_POST['days'])& isset($_POST['week'])) {
                $days4 = $_POST['days'];
                $week4 = $_POST['week'];

            }
          }
     
        ?>
          <h2>    konkrete klimafit-Challenge-Aufgaben: Ernährung</h2>
      <br>
      <br>
      <ol>
  <!-- Part 1 -->

  <h3><li>Ich reduziere meinen Fleischkonsum und möchte an X daysen die Woche kein Fleisch essen. (kann auch genutzt werden, um eine rein vegetarische Ernährung zu realisieren!)</li></h3>
        <form action= " " method="post"> 
       <?php if ($days1 >= 0 && $days1 <= 7){
              }else{
                $errors = '* Day should be between 0 and 7'.'<br>';
                // echo '<div style="color: red; font-weight: bold; text-align: center">' . $errors . '<br/></div>';
                echo '<p><span class="bar">'. $errors . '</span></p>';
                }
                ?>
            <label>Ich stelle an <input type="text" name="days">  Tagen pro Woche auf vegetarische Ernährung um. </label>
            <br>
            <p><?php $res= ($days1 * $average);$res= sprintf('%.2f', $res);
              if (!$days1 == 0){
                echo "Daraus errechnet sich eine Einsparung von:".$res."kg CO"?><sub>2</sub><?php echo"e<br>";
              } else {
              echo "Daraus errechnet sich eine Einsparung von: 0 kg CO"?><sub>2</sub><?php echo"e<br>";
              }
            ?></p>
            <br>
            <?php if ($week1 >= 0 && $week1 <= 52){
                }else{
                  $errors = '* Week should be between 0 and 52'.'<br>';
                  // echo '<div style="color: red; font-weight: bold; text-align: center">' . $errors . '<br/></div>';
                  echo '<p><span class="bar">'. $errors . '</span></p>';
                  }?>
            <label>Durchführung hiervon in x Wochen </label><input type="text" name="week">
            <br>
            <p><?php $wee=((float)$res * $week1); $wee= sprintf('%.2f', $wee);
                  if (!$week1 == 0){
                     echo "Daraus errechnet sich eine Einsparung von:". $wee." kg CO"?><sub>2</sub><?php echo"e<br>";
                  } else {
                     echo "Daraus errechnet sich eine Einsparung von: 0 kg CO"?><sub>2</sub><?php echo"e<br>";
                  }
            ?></p>
            <br>
            <br>
            <?php $ave= ($val * $res); $ave= sprintf('%.2f', $ave);
            if (!$days1 == 0) {
                echo "Durchführung ein Jahr: 52  ==>    ". $ave ." kg CO"?><sub>2</sub><?php echo"e<br>";
            }else {
              echo "Durchführung ein Jahr: 52  ==>  0 kg CO"?><sub>2</sub><?php echo"e<br>";
            }?>
            <br>
            <p>  <?php echo "Machen das 10 % der Bevölkerung ein Jahr lang ergibt sich:   "?>
            <span class="bar"><?php $b= ((($a*$ave)/1000)/1000000);$b= sprintf('%.2f', $b);
                  if (!$days1 == 0) {
                  echo $b." Mio. t CO"?><sub>2</sub><?php echo"e<br>";
                  }else{
                    echo " 0 Mio. t CO"?><sub>2</sub><?php echo"e<br>";
                  }?> </span></p>
            <br>
            <p><?php echo "Das entspricht den Emissionen von :   "?>
            <span class="bar"><?php $numb= (($b/$c)*1000000);$numb= sprintf('%.2f', $numb);
                  if (!$days1 == 0) {
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
    <br>
    <br>

   <!-- Part 2 --> 
   <h3><li>Ich möchte mich an X Tagen pro Woche vegan ernähren (keinerlei tierische Produkte wie z. B. Eier, Milch, Fleisch …)</h3></li>
      <!-- <p><span class="error">Die durchschnittlichen Treibhausgasemissionen für einen durchschnittliche Ernährung mit Fleisch: 1314 (kg CO2e/Jahr)</span></p>
      <p><span class="error">Die durchschnittlichen Treibhausgasemissionen für einen vegane Ernährung betragen: 978 (kg CO2e/Jahr)</span></p>
      <p><span class="error">Differenz der beiden Ernährungsstile und damit die Einsparung von THG bei veganer Ernährung: 489 (kg CO2e/Jahr)</span></p>
      <p><span class="error">wir errechnen daraus einen durchschnittlichen täglichen Wert: 1.34 (kg CO2e/Jahr)</span></p> -->
      <?php
      // define variables and set to empty values
      $Differen=489; $avera= 1.34;      $a= 8300000; $c= 11.61;$val= 52;
      $a= 8300000; $c= 11.61;
     
      ?>
      <br>

      <form action= " " method="post"> 
      <?php if ($days2 >= 0 && $days2 <= 7){
              }else{
                $errors = '* Day should be between 0 and 7'.'<br>';
                // echo '<div style="color: red; font-weight: bold; text-align: center">' . $errors . '<br/></div>';
                echo '<p><span class="bar">'. $errors . '</span></p>';
                }?>
            <label>Ich stelle an <input type="text" name="days">  Tagen pro Woche auf vegetarische Ernährung um. 
            <br>
            <p><?php $resu= ($days2 * $avera); $resu= sprintf('%.2f', $resu);
                  if (!$days2 == 0){
                    echo "Daraus errechnet sich eine Einsparung von:".$resu." kg CO"?><sub>2</sub><?php echo"e<br>";
                  } else {
                    echo "Daraus errechnet sich eine Einsparung von: 0 kg CO"?><sub>2</sub><?php echo"e<br>";}
            ?></p>

            <br>
            <?php  if ($week2 >= 0 && $week2 <= 52){
                }else{
                  $errors = '* Week should be between 0 and 52'.'<br>';
                  // echo '<div style="color: red; font-weight: bold; text-align: center">' . $errors . '<br/></div>';
                  echo '<p><span class="bar">'. $errors . '</span></p>';
                  }?>
            <label>Durchführung hiervon in x Wochen <input type="text" name="week">
            <br>
            <p><?php $wees=($resu * $week2); $wees= sprintf('%.2f', $wees);
                  if (!$week2 == 0){
                    echo "Daraus errechnet sich eine Einsparung von:". $wees." kg CO"?><sub>2</sub><?php echo"e<br>";
                } else {
                    echo "Daraus errechnet sich eine Einsparung von: 0 kg CO"?><sub>2</sub><?php echo"e<br>";
                }
           ?></p>            
            <br>
            <br>
            <?php $ave1= ($val * $resu); $ave1= sprintf('%.2f', $ave1);
              if (!$days2 == 0) {
                   echo "Durchführung ein Jahr: 52  ==>    ". $ave1 ." kg CO"?><sub>2</sub><?php echo"e<br>";
              }else {
                    echo "Durchführung ein Jahr: 52  ==>  0 kg CO"?><sub>2</sub><?php echo"e<br>";
              }?>
            <br>
            <p>  <?php echo "Machen das 10 % der Bevölkerung ein Jahr lang ergibt sich:   "?>
            <span class="bar"><?php $b1= ((($a*$ave1)/1000)/1000000);$b1= sprintf('%.2f', $b1);
                              if (!$days2 == 0) {
                                echo $b1."Mio. t CO"?><sub>2</sub><?php echo"e<br>";
                                }else{
                                  echo " 0 Mio. t CO"?><sub>2</sub><?php echo"e<br>";
                                }?> </span></p>
            <br>
            <?php echo "Da  s entspricht den Emissionen von :   "?>
            <span class="bar"><?php $numb= (($b1/$c)*1000000);$numb= sprintf('%.2f', $numb);
            if (!$days2 == 0) {
              echo $numb." Personen<br>";
              }else{
                echo " 0 Personen<br>";
              }?> </span></p>
          
            <br>
            <br>
            <!-- <input type="submit" name="submit2" value="Submit">  -->
            <input type="submit" name="submit2" value="Submit">  
 
            <br>
            <br>
      </form>
  <br>
  <hr width="75%" size="5" align="center" color= "#008000">
  <br>
 
  <!-- Part 3 -->

  <h3><li>Ich möchte mich in den nächsten Wochen hauptsächlich von regionalen Produkten ernähren und esse z. B. keine Bananen über den Kurszeitraum und esse dafür z. B. Äpfel aus Deutschland.</h3></li>
   <?php
    // define variables and set to empty values
    $Differen=489; $avera= 1.34;      $a= 8300000; $c= 11.61;$val= 52;$new= 0.02;
    $a= 8300000; $c= 11.61;
    ?>
    <br>
      <form action= " " method="post">
      <?php if ($days3 >= 0 && $days3 <= 7){
              }else{
                $errors = '* Day should be between 0 and 7'.'<br>';
                // echo '<div style="color: red; font-weight: bold; text-align: center">' . $errors . '<br/></div>';
                echo '<p><span class="bar">'. $errors . '</span></p>';
                }
                ?> 
          <label>Ich esse statt  <input type="text" name="days">  Bananen pro Woche  die gleiche Anzahl an Äpfeln pro Woche. 
          <br>
         <p><?php $resapp= ($days3 * $new); $resapp= sprintf('%.2f', $resapp);
                  if (!$days3 == 0){
                    echo "Daraus errechnet sich eine Einsparung von:".$resapp."kg CO"?><sub>2</sub><?php echo"e<br>";
                  } else {
                  echo "Daraus errechnet sich eine Einsparung von: 0 kg CO"?><sub>2</sub><?php echo"e<br>";
                  }
            ?></p>
          <br>
          <?php if ($week3 >= 0 && $week3 <= 52){
                }else{
                  $errors = '* Week should be between 0 and 52'.'<br>';
                  // echo '<div style="color: red; font-weight: bold; text-align: center">' . $errors . '<br/></div>';
                  echo '<p><span class="bar">'. $errors . '</span></p>';
                  }?>
          <label>Durchführung hiervon in x Wochen <input type="text" name="week">
          <br>
          <p><?php $weeapp=((float)$resapp * (float)$week3);$weeapp= sprintf('%.2f', $weeapp);
            if (!$week3 == 0){
              echo "Daraus errechnet sich eine Einsparung von:".  (float)$weeapp."kg CO"?><sub>2</sub><?php echo"e<br>";
           } else {
              echo "Daraus errechnet sich eine Einsparung von: 0 kg CO"?><sub>2</sub><?php echo"e<br>";
           }
          ?></p>
          <br>
          <?php $ave2= ($val * $resapp);$ave2= sprintf('%.2f', $ave2);
           if (!$days3 == 0) {
            echo "Durchführung ein Jahr: 52  ==>    ". $ave2 ."kg CO"?><sub>2</sub><?php echo"e<br>";
            }else {
              echo "Durchführung ein Jahr: 52  ==>  0 kg CO"?><sub>2</sub><?php echo"e<br>";
            }?>
             
          <br>
          <p>  <?php echo "Machen das 10 % der Bevölkerung ein Jahr lang ergibt sich:   "?>
          <span class="bar"><?php $b2= ((($a*$ave2)/1000)/1000000); $b2= sprintf('%.2f', $b2);
                                  if (!$days3 == 0) {
                                  echo $b2."Mio. t CO"?><sub>2</sub><?php echo"e<br>";
                                  }else{
                                    echo " 0 Mio. t CO"?><sub>2</sub><?php echo"e<br>";
                            }?> </span></p>
          <br>
          <p><?php echo "Das entspricht den Emissionen von :   "?>
          <span class="bar"><?php $numb= (($b2/$c)*1000000);$numb= sprintf('%.2f', $numb);
                                  if (!$days3 == 0) {
                                          echo $numb." Personen<br>";
                                          }else{
                                            echo " 0 Personen<br>";
                              }?> </span></p>
          <br>
          <input type="submit" name="submit3" value="Submit">  
          <br>
      </form>
      <hr width="75%" size="5" align="center" color= "#008000">
      <br>

 <!-- Part 4 -->
 <h3><li>In den nächsten X Wochen kaufe ich X Flaschen weniger Flaschenwasser und trinke dafür Leitungswasser.</h3></li>
    <?php
    // define variables and set to empty values
    $Differen=489; $avera= 1.34;      $a= 8300000; $c= 11.61;$val= 52;$new= 0.02;
    $a= 8300000; $c= 11.61;
    ?>
    <br>

      <form action= " " method="post"> 
      <?php if ($days4 >= 0 && $days4 <= 7){
              }else{
                $errors = '* Day should be between 0 and 7'.'<br>';
                // echo '<div style="color: red; font-weight: bold; text-align: center">' . $errors . '<br/></div>';
                echo '<p><span class="bar">'. $errors . '</span></p>';
                }
                ?>
          <label>Ich kaufe in einer Woche  <input type="text" name="days">  Liter weniger Mineralwasser und trinke dafür Leitungswasser. 
          <br>
          <p><?php $parts= "kg CO2e";$resapp= ($days4 * $new); $parts= sprintf('%.2f', $parts);
              if (!$days4 == 0){
                echo "Daraus errechnet sich eine Einsparung von:".$resapp." g CO"?><sub>2</sub><?php echo"e<br>";
              } else {
              echo "Daraus errechnet sich eine Einsparung von: 0 g CO"?><sub>2</sub><?php echo"e<br>";
              }
          ?></p>          
          <br>
          <?php if ($week4 >= 0 && $week4 <= 52){
                }else{
                  $errors = '* Week should be between 0 and 52'.'<br>';
                  // echo '<div style="color: red; font-weight: bold; text-align: center">' . $errors . '<br/></div>';
                  echo '<p><span class="bar">'. $errors . '</span></p>';
                  }?>
          <label>Durchführung hiervon in x Wochen<input type="text" name="week">
          <br>
          <?php $weeapp=($parts * $week4);$weeapp= sprintf('%.2f', $weeapp);
                if (!$week4 == 0){
                          echo "Durchführung ein Jahr:".$weeapp." kg CO"?><sub>2</sub><?php echo"e<br>";
                      } else {
                          echo "DDurchführung ein Jahr: 0 kg CO"?><sub>2</sub><?php echo"e<br>";
          }?></p> 
          <br>
          <?php $ave2= ($val * $resapp); $ave2= sprintf('%.2f', $ave2);
                if (!$days4 == 0) {
                        echo "Durchführung ein Jahr: 52  ==>    ". $ave2 ."kg CO"?><sub>2</sub><?php echo"e<br>";
                    }else {
                          echo "Durchführung ein Jahr: 52  ==>  0 kg CO"?><sub>2</sub><?php echo"e<br>";
          }?>
          <br>
          <p>  <?php echo "Machen das 10 % der Bevölkerung ein Jahr lang ergibt sich:   "?>
          <span class="bar"><?php $b2= ((($a*$ave2)/1000)/1000000);$b2= sprintf('%.2f', $b2);
                                  if (!$days4 == 0) {
                                    echo $b2." Mio. t CO"?><sub>2</sub><?php echo"e<br>";
                                    }else{
                                      echo " 0 Mio. t CO"?><sub>2</sub><?php echo"e<br>";
                            }?> </span></p>                           
          <br>
          <?php echo "Das entspricht den Emissionen von:   "?>
          <p><span class="bar"><?php $numb=(($b2/$c)*1000000);$numb= sprintf('%.2f', $numb);
                                  if (!$days4 == 0) {
                                      echo $numb." Personen<br>";
                                      }else{
                                        echo " 0 Personen<br>";
                            }?> </span></p>
          <br>
          <input type="submit" name="submit4" value="Submit">  
          <br>
          <br>
      </form>
    </ol>
    </div>
  </body>  
</html>
