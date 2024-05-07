<?php 
//start session before print anything in php because of bugs
session_start();
//initialisation of vars in cgf file and functions
$io="start";
$e2=require_once ("function.php");// cut 
$e=require_once "cfg.php";//a
$varlog=require("secure/secure.php");
//bug scrchg deb
if(array_key_exists("scrchg", $_POST)) {
    $_SESSION["autoscr"]+=1;
    if( $_SESSION["autoscr"]>2) {
    $_SESSION["autoscr"]=0;
    }
    }

if(preg_match("/(android|webos|avantgo|iphone|ipod|bolt|boost|cricket|docomo|fone|hiptop|opera mini|mini|kitkat|mobi|palm|phone|pie|tablet|up\.browser|up\.link|webos|wos)/i",$user_agent ))
{
    $cssdetect = "pourc.php";//"pourcm.php"; test des % dans les css!.?
    $_SESSION["coefm"]=2;$_SESSION["scale"]=0.650;
}
else{
    $cssdetect = "pourc.php";
    $_SESSION["coefm"]=1;$_SESSION["scale"]=1;
}

if( $_SESSION["autoscr"]==1) {
$_SESSION["coefm"]=2;
$_SESSION["scale"]=0.65;
}
if( $_SESSION["autoscr"]==0) {
$_SESSION["coefm"]=1;$_SESSION["scale"]=1;
}
$_SESSION["coefm"]=1;$_SESSION["scale"]=1;//sortir des reglages car bug
//bug scrchg fin
// Create connection
$conn = new mysqli($servername, $username, $password);
require_once ("pourc.php");//css detected in cfg
//doc 2479 / 3504
//const eld = document.getElementById("docDIV");
//eld.scrollLeft = 50;
//	eld.scrollTop = 10;
?>

<style>



button{
	border-top-color : #E5E5E5 ;
border-right-color : #BBBAB9;
border-bottom-color : #BBBAB9;
border-left-color : #E5E5E5 ;
	   
  -webkit-box-shadow: 1px 1px 1px #BBBAB9;
  -moz-box-shadow: 1px 1px 1px #BBBAB9;
  box-shadow: 1px 1px 1px #BBBAB9;
  position:relative;

}
button:hover{
	scale:0.99;
  -webkit-box-shadow: 2px 2px 2px grey;
  -moz-box-shadow: 2px 2px 2px grey;
  box-shadow: 2px 2px 2px grey;
  position:relative;

}
input{
  -webkit-box-shadow: 2px 2px 2px grey;
  -moz-box-shadow: 2px 2px 2px grey;
  box-shadow: 2px 2px 2px grey;
  position:relative;

}

.graschk + label{
	color: grey;
	 font-weight: 10;


}
.graschk:checked +label{
	color: red; 
	font-weight: bold ;
	 border-radius: 15px;
    font-style: normal;
	 font-weight: 2000;


}

.barchk + label{
	color: grey;
	 font-weight: 10;


}
.barchk:checked +label{
	color: red; 
	font-weight: bold ;
	 border-radius: 15px;
    font-style: normal;
	 font-weight: 1000;
	 text-decoration-line: line-through;
}
.surchk + label{
	color: grey;
	 font-weight: 10;


}
.surchk:checked +label{
	color: red; 
	font-weight: bold ;
	 border-radius: 15px;
    font-style: normal;
	 font-weight: 1000;
	 text-decoration-line: underline;
}

.itachk + label{
	color: grey;
	 font-weight: 10;


}
.itachk:checked +label{
	color: red; 
	font-weight: bold ;
	 border-radius: 15px;
    font-style: normal;
	 font-weight: 1000;
	  font-style: italic;
	 
}


.btooltip .btooltiptext {
    visibility: hidden;
    width: 120px;
    background-color: green;
    color: #fff;
    text-align: center;
    border-radius: 6px;
    padding: 5px 0;
	width: 370px; height: 110px;
    /* Position the tooltip */
    position: absolute;
    z-index: 1;
	left : 0px;
	top:-125px;
}

.btooltip:hover .btooltiptext {
    visibility: visible;
	transition: visibility 0s 1.5s;
}

