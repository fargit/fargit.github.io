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
        $emissions = 0.028; $avoid1 = 0;$avoid2 = 0;$stunde = 80.11;
        $emissions_bus = 6.4; $rout = 0; $rout1 = 0; $rout2 = 0; 
        $val= 52; $a= 8300000; $c= 11.61; $distance =0;$week=0;$implement =0;$distance1 =0;$week1=0;$implement1 =0;
        $distance2 =0;$week2=0;$implement2 =0;$implement3 =0;

        if (isset($_POST['submit1'])) {
            if (isset($_POST['days']) & isset($_POST['week'])) {
                $days = $_POST['days'];
                $week = $_POST['week'];
            }
        }elseif (isset($_POST['submit2'])){
            if (isset($_POST['days']) & isset($_POST['week'])) {
                $days1 = $_POST['days'];
                $week1 = $_POST['week'];
            }
          }elseif (isset($_POST['submit3'])){
            if (isset($_POST['hours']) &isset($_POST['days']) & isset($_POST['week'])) {
                $hours = $_POST['hours'];
                $days2 = $_POST['days'];
                $week2 = $_POST['week'];
            }
          }elseif (isset($_POST['submit4'])){
            if (isset($_POST['days']) & isset($_POST['month']) & isset($_POST['days1']) & isset($_POST['month1']) 
                & isset($_POST['days2']) & isset($_POST['month2'])& isset($_POST['days3']) & isset($_POST['month3'])
                & isset($_POST['days4']) & isset($_POST['month4'])) {
                $days3 = $_POST['days'];
                $days4 = $_POST['days1'];
                $days5 = $_POST['days2'];
                $days6 = $_POST['days3'];
                $days7 = $_POST['days4'];
                $month = $_POST['month'];
                $month1 = $_POST['month1'];
                $month2 = $_POST['month2'];
                $month3 = $_POST['month3'];
                $month4 = $_POST['month4'];
                $month6 = $_POST['month5'];
            }
          }
     
        ?>
          <h2>   konkrete klimafit-Challenge-Aufgaben: Energie</h2>
      <br>
      <br>
      <ol>
  <!-- Part 1 -->

  <h3><li>Ich möchte Stand-by-Verluste vermeiden und schalte meinen Fernseher, Receiver und DVD-Spieler aus, wenn ich ihn nicht nutze.</li></h3>
        <form action= " " method="post"> 

            <label>Ich vermeide an  <input type="text" name="days"> Tagen Standby meiner Geräte (Fernseher, Receiver, DVD).</label>
            <br>
            <p><?php $res= ($emissions * $days);$res= sprintf('%.2f', $res);
              if (!$days == 0){
                echo "Daraus errechnet sich eine Einsparung von: ".$res." Kg CO"?><sub>2</sub><?php echo"e<br>";
              } else {
              echo "Daraus errechnet sich eine Einsparung von: 0 Kg CO"?><sub>2</sub><?php echo"e<br>";
              }
            ?></p>
            <br>
            <label>Durchführung  hiervon in  <input type="text" name="week"> Wochen</label>
            <?php $weeks=($week * $res); $weeks= sprintf('%.2f', $weeks);
                  if (!$week == 0){
                     echo " ". $weeks." kg CO"?><sub>2</sub><?php echo"e<br>";
                  } else {
                     echo " 0 kg CO"?><sub>2</sub><?php echo"e<br>";
                  }
            ?>
            <br>
            <?php $ave= ($val * $res); $ave= sprintf('%.2f', $ave);
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
<h3><li>Ich möchte Stand-by-Verluste vermeiden und schalte meinen PC, Drucker und Monitor aus, wenn ich ihn nicht nutze.</li></h3>
        <form action= " " method="post"> 

            <label>Ich vermeide an  <input type="text" name="days"> Tagen Standby meiner Geräte (PC, Monitor, Drucker).</label>
            <br>
            <p><?php $res= ($emissions * $days1);$res= sprintf('%.2f', $res);
              if (!$days1 == 0){
                echo "Daraus errechnet sich eine Einsparung von: ".$res." Kg CO"?><sub>2</sub><?php echo"e<br>";
              } else {
              echo "Daraus errechnet sich eine Einsparung von: 0 Kg CO"?><sub>2</sub><?php echo"e<br>";
              }
            ?></p>
            <br>
            <label>Durchführung  hiervon in  <input type="text" name="week"> Wochen</label>
            <?php $weeks1=($week1* $res); $weeks1= sprintf('%.2f', $weeks1);
                  if (!$week1 == 0){
                     echo " ". $weeks1." kg CO"?><sub>2</sub><?php echo"e<br>";
                  } else {
                     echo " 0 kg CO"?><sub>2</sub><?php echo"e<br>";
                  }
            ?>
            <br>
            <?php $ave= ($val * $res); $ave= sprintf('%.2f', $ave);
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
             <input type="submit" name="submit2" value="Submit">  

            <br>
      </form>
      <br>
    <hr width="75%" size="5" align="center" color= "#008000">
    <br>
    <br>

