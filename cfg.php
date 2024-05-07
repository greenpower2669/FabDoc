<?php
$a="a";
$nameErr = $emailErr = $genderErr = $websiteErr = "";
$name = $email = $gender = $comment = $website = "";
$affdeb="<p class=".chr(34)."s".chr(34)."> hide io :";$afffin="<br/></p>";
$affdebb="<p><input class=".chr(34)."buttonaff".chr(34)." type=".chr(34)."submit".chr(34)." value=".chr(34);$afffinb=chr(34)."/></p>";

if (!isset($_SESSION["user"])) {
    $_SESSION["lientemp"]="";
    $_SESSION["user"]="all";
    $_SESSION["coefm"]=1;//mobile ou 1
    $_SESSION["hideio"]=false;
    $_SESSION["AD"]=0;
    $_SESSION["SC"]=0;
    $_SESSION["G"]=0;
    $_SESSION["CHG"]=0;
    $_SESSION["BO"]=0;
    $_SESSION["info"]="";
    $_SESSION["scale"]=1;
    $_SESSION["admincmd"]="";
    $_SESSION["idx3"]="main";//main,dl,search
    $_SESSION["x"]=0;
    $_SESSION["y"]=0;
    $_SESSION["vx"]=0;
    $_SESSION["vy"]=0;
    $_SESSION["matrice"] = array();// plus bas son index
    $_SESSION["curseur"] = 1;
    $_SESSION["matrice"][0]= array("AD","SC","G","CHG","BO","info","KEY");
    $_SESSION["rebours"] = 0;
    $_SESSION["autoscr"] = 2;
    



}
else {$_SESSION["hideio"];

}

function resetsession(){
    $_SESSION["user"]="all";
    $_SESSION["autoscr"] = 2;
    $_SESSION["hideio"]=false;
    $_SESSION["AD"]=0;
    $_SESSION["SC"]=0;
    $_SESSION["G"]=0;
    $_SESSION["CHG"]=0;
    $_SESSION["BO"]=0;
    $_SESSION["info"]="";
    $_SESSION["admincmd"]="";
    $_SESSION["idx3"]="main";//main,dl,search
    $_SESSION["x"]=0;
    $_SESSION["y"]=0;
    $_SESSION["vx"]=0;
    $_SESSION["vy"]=0;
}
function setzero(){
  
    $_SESSION["AD"]=0;
    $_SESSION["SC"]=0;
    $_SESSION["G"]=0;
    $_SESSION["CHG"]=0;
    $_SESSION["BO"]=0;
    $_SESSION["info"]="";

}
//cssdetect $cssdetect pourc.CSS ou pour mobile ipad| horizontal
$user_agent = $_SERVER["HTTP_USER_AGENT"];


return " is set!";
?>