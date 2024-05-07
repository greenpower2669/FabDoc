<?php// dependency/ask.php
?>
<!DOCTYPE HTML>  
<html>
<head>
<style>
.error {color: #FF0000;}
</style>
</head>
<body>  

<?php
//initialisation of vars in cgf file and functions en trop est la prtie init à supp
$io="start";
$e2=require_once ("function.php");// cut 
$e=require "cfg.php";//a
$varlog=require("secure/secure.php");
//$io=$io."..".fromrightc("123456789",-2); test use, is ok!



// Create connection
$conn = new mysqli($servername, $username, $password);
//open log and time
date_default_timezone_set('Europe/Paris');
$read=file_get_contents("include/log.txt"); 
$logbat=fopen("include/log.txt","w+");// open file for writing

$cutdate= "Le ".date("d/m/Y")." à ".date("H")."h".date("i")." et ".date("s")."s ";
$lenght=filesize("include/log.txt")+"1";
$logall=$cutdate." Connected successfully".$e2." ".$a.$e.Chr(13).$read;
// if the log to database this result will be return!

// Check connection
if ($conn->connect_error) {
  die("Connection failed: " . $conn->connect_error);
  fwrite($logbat,$cutedate.$read." was not Connected".Chr(13));
}

//echo $read.$lenght;

fwrite($logbat,$logall);
fclose($logbat);
$varlogsql=require("secure/varlogsql.php");
//echo "Connected successfully";
//echo $read;

// define variables and set to empty values
$nameErr = $emailErr = $genderErr = $websiteErr = "";
$name = $email = $gender = $comment = $website = "";

if ($_SERVER["REQUEST_METHOD"] == "POST") {
  if (empty($_POST["name"])) {
    $nameErr = "Name is required";
  } else {
    $name = test_input($_POST["name"]);
    // check if name only contains letters and whitespace
    if (!preg_match("/^[a-zA-Z-' ]*$/",$name)) {
      $nameErr = "Only letters and white space allowed";
    }
  }
  
  if (empty($_POST["email"])) {
    $emailErr = "Email is required";
  } else {
    $email = test_input($_POST["email"]);
    // check if e-mail address is well-formed
    if (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
      $emailErr = "Invalid email format";
    }
  }
    
  if (empty($_POST["website"])) {
    $website = "";
  } else {
    $website = test_input($_POST["website"]);
    // check if URL address syntax is valid (this regular expression also allows dashes in the URL)
    if (!preg_match("/\b(?:(?:https?|ftp):\/\/|www\.)[-a-z0-9+&@#\/%?=~_|!:,.;]*[-a-z0-9+&@#\/%=~_|]/i",$website)) {
      $websiteErr = "Invalid URL";
    }
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
}


?>

<h2>Demande d'enregistrement</h2>
<p><span class="error">* required field</span></p>
<form method="post" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]);?>">  
  Name: <input type="text" name="name" value="<?php echo $name;?>">
  <span class="error">* <?php echo $nameErr;?></span>
  <br><br>
  E-mail: <input type="text" name="email" value="<?php echo $email;?>">
  <span class="error">* <?php echo $emailErr;?></span>
  <br><br>
  Website: <input type="text" name="website" value="<?php echo $website;?>">
  <span class="error"><?php echo $websiteErr;?></span>
  <br><br>
  Comment: <textarea name="comment" rows="5" cols="40"><?php echo $comment;?></textarea>
  <br><br>
  Gender:
  <input type="radio" name="gender" <?php if (isset($gender) && $gender=="female") echo "checked";?> value="female">Female
  <input type="radio" name="gender" <?php if (isset($gender) && $gender=="male") echo "checked";?> value="male">Male
  <input type="radio" name="gender" <?php if (isset($gender) && $gender=="other") echo "checked";?> value="other">Other  
  <span class="error">* <?php echo $genderErr;?></span>
  <br><br>
    //my add
  <p style="text-align: center;"><input name="select" required="required" type="checkbox" />Bonjour</p>
 <form action="<h2>function.php</h2>" method="post">
<p style="text-align: center;"><input name="val0m" class="button" type="button" value="-" /><input name="val0p" type="button" value="+" /></p>
<p style="text-align: center;"><input name="val1m" class="button" type="button" value="-" /><input name="val1p" type="button" value="+" /></p>

<p style="text-align: center;"><input name="val2m" class="button" type="button" value="-" /><input name="val2p" type="button" value="+" /></p>

<p style="text-align: center;"><input name="val3m" class="button" type="button" value="-" /><input name="val3p" type="button" value="+" /></p>


  
   
        <input type="submit" name="button1"
                class="button" value="Button1" />
          
        <input type="submit" name="button2"
                class="button" value="Button2" />
    


  //
  <input type="submit" name="submit" value="Submit">  
</form>

<?php
echo "<h2>Your Input:</h2>";
echo $name;
echo "<br>";
echo $email;
echo "<br>";
echo $website;
echo "<br>";
echo $comment;
echo "<br>";
echo $gender;
echo "io: ".chr(13).$io.chr(13);
echo "log :".chr(13).$logall.chr(13);
?>

</body>
</html>

