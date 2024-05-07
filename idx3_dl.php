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

if(array_key_exists('idxbt2', $_POST)) {
  resetsession();
}//val0m
if(array_key_exists('val0m', $_POST)) {
  $_SESSION["AD"]-=1;
}
if(array_key_exists('val1m', $_POST)) {
  $_SESSION["SC"]-=1;
}
if(array_key_exists('val2m', $_POST)) {
  $_SESSION["G"]-=1;
}
if(array_key_exists('val3m', $_POST)) {
  $_SESSION["CHG"]-=1;
}
if(array_key_exists('val4m', $_POST)) {
  $_SESSION["BO"]-=1;
}
if(array_key_exists('idxbtscreenm', $_POST)) {
  $_SESSION["scale"]-=0.25;
}

if($_SESSION["scale"]<1) {
  $_SESSION["scale"]=1;
}
if(array_key_exists('val0p', $_POST)) {
  $_SESSION["AD"]+=1;
}
if(array_key_exists('val1p', $_POST)) {
  $_SESSION["SC"]+=1;
}
if(array_key_exists('val2p', $_POST)) {
  $_SESSION["G"]+=1;
}
if(array_key_exists('val3p', $_POST)) {
  $_SESSION["CHG"]+=1;
}
if(array_key_exists('val4p', $_POST)) {
  $_SESSION["BO"]+=1;
}
if(array_key_exists('idxbtscreenp', $_POST)) {
  $_SESSION["scale"]+=0.25;
  //parent.frames["ftop"].location.reload(); bug
  //parent.frames["fleft"].location.reload(); bug
}
if(array_key_exists('idxbtio', $_POST)) {
  $_SESSION["hideio"]=!$_SESSION["hideio"]; 
  //echo "<h1>This is Button io that is selected</h1>";
}
?>
<!DOCTYPE HTML>  
<body class="view">
  <!-- le div ouvert en php par allwinscale.php--> 
<?php 
  //com div ouverte et css tyle definition 
  $allwintop0=require_once ("allwinscale.php");
?>



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
<h>_______________________________</h>
<!--<form class="view"> -->
  
<form method="post" Class="view" target="view" action="<?php echo htmlspecialchars("idx3.php");?>">
<form action="" method="post" enctype="multipart/form-data">
<input type="hidden" name="MAX_FILE_SIZE" value="20000">
<!-- Le champs 'hidden' doit être défini avant le champs 'file'  -->  
<label>Votre fichier</label> :
<input type="file" name="mon_fichier"><br>
<input type="submit" value="Envoyer">
</form>
   


</form>

<?php
if ($_FILES['nom_du_fichier']['error']) {
      switch ($_FILES['nom_du_fichier']['error']){
        case 1: // UPLOAD_ERR_INI_SIZE
          echo "Le fichier dépasse la limite autorisée par le serveur (fichier php.ini) !";
          break;
        case 2: // UPLOAD_ERR_FORM_SIZE
          echo "Le fichier dépasse la limite autorisée dans le formulaire HTML !";
          break;
        case 3: // UPLOAD_ERR_PARTIAL
          echo "L'envoi du fichier a été interrompu pendant le transfert !";
          break;
        case 4: // UPLOAD_ERR_NO_FILE
          echo "Le fichier que vous avez envoyé a une taille nulle !";
          break;
      }
    }else{
      // $_FILES['nom_du_fichier']['error'] vaut 0 soit UPLOAD_ERR_OK
      // ce qui signifie qu'il n'y a eu aucune erreur
    }
//echo "<h10>Your Input:";
if (!$_SESSION["hideio"]){
  echo $_SESSION["hideio"];
}
/////////////////////////////////////////////////////////dl
?>
 
  <?php 
  
    echo $affdebb."AD  ".$_SESSION["AD"].chr(34)." name=".chr(34)."val0p".$afffinb;
    echo $affdebb."SC ".$_SESSION["SC"].chr(34)." name=".chr(34)."val1p".$afffinb;
    echo $affdebb."G ".$_SESSION["G"].chr(34)." name=".chr(34)."val2p".$afffinb;
    echo $affdebb."CHG ".$_SESSION["CHG"].chr(34)." name=".chr(34)."val3p".$afffinb;
    echo $affdebb."BO ".$_SESSION["BO"].chr(34)." name=".chr(34)."val4p".$afffinb;
  ?>                      
</form>
<h>__________________________</h>


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


?>
<!-- le div qui fut ouvert en php par allwinscale.php-->

	</div>
</body>
</html>