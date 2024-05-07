<?php
  //header('<ital>/bat/idx2.php</ital>'); //redir bug!
  // or die();
   
    //exit();
$allwintop0=require_once ("allwintop0.php");
//open log and time
date_default_timezone_set('Europe/Paris');
$read=file_get_contents("include/log.txt"); 
$logbat=fopen("include/log.txt","w+");// open file for writing

$cutdate= datestr();//codedatestr();
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
//echo "Connected successfully";
//echo $read;

// define variables and set to empty values


//

?>
<!DOCTYPE HTML>  
<body class="view">
  <!-- le div ouvert en php par allwinscale.php--> 
<?php 
  //com div ouverte et css tyle definition 
  $allwintop0=require_once ("allwinscale.php");
?>
<span style="left:12px;top:34px;">
lol
</span>
<?php
// $GLOBALS bug implode
// $_SERVER
// $_GET
// $_POST
// $_FILES
// $_COOKIE
// $_SESSION bug implode
// $_REQUEST
// $_ENV
?>

<!--<form class="view"> -->
  


   
<form method="post" Class="view" target="view" action="<?php echo htmlspecialchars("idx3.php");?>">

</form>

<?php

//echo "<h10>Your Input:";
if (!$_SESSION["hideio"]){
  echo $_SESSION["hideio"];
}
affglob();

/////////////////////////////////////////////////////////dl
?>
 
                      
</form>



<!-- <p><span class="error">* required field</span></p>-->
<!--<form class="petit" method="post" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]);?>">  

</form>-->

<?php
//echo "<h10>Your Input:";
if ($_SESSION["hideio"]){

echo "<br>";
echo $name;
echo "<br>";
echo $email;
echo "<br>";
echo $website;
echo "<br>";
echo $comment;
echo "<br>";
echo $gender;
echo $affdeb.$_SESSION["hideio"].$afffin;
echo $affdeb."AD = ".$_SESSION["AD"].$afffin;
echo $affdeb."SC = ".$_SESSION["SC"].$afffin;
echo $affdeb."G = ".$_SESSION["G"].$afffin;
echo $affdeb."CHG = ".$_SESSION["CHG"].$afffin;
// $GLOBALS bug implode
// $_SERVER
// $_GET
echo implode(" ",$_POST);
// $_FILES
echo implode(" ",$_COOKIE);
// $_SESSION bug implode
echo implode(" ",$_REQUEST);
echo implode(" ",$_ENV);
echo "io: ".chr(13).$io.chr(13);
echo "log :".chr(13).$logall.chr(13);
}

echo "<h10>";
?>

<?php
//session_start();//update
/*session is started if you don't write this line can't use $_Session  global variable*/
//$_SESSION["newsession"]=$value;
/*it is my new session*/
//$_SESSION["newsession"]=$updatedvalue;
/*session updated*/
?>

<?php
//session_start();
/*session is started if you don't write this line can't use $_Session  global variable*/
//$_SESSION["newsession"]=$value;
//unset($_SESSION["newsession"]);
/*session deleted. if you try using this you've got an error*/
//fichier file

function getUserIpAddr(){
  if(!empty($_SERVER['HTTP_CLIENT_IP'])){
      //ip from share internet
      $ip = $_SERVER['HTTP_CLIENT_IP'];
  }elseif(!empty($_SERVER['HTTP_X_FORWARDED_FOR'])){
      //ip pass from proxy
      $ip = $_SERVER['HTTP_X_FORWARDED_FOR'];
  }else{
      $ip = $_SERVER['REMOTE_ADDR'];
  }
  return $ip;
}

echo 'User Real IP - '.getUserIpAddr();
?>
<!-- le div qui fut ouvert en php par allwinscale.php-->

<form id="03" method="post" target="view" action="<?php echo htmlspecialchars("idx3.php");?>">