<!-- Part 3 -->
<h3><li> Wenn ich auf der Arbeit in längere Besprechungen  oder in die Mittagpause gehe, stelle ich meinen PC und Monitor aus.</li></h3>
        <form action= " " method="post"> 

            <label>Ich stoßlüfte an <input type="text" name="days"> Tagen im <input type="text" name="month"> und an  <input type="text" name="days1"> Tagen im <input type="text" name="month1" > und an <input type="text" name="days2"> Tagen im <input type="text" name="month2" > <input type="text" name="days"> Tagen im <input type="text" name="month"> und an <input type="text" name="days4"> Tagen im <input type="text" name="month4"> und an</label>
            <br>
            <p><?php $res= (($stunde* $hours * $days2)/1000);$res= sprintf('%.2f', $res);
              if (!$days2 == 0){
                echo "Daraus errechnet sich eine Einsparung von: ".$res." Kg CO"?><sub>2</sub><?php echo"e<br>";
              } else {
              echo "Daraus errechnet sich eine Einsparung von: 0 Kg CO"?><sub>2</sub><?php echo"e<br>";
              }
            ?></p>
            <br>
            <label>Durchführung hiervon in x Wochen <input type="text" name="week"> Wochen</label>
            <?php $weeks2=($week2* $res); $weeks2= sprintf('%.2f', $weeks2);
                  if (!$days2 == 0){
                     echo " ". $weeks2." kg CO"?><sub>2</sub><?php echo"e<br>";
                  } else {
                     echo " 0 kg CO"?><sub>2</sub><?php echo"e<br>";
                  }
            ?>
            <br>
            <?php $ave= (45 * $res); $ave= sprintf('%.2f', $ave);
            if (!$days2 == 0) {
                echo "Würde ich ein Jahr lang X Stunden meinen PC auf der Arbeit ausstellen, dann hätte: ". $ave ." kg CO"?><sub>2</sub><?php echo"e<br>";
            }else {
              echo "Würde ich ein Jahr lang X Stunden meinen PC auf der Arbeit ausstellen, dann hätte: 0 kg CO"?><sub>2</sub><?php echo"e<br>";
            }?>
            <br>
            <p>  <?php echo "Machen das 10 % der Bevölkerung ein Jahr lang ergibt sich:   "?>
            <span class="bar"><?php $b= ((($a*$ave)/1000)/1000000);$b= sprintf('%.2f', $b);
                  if (!$days2 == 0) {
                  echo $b." Mio. t CO"?><sub>2</sub><?php echo"e<br>";
                  }else{
                    echo " 0 Mio. t CO"?><sub>2</sub><?php echo"e<br>";
                  }?> </span></p>
            <br>
            <p><?php echo "Das entspricht den Emissionen von:   "?>
            <span class="bar"><?php $numb= (($b/$c)*1000000);$numb= sprintf('%.2f', $numb);
                  if (!$days2 == 0) {
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
    <!-- Part 4 -->
<h3><li>Ich stoßlüfte an X Tagen und mache Fenster nicht auf Kipp. </li></h3>
        <form action= " " method="post"> 

            <label>Ich vermeide an  <input type="text" name="hours"> Stunden pro Tag an <input type="text" name="days"> Tage pro Woche auf der Arbeit  meinen PC zu nutzen und stelle ihn aus. </label>
            <br>
            <p><?php $res= (($stunde* $hours * $days2)/1000);$res= sprintf('%.2f', $res);
              if (!$days2 == 0){
                echo "Daraus errechnet sich eine Einsparung von: ".$res." Kg CO"?><sub>2</sub><?php echo"e<br>";
              } else {
              echo "Daraus errechnet sich eine Einsparung von: 0 Kg CO"?><sub>2</sub><?php echo"e<br>";
              }
            ?></p>
            <br>
            <label>Durchführung hiervon in x Wochen <input type="text" name="week"> Wochen</label>
            <?php $weeks2=($week2* $res); $weeks2= sprintf('%.2f', $weeks2);
                  if (!$days2 == 0){
                     echo " ". $weeks2." kg CO"?><sub>2</sub><?php echo"e<br>";
                  } else {
                     echo " 0 kg CO"?><sub>2</sub><?php echo"e<br>";
                  }
            ?>
            <br>
            <?php $ave= (45 * $res); $ave= sprintf('%.2f', $ave);
            if (!$days2 == 0) {
                echo "Würde ich ein Jahr lang X Stunden meinen PC auf der Arbeit ausstellen, dann hätte: ". $ave ." kg CO"?><sub>2</sub><?php echo"e<br>";
            }else {
              echo "Würde ich ein Jahr lang X Stunden meinen PC auf der Arbeit ausstellen, dann hätte: 0 kg CO"?><sub>2</sub><?php echo"e<br>";
            }?>
            <br>
            <p>  <?php echo "Machen das 10 % der Bevölkerung ein Jahr lang ergibt sich:   "?>
            <span class="bar"><?php $b= ((($a*$ave)/1000)/1000000);$b= sprintf('%.2f', $b);
                  if (!$days2 == 0) {
                  echo $b." Mio. t CO"?><sub>2</sub><?php echo"e<br>";
                  }else{
                    echo " 0 Mio. t CO"?><sub>2</sub><?php echo"e<br>";
                  }?> </span></p>
            <br>
            <p><?php echo "Das entspricht den Emissionen von:   "?>
            <span class="bar"><?php $numb= (($b/$c)*1000000);$numb= sprintf('%.2f', $numb);
                  if (!$days2 == 0) {
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
    <br></li></h3>
        <form action= " " method="post"> 

            <label>Ich vermeide an  <input type="text" name="hours"> Stunden pro Tag an <input type="text" name="days"> Tage pro Woche auf der Arbeit  meinen PC zu nutzen und stelle ihn aus. </label>
            <br>
            <p><?php $res= (($stunde* $hours * $days2)/1000);$res= sprintf('%.2f', $res);
              if (!$days2 == 0){
                echo "Daraus errechnet sich eine Einsparung von: ".$res." Kg CO"?><sub>2</sub><?php echo"e<br>";
              } else {
              echo "Daraus errechnet sich eine Einsparung von: 0 Kg CO"?><sub>2</sub><?php echo"e<br>";
              }
            ?></p>
            <br>
            <label>Durchführung hiervon in x Wochen <input type="text" name="week"> Wochen</label>
            <?php $weeks2=($week2* $res); $weeks2= sprintf('%.2f', $weeks2);
                  if (!$days2 == 0){
                     echo " ". $weeks2." kg CO"?><sub>2</sub><?php echo"e<br>";
                  } else {
                     echo " 0 kg CO"?><sub>2</sub><?php echo"e<br>";
                  }
            ?>
            <br>
            <?php $ave= (45 * $res); $ave= sprintf('%.2f', $ave);
            if (!$days2 == 0) {
                echo "Würde ich ein Jahr lang X Stunden meinen PC auf der Arbeit ausstellen, dann hätte: ". $ave ." kg CO"?><sub>2</sub><?php echo"e<br>";
            }else {
              echo "Würde ich ein Jahr lang X Stunden meinen PC auf der Arbeit ausstellen, dann hätte: 0 kg CO"?><sub>2</sub><?php echo"e<br>";
            }?>
            <br>
            <p>  <?php echo "Machen das 10 % der Bevölkerung ein Jahr lang ergibt sich:   "?>
            <span class="bar"><?php $b= ((($a*$ave)/1000)/1000000);$b= sprintf('%.2f', $b);
                  if (!$days2 == 0) {
                  echo $b." Mio. t CO"?><sub>2</sub><?php echo"e<br>";
                  }else{
                    echo " 0 Mio. t CO"?><sub>2</sub><?php echo"e<br>";
                  }?> </span></p>
            <br>
            <p><?php echo "Das entspricht den Emissionen von:   "?>
            <span class="bar"><?php $numb= (($b/$c)*1000000);$numb= sprintf('%.2f', $numb);
                  if (!$days2 == 0) {
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
    </ol>
    </div>
  </body>  
</html>
