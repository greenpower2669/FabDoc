<?php

$allwintop0=require_once ("allwintop0.php");
//ici commandes root ligne de commande géné
//if ($_SERVER["HTTP_X_FORWARDED_PROTO"]=="http"){
  //fermer balise php <META HTTP-EQUIV="Refresh" CONTENT="0; URL=https://www.tec4all.org/bat/">réouvrire balise php
//}


// après pour pouvoir faire une méthode avec une portée multiple, transformation de index html en php
?>

<html>
  <head>
  <meta name="viewport" content="width=device-width, initial-scale=1.0;height=device-height, initial-scale=1.0">
</head>
  <Div><?php
                    ///////////<<<<<<<<<<<<<<<<<<<<<<<<<<ret srcchg
                    if(array_key_exists('scrchg', $_POST)) { ?>
                    <META HTTP-EQUIV="Refresh" CONTENT="0; <?php echo htmlspecialchars("index.php?reset_screen=yes");?>">
                    <?php }
                    if(array_key_exists('reset_screen', $_GET)) {
                    if ($_GET['reset_screen']=="yes") {
                      ?>
                    <META HTTP-EQUIV="Refresh" CONTENT="0; <?php echo htmlspecialchars("index.php");?>">
                    <?php
                    }    }     

                      ///////////<<<<<<<<<<<<<<<<<<<<<<<<<<ret srcchg
if(array_key_exists('infot', $_POST)) {
  $_SESSION["info"]=$_POST["infot"];
  $_SESSION["idx3"]="main";
  if ($_POST["infot"]=="scrm"){
  $_SESSION["scale"]-=0.25;setinfo("");
  
  }
  
  if ($_POST["infot"]=="scrp"){
    $_SESSION["scale"]+=0.25;setinfo("");
  }
  if ($_POST["infot"]=="admin"){
    $_SESSION["admincmd"]="admin";setinfo(""); 
  }
  if($_POST["infot"]=="reset") {
    //echo "lol";
    resetsession();setinfo("");
    }
  if ($_POST["infot"]=="cmd"){
    if ($_SESSION["admincmd"]=="admin"){
      $_SESSION["admincmd"]="iopossible";setinfo("");
    } 
  }
  if ($_POST["infot"]=="return"){setinfo("");
    $_SESSION["idx3"]="main";
  }
  if ($_POST["infot"]=="hide"){
      $_SESSION["hideio"]=!$_SESSION["hideio"]; setinfo("");
  }
  //HTTP_X_FORWARDED_PROTO pour forcer http à https
   //existe?dans matrice
   //$testexiste=implode($_SESSION["matrice"]);
  // if(preg_match($_SESSION["info"] , $testexiste)) {
    //$_SESSION["info"]="trouvé";
   //}
}


$phaut=5*1;//$_SESSION["coefm"];

$pgch=1*$_SESSION["coefm"];

$pmid=100-$phaut;
$pbas=0;
$pcadre=0;
$pcadreb=4;
if ($_SESSION["coefm"]!=1){
  $phaut=5*1;
  $pgch=0;
$pmid=(100-$phaut)*0.9;
$pbas=(100-$phaut)*0.05;
$pcadre=2;
$pcadreb=0;
}

?>
<html name="root">


<frameset rows=
"<?php echo $phaut;?>%,
<?php echo ($pmid*0.85);?>%,
<?php echo $pbas;?>%,
<?php echo $pcadreb;?>%" 

name="00" frameborder="no" 
framespacing="0" scrolling="no" noresize>
  <frame src="idx.php" name="top"></frame>
<frameset cols="
<?php echo $pcadre;?>%,
<?php echo $pgch;?>%,
<?php echo (100-$pgch);?>%,
<?php echo "2";?>%
" name="0" frameborder="no" 
framespacing="0" scrolling="no" noresize>

    <frame src="cadre.php" name="cadreg" id="cadreg" >
    <frame src="idx2.php" name="left" id="left" >
      <frameset rows=
"90%,

0%" 

name="00" frameborder="no" 
framespacing="0" scrolling="no" noresize>
        <frame src="idx3.php" name="view" id="view" scrolling=no onscroll="souris(event);" style="overflow: scroll;">
        <frame src="cadreb.php" name="cadreb" id="cadreb" ></frameset>
    <frame src="cadred.php" name="cadred" id="cadred" >
  
  
  </frameset> <frame src="idx2.php" name="untop"></frame>
   <frame src="cadrebb.php" name="untopb"></frame>
</frameset>

</frameset>

  <noframes>


</html>