.avtooltip {
 
}
.Cinputkey {
visibility: <?php if ($_SESSION["editF"]==true){echo "visible;";} else {echo "hidden;";}  ?>	
}
.Cinputkey .Cinputkeyv{
	width: 0%;visibility: hidden;
}
.Cinputkey .Cinputkeyi{
	  visibility: visible;
	  visibility: <?php if ($_SESSION["editF"]==true){echo "visible;";} else {echo "hidden;";}  ?>
}
.Cinputkey:hover .Cinputkeyi{
	  visibility: hidden;
}
.Cinputkey:hover .Cinputkeyv{
	width: 800%;visibility: visible;

}
.avtooltip .avtooltiptext {
    visibility: hidden;
	font-size:20px;
    width: 120px;
    background-color: orange;
    color: #fff;
    text-align: center;
    border-radius: 6px;
    padding: 5px 0;
	width: 280px; height: 110px;
    /* Position the tooltip */
    position: absolute;
    z-index: 1;
	left : 0px;
	bottom:-125px;
}

.avtooltip:hover .avtooltiptext {
    visibility: visible;
	transition: visibility 0s 1.5s;
}
.vtooltip {
 
}
.vtooltip .vtooltiptext {
    visibility: hidden;
    width: 120px;
    background-color: blue;
    color: #fff;
    text-align: center;
    border-radius: 6px;
    padding: 5px 0;
	width: 370px; height: 110px;
    /* Position the tooltip */
    position: absolute;
    z-index: 1;
	left : 0px;
	bottom:-125px;
}

.vtooltip:hover .vtooltiptext {
    visibility: visible;
	transition: visibility 0s 1.5s;
}
.ttg {
 
}
.ttg .ttgt {
    visibility: hidden;
    width: 20px;
    background-color: blue;
    color: #fff;
    text-align: center;
    border-radius: 6px;
    padding: 5px 0;
	width: 370px; height: 110px;
    /* Position the tooltip */
    position: absolute;
    z-index: 1;
	left : -125px;
	bottom: 0px;
}

.ttg:hover .ttgt {
    visibility: visible;
	transition: visibility 0s 1.5s;
}
.CeditF {
	visibility: <?php if ($_SESSION["editF"]==true){echo "visible;";} else {echo "hidden;";}  ?>
}
.divbutton {
visibility: <?php if ($_SESSION["editF2"]==true){echo "visible;";} else {echo "hidden;";}  ?>
 position: absolute; margin: 0 !important;  
transform-origin: 0% 0%;
top: 125px;
left: 0px;

 opacity: 0.4;

background-size: 100% 100%;
background-repeat:no-repeat;
width: 370px; height: 65px;
background-image: url(flym.png);
      }
.divbutton:hover { 

    opacity: 1.0;
      }
.PTS {
	opacity: 0.1;
  --b: 3px;   /* border thickness */
  --s: .45em; /* size of the corner */
  --color: #373B44;
  
  padding: calc(.21px + var(--s)) calc(.29px + var(--s));
  color: var(--color);
  --_p: var(--s);
  background:
    conic-gradient(from 90deg at var(--b) var(--b),#0000 90deg,var(--color) 0)
    var(--_p) var(--_p)/calc(100% - var(--b) - 2*var(--_p)) calc(100% - var(--b) - 2*var(--_p));
  transition: .3s linear, color 0s, background-color 0s;
  outline: var(--b) solid #0000;
  outline-offset: .6em;
  font-size: 16px;

  border: 0;

  user-select: none;
  -webkit-user-select: none;
  touch-action: manipulation;
}

.PTS:hover,
.PTS:focus-visible{
	opacity: 1;
  --_p: 0px;
  outline-color: var(--color);
  outline-offset: .05em;
}

.PTS:active {
  background: var(--color);
  color: #fff;
 
}

.Iplaque{
	width: 370px; height: 125px;
position:absolute; left: 0px;
				top: 1px;
				align-self: start;
scale: 1 1;
position: absolute;
opacity: 0.53;
margin: 0 !important;
text-align: left; 
background-image: url(flym.png);
background-size: 100% 100%;
background-repeat:no-repeat;

			  
}

.Iplaque:hover {
  opacity: 1.0;
}
.layerElementsPb {
   -webkit-animation: 1s linear 0s infinite alternate move_lpb;
          animation: 1s linear 0s infinite alternate move_lpb;
}
@-webkit-keyframes move_lpb { from { opacity:0.3; } to { opacity:1; }  }
        @keyframes move_lpb  { from { opacity:0.3; } to { opacity:1; }  }

</style>

