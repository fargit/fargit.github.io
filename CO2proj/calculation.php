<!DOCTYPE HTML>  
<html>
<head>
<style>
.error {color: #00008B;}
</style>
</head>
<body>  

<?php
// define variables and set to empty values
$nameErr = $emailErr = $genderErr = $websiteErr = "";
$name = $email = $gender = $comment = $website = "";
$meat = 1314; $vegetarian = 978; $Difference=336; $average= 0.92;

if ($_SERVER["REQUEST_METHOD"] == "POST") {
  if (empty($_POST["days"])) {
    $nameErr = "Days is required";
  } else {
    $tag = test_input($_POST["days"]);
  }
  
  if (empty($_POST["email"])) {
    $emailErr = "Email is required";
  } else {
    $email = test_input($_POST["email"]);
  }
    
  if (empty($_POST["website"])) {
    $website = "";
  } else {
    $website = test_input($_POST["website"]);
  }

  if (empty($_POST["comment"])) {
    $comment = "";
  } else {
    $comment = test_input($_POST["comment"]);
  }

  if (empty($_POST["gender"])) {
    $genderErr = "Gender is required";
  } else {
    $gender = test_input($_POST["gender"]);
  }
  $cas = $tag * $average ;

}

function test_input($data) {
  $data = trim($data);
  $data = stripslashes($data);
  $data = htmlspecialchars($data);
  return $data;
}
?>

<h2>PHP Form Validation Example</h2>
<p><span class="error">Die durchschnittlichen Treibhausgasemissionen für einen durchschnittliche Ernährung mit Fleisch: 1314 (kg CO2e/Jahr)</span></p>
<p><span class="error">Die durchschnittlichen Treibhausgasemissionen für einen vegetarische Ernährung betragen: 978 (kg CO2e/Jahr)</span></p>
<p><span class="error">Differenz der beiden Ernährungsstile und damit die Einsparung von THG bei vegetarischer Ernährung: 336 (kg CO2e/Jahr)</span></p>
<p><span class="error">wir errechnen daraus einen durchschnittlichen täglichen Wert: 0,92 (kg CO2e/Jahr)</span></p>

<form method="post" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]);?>">  
  Ich stelle an <input type="number" name="name">  Tagen pro Woche auf vegetarische Ernährung um. 
  <span class="error"> <?php echo $nameErr;?></span>
  <br><br>


  <br><br>
  <br><br>
  <br><br>
  E-mail: <input type="text" name="email">
  <span class="error">* <?php echo $emailErr;?></span>
  <br><br>
  Website: <input type="text" name="website">
  <span class="error"><?php echo $websiteErr;?></span>
  <br><br>
  Comment: <textarea name="comment" rows="5" cols="40"></textarea>
  <br><br>
  Gender:
  <input type="radio" name="gender" value="female">Female
  <input type="radio" name="gender" value="male">Male
  <input type="radio" name="gender" value="other">Other
  <span class="error">* <?php echo $genderErr;?></span>
  <br><br>
  <input type="submit" name="submit" value="Submit">  
</form>

<?php
echo "<h2>Your Input:</h2>";
echo $cas;
echo "<br>";
echo $email;
echo "<br>";
echo $website;
echo "<br>";
echo $comment;
echo "<br>";
echo $gender;
?>
