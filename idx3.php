<?php
 $allwintop0=require ("allwintop0.php");


  //header('<ital>/bat/idx2.php</ital>'); //redir bug!
  // or die();
   //alertPHP(phpinfo());
   //phpinfo();
   
    // Exemple d'utilisation de la classe CSV
//$dataOl = csvO::Rf('ol.csv');
//csvO::Wf('ol.csv', $data);
//$finalArray = $arrayManager->downloadA();
//$array = array(1, 2, 3, 4, 5, 6, 7, 8, 9, 10, 11, 12, 13, 14, 15, 16, 17, 18, 19, 20);
//$arrayManager = new ArrayManager($array);phpinfo().
//alertPHP($_POST["file"]);
//$video_path = 'lapin.mp4';
//$thumbnail_path = 'uploads/lapin.png';

// Créer une instance de FFmpeg
//$ffmpeg = \FFMpeg\FFMpeg::create();

// Ouvrir la vidéo avec FFmpeg
//S$video = $ffmpeg->open($video_path);

// Extraire la miniature à la deuxième seconde de la vidéo
//$frame = $video->frame(\FFMpeg\Coordinate\TimeCode::fromSeconds(2));
//$frame->save($thumbnail_path);

$_SESSION["KPT"]=4.2;

if(!array_key_exists("deleteF", $_SESSION)) {$_SESSION["deleteF"]=false;}
if(!array_key_exists("SelectIFP", $_SESSION)) {$_SESSION["SelectIFP"]="";}
if(!array_key_exists("selectedF", $_SESSION)) {$_SESSION["selectedF"]=false;}
if(!array_key_exists("selectedI", $_SESSION)) {$_SESSION["selectedI"]=false;}
if(!array_key_exists("loginF", $_SESSION)) {$_SESSION["loginF"]=false;}
if(!array_key_exists("editF", $_SESSION)) {$_SESSION["editF"]=false;}
if(!array_key_exists("editF2", $_SESSION)) {$_SESSION["editF2"]=false;}
if(!array_key_exists("Xmove", $_SESSION)) {$_SESSION["Xmove"]="X";}
if(!array_key_exists("Ymove", $_SESSION)) {$_SESSION["Ymove"]="Y";}
if(!array_key_exists("Pmove", $_SESSION)) {$_SESSION["Pmove"]="Courier";}
if(!array_key_exists("PTmove", $_SESSION)) {$_SESSION["PTmove"]=10;}
if(!array_key_exists("Cmove", $_SESSION)) {$_SESSION["Cmove"]="";}
if(!array_key_exists("Valmove", $_SESSION)) {$_SESSION["Valmove"]="";}
if(!array_key_exists("Kmove", $_SESSION)) {$_SESSION["Kmove"]="";}
if(!array_key_exists("TYPEmove", $_SESSION)) {$_SESSION["TYPEmove"]="Text";}
if(!array_key_exists("GBSImove", $_SESSION)) {$_SESSION["GBSImove"]="";}
if(!array_key_exists("SelectI", $_SESSION)) {$_SESSION["SelectI"]="choisir.png";}
if(!array_key_exists("SelectF", $_SESSION)) {$_SESSION["SelectF"]="choisir.png";}
if(!array_key_exists("Dx", $_SESSION)) {$_SESSION["Dx"]=0;}
if(!array_key_exists("Dy", $_SESSION)) {$_SESSION["Dy"]=0;}
if(!array_key_exists("Dbt", $_SESSION)) {$_SESSION["Dbt"]=1;}
if(!array_key_exists("Dz", $_SESSION)) {$_SESSION["Dz"]=10;}
if($_SESSION["SelectF"]==""){alertPHP('pas de selection de fichier');}
//alertPHP('lol');
//alertPHP($_SESSION["SelectF"]);
if(!file_exists($_SESSION["SelectF"]) or $_SESSION["SelectF"]=="" or strpos($_SESSION["SelectF"],"csv")==false) {$_SESSION["SelectF"]="choisir.csv";}
if(!file_exists($_SESSION["SelectI"]) or $_SESSION["SelectI"]=="" or strpos($_SESSION["SelectI"],"png")==false) {$_SESSION["SelectI"]="choisir.png";}
$arrayManager = new ArrayManager(csvO::Rf($_SESSION["SelectF"]));
$arraygoodtest=$arrayManager->downloadA();
$goodf=FileUtils::Array_file_isgood($arraygoodtest);
$MovetypeR="text";$ChkTxtchecked="";$ChkTxt="";
$docB="";$docU="";$docI="";$docL="";
$_SESSION["GBSImove"]="";//raz avant importation
for($i = 11; $i < count($arrayManager->downloadA()); ++$i) {
		$rowid=$arrayManager->readA($i,9);$supid="Bts".$rowid;$depid="Btd".$rowid;
		//echo "<script>alert(\"id=";echo "Bts".$arrayManager->readA($i,9)." en cours\")</script>";
	if(array_key_exists($depid, $_POST)) {
		$_SESSION["Xmove"]=$arrayManager->readA($i,1);
		$_SESSION["Ymove"]=$arrayManager->readA($i,2);
		$_SESSION["Valmove"]=$arrayManager->readA($i,3);
		$_SESSION["Pmove"]=$arrayManager->readA($i,4);
		$_SESSION["PTmove"]=$arrayManager->readA($i,5);
		$_SESSION["TYPEmove"]=$arrayManager->readA($i,0);
		$_SESSION["Cmove"]=$arrayManager->readA($i,7);
		$_SESSION["GBSImove"]=$arrayManager->readA($i,6);
		$_SESSION["Kmove"]=$arrayManager->readA($i,8);
				if(StrE($_SESSION["GBSImove"],"B")) { $docB="checked";}
		if(StrE($_SESSION["GBSImove"],"U")) {$docU="checked";}
		if(StrE($_SESSION["GBSImove"],"I")) {$docI="checked";}
		if(StrE($_SESSION["GBSImove"],"L")) {$docL="checked";}
		//alertPHP($_SESSION["Xmove"]);
		
		$arrayManager->removeRow($i);
		$i=count($arrayManager->downloadA());
		
	if($_SESSION["TYPEmove"]=="Date") {$MovetypeR= "datetime-local";} 
	if($_SESSION["TYPEmove"]=="Check") {$MovetypeR="checkbox"; 
		if($_SESSION["Valmove"]=="true"){$ChkTxtchecked="checked";$_SESSION["Valmove"]="";}
		$ChkTxt="width: 0px;";
	}}
	if(array_key_exists($supid, $_POST)) {
		$arrayManager->removeRow($i);
		$i=count($arrayManager->downloadA());
	}
	
}//	</for i end>
$GBSI="";
if(array_key_exists("G", $_POST)) {$GBSI.="B";}
if(array_key_exists("B", $_POST)) {$GBSI.="L";}
if(array_key_exists("S", $_POST)) {$GBSI.="U";}
if(array_key_exists("I", $_POST)) {$GBSI.="I";}
//alertPHP($GBSI);id="btpluspetit" name="btpluspetit"
if(array_key_exists("Dx", $_POST)) {$_SESSION["Dx"]=$_POST["Dx"];}
if(array_key_exists("Dy", $_POST)) {$_SESSION["Dy"]=$_POST["Dy"];}
if(array_key_exists("Dbt", $_POST)) {$_SESSION["Dbt"]=$_POST["Dbt"];}
if(array_key_exists("btplusgrand", $_POST)) {$_SESSION["Dbt"]+=0.25;if ($_SESSION["Dbt"]>6){$_SESSION["Dbt"]=6;}}
if(array_key_exists("btpluspetit", $_POST)) {$_SESSION["Dbt"]-=0.25;if ($_SESSION["Dbt"]<0.25){$_SESSION["Dbt"]=0.25;}}
if(array_key_exists("sizeDoc", $_POST)) {$_SESSION["Dz"]=$_POST["sizeDoc"];}
if(array_key_exists("sizeDoc", $_POST)) {$_SESSION["Dz"]=$_POST["sizeDoc"];}
//echo "<script>alert(\"id=";echo "Post :".FormData::toString()." en cours\")</script>";
if(array_key_exists("sendxy", $_POST)) {
	$siconter="";
	for($i = 11; $i < count($arrayManager->downloadA()); ++$i) {
		$rowid=$arrayManager->readA($i,9);
	$Btcid="Btk".$arrayManager->readA($i,9);
	 if($arrayManager->readA($i,8)!=$_POST[$Btcid]) {
		$arrayManager->setA($i,8,$_POST[ $Btcid]);
	 }
	 	 $Btcid="Btc".$arrayManager->readA($i,9);
	 if($arrayManager->readA($i,7)!=$_POST[$Btcid]) {
		$arrayManager->setA($i,7,$_POST[ $Btcid]);
	 }
	if($arrayManager->readA($i,0)=="Text" or
	$arrayManager->readA($i,0)=="Image"	or
	$arrayManager->readA($i,0)=="Date"	or
	$arrayManager->readA($i,0)=="Time"
	
	){
		if($arrayManager->readA($i,3)!=$_POST[$arrayManager->readA($i,9)]) {
		if (isSecure($_POST[$arrayManager->readA($i,9)])){ $arrayManager->setA($i,3,$_POST[$arrayManager->readA($i,9)]);}
		
	 }

	
	 }
	 if($arrayManager->readA($i,0)=="Check"){$arrayManager->setA($i,3,"false");
		if(isset($_POST[$arrayManager->readA($i,9)])) {
		$arrayManager->setA($i,3,"true");
	 }}
//$arrayManager->setA($i,3,"kod");substr(,1,6)
//new Zonetxt($arrayManager->readA($i,1),$arrayManager->readA($i,2),$arrayManager->readA($i,5),$arrayManager->readA($i,3),2);
	
	}
	//if (is_int($_POST["PT"])){$PTverif=$_POST["PT"];}else{$PTverif=10;}
	$PTverif=intval($_POST["PT"]);if($PTverif<2){$PTverif=2;}
	$xintvav=intval($_POST["x"]);
	$yintval=intval($_POST["y"]);
	$checkornot=$_POST["layerpointerbs"];
if(intval($_POST["x"])!==0 and intval($_POST["y"])!==0 and $xintvav!==0 and $xintvav!==0){
	if ($_POST["elemType"]=="Check"){
		$checkornot="false";
		if(isset($_POST["layerpointerbs"])) {
		$checkornot="true";

    }    
}
if (!isSecure($checkornot)){$checkornot=""; }
$arrayManager->addRow(array($_POST["elemType"], $_POST["x"], $_POST["y"],$checkornot, $_POST["elemFont"], $PTverif,$GBSI, $_POST["Color"], $_POST["Btk0"], Doc::getiD($_POST["x"],$_POST["y"])));
}
}
		// doc print Btpdf
if(array_key_exists("Btpdf", $_POST)) {
?><script>window.open("index_fpdf.php");</script><?php
}
if(array_key_exists("Btcsv", $_POST)) {
	$_SESSION["SelectIFP"]=$_SESSION["SelectF"]; //dans filedl.php
?><script>window.open("filedl.php");</script><?php
}
if(array_key_exists("Btimgdl", $_POST)) {
	$_SESSION["SelectIFP"]=$_SESSION["SelectI"]; //dans filedl.php
?><script>window.open("filedl.php");</script><?php
}

//x y PT elemType elemFont $_SESSION["idx3"]
//$arrayManager->addRow(array(1, 2, 3, 4, 5, 6, 7, 8, 9, 10));
$arrayManager->trieC10();
csvO::Wf($_SESSION["SelectF"], $arrayManager->downloadA());
//exit();
   // / st Horizontally: " + x.toFixed() + "<br>Vertically: " + y.toFixed();
   //  alert("pageXOffset: " + window.pageXOffset + ", pageYOffset: " + window.pageYOffset);//
?>
<!DOCTYPE HTML name="webdoc">  
<head>
  <meta name="viewport" content="width=device-width, initial-scale=1.0;height=device-height, initial-scale=1.0">
</head>

<body class="ro"  >
<script >
//type="text/javascript" src="html2canvas.js" des bugs sul la lib listener test retiré
</script>
<script>

class charSprite {
    constructor(charin,charin1,charin2,charin3,charin4) {
    this.char[0] = charin;
     this.char[1] = charin1;
	 this.char[2] = charin2;
	 this.char[3] = charin3;
	 this.char[4] = charin4;
	 
  }

}
class tupleE {
    constructor(xin,yin) {
    this.x = xin;
    this.y = yin; 
  }

}
class dragC {
    constructor(xy1in,xy2in) {
    this.xy1 = xy1in;
    this.xy2 = xy2in; 
	this.processing=false;
  }
proc(){
	this.processing=!this.processing;
}
start(inx1,iny1){
this.xy1.x=inx1;
this.xy1.y=iny1;
}
end(inx2,iny2){
this.xy2.x=inx2;
this.xy2.y=iny2;
}
difx(){
	return (this.xy1.x-this.xy2.x);
}

dify(){
	return (this.xy1.y-this.xy2.y);
}
}
class TextAnalyzer {
  static countUppercase(text) {
    let uppercaseCount = 0;
    for (let i = 0; i < text.length; i++) {
      if (text[i] === text[i].toUpperCase()) {
        uppercaseCount++;
      }
    }
    return uppercaseCount;
  }
}

// Exemple d'utilisation
//console.log(TextAnalyzer.countUppercase('Bonjour tout le monde !')); // affiche 1
//console.log(TextAnalyzer.countUppercase('Comment ça va ?')); // affiche 0
//console.log(TextAnalyzer.countUppercase('JE SUIS EN MAJUSCULES !')); // affiche 15
class screenD {
constructor(docW, docH) {
this.Kdpix = 1;
this.Kpixd = 1;
this.docOX = 0;
this.docOY = 0;
this.docW = docW;
this.docH = docH;
this.docK = 1;
this.margeX = 0;
this.margeY = 0;
this._docWi = docW;
this._docHi = docH;
this._docXi = 0;
this._docYi = 0;
this.pXo = 0;// pageXOffset car x et y reste peut être 0 et seul l'affichage est décalé
this.pYo = 0;
}
Setall(docX, docY, docW, docH, docK) {
this.Kdpix = docK;
this.Kpixd = docK;
this.docOX = docX;
this.docOY = docY;
this.docW = docW;
this.docH = docH;
this.docK = docK;
this.pXo = 0;// pageXOffset car x et y reste peut être 0 et seul l'affichage est décalé
this.pYo = 0;
this.margeX = 0;
this.margeY = 0;

this._docWi = docW;
this._docHi = docH;
this._docXi = docX;
this._docYi = docY;
}

scaleD(){
	this.docW=this._docWi*this.docK;
	this.docH=this._docHi*this.docK;
	
}
setdocoXY(docOX, docOY) {
this.docOX = docOX;
this.docOY = docOY;
}

setdocZ(docZ) {
this.docZ = docZ;

}
}

class Doc {
  static a4W = 210;
  static a4H = 297;
  static docW = 2479;
  static docH = 3504;
   static getiD(x, y) {
    return '${10*y*this.a4W+x*10}';
  }
}
function sEnT(chaine,inscale) {
	var chaineV=chaine;
	var tableau0 = chaine.split(",");
	var tabelem=tableau0.length;
  
  if (tabelem<=2){
	 if (tabelem==1){chaineV+=","+inscale.toString()+","+inscale.toString(); }
	  if (tabelem==2){chaineV+=","+tableau0[1];}
  }
  var tableau = chaineV.split(",");//window.alert(tableau0.length);
  return tableau;
}



var dragPointer= new dragC(new tupleE(0,0),new tupleE(0,0));

var dragPointer0= new dragC(new tupleE(0,0),new tupleE(0,0));
var checkScale=1;
let lEcoo=[];
var isdragmove=false;
var moved=false;
var Navprocessing=false;
//{
	// global init
	//var Wdoc=2479;var Hdoc=3504;
	let imgTab;
	var Ol= new screenD(Doc.docW,Doc.docH);
	var pageOk=false;
	var Xdata=0;var Ydata=0;
	var pt;
	var inputSD;
	var Itouched=false;
	var sourit_x;
    var sourit_y;
	var t=0;var tx; var ty;
	var vK=0.1;tvK=-25;// coef de vecteur de deplacement
	//var scaleW=1;
	var docX;var docY;
	var Dxe;
	var Dye;
	//var limH;
	//var limW;
	//var lx;
	//var ly;
	var px;var py;
	var vx;//=parseInt(<?php echo $_SESSION["Dx"]; ?>);
	var vy;//<?php echo $_SESSION["Dy"]; ?>;
	var image_x;
    var image_y;
	var point_x;
    var point_y;
	var lEG;
	var lEB;
	var lES;
	var lEI;
	var lEF;
	var lEC;
	var dragP=false;	var dragP1=false;
	var lEp;
	
	// here var cant be read a this early start of script by page load proccessing
	//identification des elements de pages
		{
			var hH;
			var wW;
			//form
			var fData;
			var fX;
			var fY;
			// /form
			//buttons
			var btZP;
			var btZM;
	var btd ;
	var btas;
			// /buttons
		}
	var els;
	var eli;
	var elp;
	var elv;
	var lE;var lEb;var lEpb;
	
		//  /identification des élements de pages
		// 		/here var cant be read a this early start of script by page load proccessing
	// /global init
//}
//{
// cookies	



// /cookies
//}
//startWorker();// pour iframe interactives
function getSelectValue(selectId)
{
	/**On récupère l'élement html <select>*/
	var selectElmt = document.getElementById(selectId);
	/**
	selectElmt.options correspond au tableau des balises <option> du select
	selectElmt.selectedIndex correspond à l'index du tableau options qui est actuellement sélectionné
	*/
	return selectElmt.options[selectElmt.selectedIndex].value;
}
function ElemTypechange(){
	//window.alert(" changed");window.alert(" date selected");
	//1.8
	var resultType=getSelectValue("elemType");
	if (resultType=="Img"){lEpb.type="text";
	checkScale=1;
	}
	if (resultType=="Time"){lEpb.type="time";
	checkScale=1;
	}
	if (resultType=="Date"){lEpb.type="date";
	checkScale=1;
	}
	if (resultType=="Check"){lEpb.type="checkbox";
	checkScale=1;
	}
		if (resultType=="Text"){lEpb.type="text";
		checkScale=1;
		}
		scaledoc();
}


function fullLoaded() {
	//document.getElementById('madiv').innerHTML = "";
  //console.log('HTML prêt !');
  	//identification des elements de pages
		{

			hH = window.innerHeight;
			wW = window.innerWidth;
			//form
			fData =document.getElementById('data');
			fX =document.getElementById('x');
			fY =document.getElementById('y');
			
			// /form
			//buttons  
			inType=document.getElementById('elemType');
			btSD =document.getElementById('sizeDoc');
			btPT =document.getElementById('PT');
			inputPT =document.getElementById('PTi');
			inputPT2 =document.getElementById('PTi2');
			btN =document.getElementById('btN')
			btd =document.getElementById('btD');
			//btas =document.getElementById('autoscr');
			btas =document.getElementById('divbutton');
			
			// /buttons
			// image layer and pointer
				lEC =document.getElementById('Color');
				lEF =document.getElementById('elemFont');
				lEG =document.getElementById('opt-inG');
				lEB =document.getElementById('opt-inB');
				lES =document.getElementById('opt-inS');
				lEI =document.getElementById('opt-inI');
			lEpb =document.getElementById('layerpointerb');
			lEpi =document.getElementById('layerpointeri');
			lEp =document.getElementById('layerpointer');
			lE=document.getElementsByClassName('layerElements');
			lEb=document.getElementsByClassName('layerElementsb');
			//sauvegarder les elements de image layer coo
			lEcoo.length=lE.length;
				//html2canvas(document.getElementById('image')).then(function(canvas) {
				//document.body.appendChild(canvas);});
			
				// document.getElementById('Bttest').addEventListener('click', () => {
				//html2canvas(document.getElementById('image')).then(function(canvas) {
				//  document.body.appendChild(canvas);
				//});
				//});
			for (var i = 0, max = lE.length; i < max; i++) {
				lEcoo[i]=new tupleE(
				lE[i].style.left.substring(0, lE[i].style.left.length - 2)
				,
				lE[i].style.top.substring(0, lE[i].style.top.length - 2)
				);

			}
			Dxe =document.getElementById('Dx');
			Dye =document.getElementById('Dy');
			wscrl(Dxe.value,Dye.value);
			if (lEpb.type=="checkbox"){

				checkScale=1;}

			//ElemTypechange();//1.8
			//if (lEpb.type=="checkbox")
			// /sauvegarder image layer el coo
			// /image layer and pointer
		}
		lEpb.style.width = ((lEpb.value.length+2) * inputPT2.value*2 ) + "px";
lEpb.onkeypress = switchSize;
	els =document.getElementById('info_sourit');
	eli =document.getElementById('image');//elv =document.getElementById('image');
	elp =document.getElementById('info_point');
	elil =document.getElementById('imagelayer');
		//  /identification des élements de pages
  //window.alert(eli+"eli           fx "+fX);
  moveDoc();getValueSD();Paspect();
}
window.addEventListener('wheel', function(event)
{
 if (event.deltaY < 0)
 {
	 wscrl(0,-30);
  //console.log('scrolling up');
  //document.getElementById('status').textContent= 'scrolling up';
 }
 else if (event.deltaY > 0)
 {
	 wscrl(0,30);
  //console.log('scrolling down');
  //document.getElementById('status').textContent= 'scrolling down';
 }
});
if (document.readyState === 'complete') {
  fullLoaded();
} else {
  document.addEventListener('DOMContentLoaded', function() {
    fullLoaded();
  });
}

function dragA(event) {
	sourit_x = event.clientX+dragPointer0.difx();
    sourit_y = event.clientY+dragPointer0.dify();
	 //alert("pageXOffset: " + event.clientX + ", pageYOffset: " + event.clientY);
	souris();
  event.preventDefault();
}

function dragMt(event)
{ 	
	sourit_x = event.touches[0].clientX;
		sourit_y = event.touches[0].clientY;
			dragP=true;
	dragMall();	
	}
	function dragMall(){
		souris();
		if (dragP1){	//like function sourisxy(event)
	
	
		startdragall();
		dragP1=false;
		}
	}
	function dragMtm(event){

		sourit_x = event.clientX;
			sourit_y = event.clientY;
					if (event.buttons!=0){dragMall();}
	
	}
function dragSt(event) {
	dragP1=true;


}
function dragStm(event) {
dragP1=true;
//startdragall();
 //alert("pageXOffset: " + event.clientX + ", pageYOffset: " + event.clientY);
}

function dragEt(event) {
dragPointer.end(sourit_x,sourit_y);
	enddragall();

	
}
function startdragall(){
	dragP=true;
	souris();
	dragPointer.end(sourit_x,sourit_y);

 dragPointer.start(sourit_x,sourit_y);
  
}
function enddragall(){
	if (dragP){
	dragP=false;
	dragP1=false;
	//fX.value=docX;fY.value=docY;
	dragPointer.end(sourit_x,sourit_y);
			
				lEcoo[0].x-=(dragPointer.difx())/Ol.docK;
				lEcoo[0].y-=(dragPointer.dify())/Ol.docK;
				fX.value=Math.trunc(10*lEcoo[0].x*Ol.docK*210/Ol.docW)/10;
				fY.value=Math.trunc(10*lEcoo[0].y*Ol.docK*297/Ol.docH)/10;
				//scaledoc();
	} 
	dragPointer.start(sourit_x,sourit_y);
	
	//fX.value
}
function dragEtm(event) {
dragPointer.end(sourit_x,sourit_y);
enddragall();

	

	
}
function dragS(event) {
	sourit_x = event.clientX;
    sourit_y = event.clientY;
	
	souris();
	dragPointer0.start(lE[0].style.left.substring(0, lE[0].style.left.length - 2)
		,
		lE[0].style.top.substring(0, lE[0].style.top.length - 2));
	dragPointer0.end(px,py);	
	//alert("  x >> "+ dragPointer0.difx()+ "     y >> "+dragPointer0.dify()); 	
 dragPointer.start(sourit_x,sourit_y);
 //alert("pageXOffset: " + event.clientX + ", pageYOffset: " + event.clientY);
}

function dragD(event) {
dragPointer.end(sourit_x,sourit_y);
	fX.value=docX;fY.value=docY;
	var newxy= new tupleE(lEcoo[0].x*Ol.docK-dragPointer.difx(),lEcoo[0].y*Ol.docK-dragPointer.dify())


	souris();
	fdclick();
	
	scaledoc();
		sizePointer();
	//event.clientX,event.clientY
	

	
}
function Centrer(){	
window.scrollTo(0, 0);
 Dxe.value=0;
 Dye.value=0;
 	Ol.pXo= window.pageXOffset;
	Ol.pYo= window.pageYOffset;

	moveDoc();
}
function Nav(){
 wscrl(vx,vy);
}
function wscrl(inx,iny) {
 //doc 2479 / 3504
 window.scrollBy(inx, iny);

 Dxe.value=window.pageXOffset;
 Dye.value=window.pageYOffset;

	Ol.pXo= window.pageXOffset;
	Ol.pYo= window.pageYOffset;

	moveDoc();	
}
//{
//zize fData
function sizePointer(){
	//lE[0].style.scale=(inputPT.value*3.2/10)*Ol.docK;
	//Ol.docK;
//lEpb.style.fontSize = (inputPT.value*<?php echo $_SESSION["KPT"]; ?>)+"px";//$_SESSION["KPT
//lEpb.style.height = (inputPT.value*<?php echo $_SESSION["KPT"]; ?>)+"px";
}
function getValueSD() {
    inputSD = btSD.value;
	//scaleW=0.01*inputSD;
	Ol.docK=0.01*inputSD;
	scaledoc();
			sizePointer();
}
function getValuePT() {
    btPT.value =inputPT.value;
	 inputPT2.value =inputPT.value;
		sizePointer();	scaledoc();
	
}
function getValuePT2() {
    btPT.value =inputPT2.value;
	 inputPT.value =inputPT2.value;
		sizePointer();		scaledoc();
	
}
function getValuePT3() {
    inputPT2.value = btPT.value;
	 inputPT.value =inputPT2.value;
		sizePointer();	scaledoc();
	
}
function switchi(){
		if (inType.value=="Img"){
		//alert(imgTab);
	imgTab=sEnT(lEpb.value,btPT.value);
	//alert(imgTab[0]);
lEpi.src="uploads/"+imgTab[0];
lEpi.style.width=imgTab[1]*11.8+"px";
lEpi.style.height=imgTab[2]*11.8+"px";
	}
	
}
var Coefl=0.56;//3.2;
function switchSize(event) {

switchi();
				if (lEpb.type!="checkbox"){

				
	var lpxlADJ=(TextAnalyzer.countUppercase(event.target.value)*.0+event.target.value.length+4)*(event.target.style.height.substring(0, event.target.style.height.length - 2)*Coefl);
    event.target.style.width = lpxlADJ + "px";}
}

function sizeAll(event) {
//event.target.style.height.substring(0, event.target.style.height.length - 2)
//window.alert();
				if (event.target.type=="text"){

				
	var lpxlADJ=(TextAnalyzer.countUppercase(event.target.value)*.0+event.target.value.length+4)*(event.target.style.height.substring(0, event.target.style.height.length - 2)*Coefl);
    event.target.style.width = lpxlADJ + "px";}
}

 
function Paspect(){
		if(lEG.checked) { lEpb.style.fontWeight="1000";} else {lEpb.style.fontWeight="100";}
		if(lEI.checked) {lEpb.style.fontStyle = "italic";} else {lEpb.style.fontStyle = "normal";}
		var testDeco="";
		if(lES.checked) {testDeco +=" underline";} 
		if(lEB.checked) {testDeco +=" line-through";} 
if (testDeco==""){lEpb.style.textDecoration ="none";} else {lEpb.style.textDecoration =testDeco;}
//lEpb.style.textDecoration=" overline";
	if(lEF.options[lEF.selectedIndex].text=="Courier"){ lEpb.style.fontFamily ="courier" ;} 
	if(lEF.options[lEF.selectedIndex].text=="Arial"){ lEpb.style.fontFamily ="Arial"; }
	if(lEF.options[lEF.selectedIndex].text=="Helvetica"){ lEpb.style.fontFamily ="helvetica" ;} 
	if(lEF.options[lEF.selectedIndex].text=="Times"){ lEpb.style.fontFamily ="times" ;}
	if(lEF.options[lEF.selectedIndex].text=="Symbol"){ lEpb.style.fontFamily ="symbol" ;}
	if(lEF.options[lEF.selectedIndex].text=="ZapfDingbats"){ lEpb.style.fontFamily ="Zapf Dingbats" ;}
	//style.fontFamily =  textarea
	lEpb.style.color=lEC.value;
}
function scaledoc()
	{
		
	Ol.scaleD();
	//Wdoc=2479*scaleW;Hdoc=  3504*scaleW;
	
	//eli.style.backgroundSize =Wdoc+"px "+Hdoc+"px";
	eli.style.backgroundSize =Ol.docW+"px "+Ol.docH+"px";
	//elil.style.backgroundSize =Wdoc+"px "+Hdoc+"px";
	elil.style.backgroundSize =Ol.docW+"px "+Ol.docH+"px";
	//elil.style.width =Wdoc+"px ";
	//elil.style.height =Hdoc+"px";
	elil.style.width =Ol.docW+"px ";
	elil.style.height =Ol.docH+"px";

	
//lEpb.type="checkbox";
//lEpb.name="true";
	for (var i = 0, max = lE.length; i < max; i++) {
		lE[i].style.scale=Ol.docK;
		//lEb[i].value=lE[i].style.left.substring(0, lE[i].style.left.length - 2)*scaleW;
		lE[i].style.left=lEcoo[i].x*Ol.docK;//Math.trunc replace scaleW par Ol.docK
		lE[i].style.top=lEcoo[i].y*Ol.docK;
		//lE[i].style.left = Math.trunc(lE[i].style.left.substring(0, lE[i].style.left.length - 2)*scaleW)+"px";
		//lE[i].style.top = Math.trunc(lE[i].style.top.substring(0, lE[i].style.top.length - 2)*scaleW)+"px";
		}
		if (inType.value!=="Img"){lE[0].style.scale*=inputPT.value*checkScale/10;} else {switchi();}

//lEp.style.scale = 1;
//inputPT2.style.scale=1/Ol.docK*0.8;
	
	}
//  /zise Ol.pXo Ol.pYo
//}
function moveDoc()
{
	//btas.style.top = 1+Ol.pYo+"px";
	//btas.style.left = 1+Ol.pXo+"px";
	//btas.style.top = 125+Ol.pYo+"px";
	//btas.style.left = 1+Ol.pXo+"px";
	//btSD.style.left = 8+Ol.pXo+"px";
	//btSD.style.top = -12+Ol.pYo+"px";
	fData.style.left = 0+Ol.pXo+"px";
	fData.style.top = 0+Ol.pYo+"px";

	}
			//for form on click set form x and y
function fclick(event)
{
	clickNav();
	// alert("pageXOffset: " + event.clientX + ", pageYOffset: " + event.clientY);
			//form
}

function fdclick()
{
	
			//form
			
			// /form
	//docX=Math.trunc(10*px*210/Wdoc)/10;
	//docY=Math.trunc(10*py*297/Hdoc)/10;
	fX.value=docX;fY.value=docY;

	//lEp.style.left = px+"px";
	//lEp.style.top = py+"px";
	lEcoo[0].x=(px)/Ol.docK;
	lEcoo[0].y=(py)/Ol.docK;
	scaledoc();
	//lE[0].style.scale=(inputPT.value/10)*Ol.docK;
}
function flecheNave(){
	
	if(Navprocessing){stopNav();Navprocessing=false;}else{startNav();Navprocessing=true;}
	console.log('flechenave !'+Navprocessing);
	
	
}
function testFS(){
	
		//elv.requestFullscreen();
		// ne fonctionne que dans une div testFS(); test ok mais pas pour ce script sauf si refonte des rows de idx afin de les remplacer par des iframes avec full screen alowed
	
}
function clickNav(){
if(Navprocessing){stopNav();Navprocessing=false;}
}
function setVec(vxin,vyin){
	vx=vxin;vy=vyin;
}
function Istart(event){
	console.log('istart T!');
	Itouched=true;
	tx=sourit_x;ty=sourit_y;

		console.log('Defined touches!');
		sourit_x = event.touches[0].clientX;
		sourit_y = event.touches[0].clientY;

	
	tx = sourit_x ;
	ty = sourit_y;
	//Nav();
	//flecheNave();
}
function IstartM(event){
	console.log('istart M!');
	
	Itouched=true;
	tx=sourit_x;ty=sourit_y;

			//console.log('Undefined touches!');
		sourit_x = event.clientX;
		sourit_y = event.clientY;
			
		
	
	tx = sourit_x ;
	ty = sourit_y;
	
	//Nav();
	//flecheNave();
}
function Iend(event){
	console.log('iend !');
	//tx = event.touches[0].clientX;
	//ty = event.touches[0].clientY;
	Itouched=false;
	t=0;
	clickNav();
	souris(event);
	
	
	
}function Icanc(event){
	console.log('icanceled !');
	//tx = event.touches[0].clientX;
	//ty = event.touches[0].clientY;
	Itouched=false;
	t=0;
	clickNav();
	souris(event);
	
	
	
}
function dragSM(event){ 
//isdragmove=true;
console.log('Imoving M Dragnop !');
}
function touchmM(event){
	
	console.log('Imoving M !');
	souris(event);
	//Itouched=true;
	//t=event.touches.length;
	tx=sourit_x;ty=sourit_y;
	
	sourit_x = event.clientX;
	sourit_y = event.clientY;
	if (Itouched){
	vx=Math.trunc((sourit_x-(tx))*vK*tvK);
	vy=Math.trunc((sourit_y-(ty))*vK*tvK);
	Nav();
	}
}
function touchm(event){
	
	console.log('Imoving !');
	souris(event);
	Itouched=true;
	t=event.touches.length;
	tx=sourit_x;ty=sourit_y;
	
	sourit_x = event.touches[0].clientX;
	sourit_y = event.touches[0].clientY;
	vx=Math.trunc((sourit_x-(tx))*vK*tvK);
	vy=Math.trunc((sourit_y-(ty))*vK*tvK);
	Nav();
}
//function notsourisxy(event)
//{ 	sourit_x = tx;
  //  sourit_y = ty;
//
//}
function sourisxy(event)
{ 	sourit_x = event.clientX;
    sourit_y = event.clientY;
	
	souris();
	}
function souris()
{
		switchi();
	Ol.pXo = window.pageXOffset;
    Ol.pYo = window.pageYOffset;
	image_x = eli.offsetLeft;
    image_y = eli.offsetTop;
	point_x = sourit_x - image_x;
    point_y = sourit_y - image_y;

	px= Ol.pXo+point_x;
	py= Ol.pYo+point_y;//lol
	var xx= point_x;
	var yy= point_y;

if (dragP) {
		//sourit_x-=dragstartdif.x;
		//sourit_y-=dragstartdif.y;
		//lEcoo[0].x*Ol.docK-dragPointer.difx(),lEcoo[0].y*Ol.docK-dragPointer.dify()
		dragPointer.end(sourit_x,sourit_y);
		px = lEcoo[0].x*Ol.docK-dragPointer.difx();
		py = lEcoo[0].y*Ol.docK-dragPointer.dify();	
		lEp.style.left = px+"px";
		lEp.style.top = py+"px";

	}
		docX=Math.trunc(10*px*210/Ol.docW)/10;
		
	docY=Math.trunc(10*py*297/Ol.docH)/10;
	els.innerHTML ='[' + docX + 'mm * ' +docY + "mm]";//els.innerHTML +="<input type=\"color\">";
	
	els.style.left = (point_x-22)+Ol.pXo+"px";
	els.style.top = (point_y-33)+Ol.pYo+"px";
	//elv.scrollLeft+=12; code nop
	//document.getElementById('image').scrollTop += 20; code nop
	
	moveDoc();
	
	// NAV  
	{
	if (!Itouched){
	vx=Math.trunc((xx-(wW/2))*vK);
	vy=Math.trunc((yy-(hH*0.70))*vK);
	}
	//
	
    }
	// /NAV


}
// trash
//<button id="btZM" onmousedown="btZM()"  style="position:absolute; top:44px; left: 47px;margin: 0 ">-</button>

//<button id="btZP" onmousedown="btZP()"  style="position:absolute; top:44px; left: 47px;margin: 0 ">+</button>
var w;
var wN;

function startWorker() {
  if(typeof(Worker) !== "undefined") {
    if(typeof(w) == "undefined") {
      w = new Worker("worker.js");
    }
    w.onmessage = function(event) {
		
      //document.getElementById("Ggauche").innerHTML = event.data;
    };
  } else {
    document.getElementById("result").innerHTML = "Sorry, your browser does not support Web Workers...";
  }
}

function stopWorker() { 
  w.terminate();
  w = undefined;
}
function startNav() {
  if(typeof(Worker) !== "undefined") {
    if(typeof(wN) == "undefined") {
      wN = new Worker("workerNav.js");
    }
    wN.onmessage = function(event) {
		Nav();var irad=event.data;
		btN.style.width =25+Math.sin(irad) * 2+"px";
		btN.style.height =25+Math.cos(irad)*2+"px";
      //document.getElementById("result").innerHTML = event.data;
    };
  } else {
    document.getElementById("result").innerHTML = "Sorry, your browser does not support Web Workers...";
  }
}

function stopNav() { 
  wN.terminate();
  wN = undefined;
}

//<<<<<<<<<<<<<<<<<<<<<<<<<<<<<__Trashcode__>>>>>>>>>>>>>>>>>>>>>>>>>
// <fstest
var elem = document.documentElement;
function openFullscreen() {
  //if (elem.requestFullscreen) {
    //elem.requestFullscreen();
  //} else if (elem.webkitRequestFullscreen) { /* Safari */
  //  elem.webkitRequestFullscreen();
  //} else if (elem.msRequestFullscreen) { /* IE11 */
  //  elem.msRequestFullscreen();
  //}
}

function closeFullscreen() {
 // if (document.exitFullscreen) {
  //  document.exitFullscreen();
  //} else if (document.webkitExitFullscreen) { /* Safari */
  //  document.webkitExitFullscreen();
 // } else if (document.msExitFullscreen) { /* IE11 */
  //  document.msExitFullscreen();
  //}
}
//ondrag="sourisxy(event);" ondragstart="dragS(event);"  draggable="true"
// ondrop="dragD(event)" ondragover="dragA(event)"  ontouchmove="dragMt(event);" onmousemove="dragMt(event);" 
// /fstest>
</script>
<style>
              .ajustscr{
              z-index:200;
                  position:absolute;
                  
                  /*background: #F0F;*/
                  padding:0%;
                  transform-origin:0%,0%;
                  transform: translate(0%, 0%);
                  width:50px;
                  height:42px;
                  top:2%;
                  left:2%;
                  text-align:left;
                  
              }
              .scrautoimg {

                width:42px;
                height:42px;
                background:url("include/aj<?php echo $_SESSION["autoscr"]; ?>.png");
                background-size: 100%;
                background-repeat: no-repeat;background-position: center;
                border:0;border-radius: 40em;

				
              }
			.formout{
           
               
                  width:80px;
                  height:20px;
                
                  text-align:center;
              </style>

  
	
        <?php
   
           // <div  class="ajustscr" width="20%" height="100%" >
			//</div>

 
      if(array_key_exists("val0m", $_POST)) {
        $_SESSION["AD"]-=1;
        $_SESSION["idx3"]="main";
        }
        if(array_key_exists("val1m", $_POST)) {
        $_SESSION["SC"]-=1;
        $_SESSION["idx3"]="main";
        }
        if(array_key_exists("val2m", $_POST)) {
        $_SESSION["G"]-=1;
        $_SESSION["idx3"]="main";
        }
        if(array_key_exists("val3m", $_POST)) {
        $_SESSION["CHG"]-=1;
        $_SESSION["idx3"]="main";
        }
        if(array_key_exists("val4m", $_POST)) {
        $_SESSION["BO"]-=1;
        $_SESSION["idx3"]="main";
        }
        
       
        if(array_key_exists("val0p", $_POST)) {
        $_SESSION["AD"]+=1;
        $_SESSION["idx3"]="main";
        }
        if(array_key_exists("val1p", $_POST)) {
        $_SESSION["SC"]+=1;
        $_SESSION["idx3"]="main";
        }
        if(array_key_exists("val2p", $_POST)) {
        $_SESSION["G"]+=1;
        $_SESSION["idx3"]="main";
        }
        if(array_key_exists("val3p", $_POST)) {
        $_SESSION["CHG"]+=1;
        $_SESSION["idx3"]="main";
        }
        if(array_key_exists("val4p", $_POST)) {
        $_SESSION["BO"]+=1;
        $_SESSION["idx3"]="main";
        }

        if(array_key_exists("return", $_POST)) {//pour l instant en ldc console
          $_SESSION["idx3"]="main";
        }
        
              if(array_key_exists("info", $_POST)) {
                $_SESSION["idx3"]="info";
                
              }
              if(array_key_exists("dl", $_POST)) {
                $_SESSION["idx3"]="dl";
              }
              if(array_key_exists("upload", $_POST)) {
                $_SESSION["idx3"]="upload";
              }
              if(array_key_exists("login", $_POST)) {
                $_SESSION["idx3"]="login";
              }
              if(array_key_exists("lien", $_POST)) {
                $_SESSION["idx3"]="lien";
              }

              if(array_key_exists("infocc", $_POST)) {
                $_SESSION["idx3"]="info";
                }


      if ($_SESSION["idx3"]!="main"){
        ?>
  <span>
        <style>
            .retourdroite{
              z-index:200;
                  position:absolute;
                  /*background: #F0F;*/
                  padding:0%;
                  transform-origin:0%,0%;
                  transform: translate(-20%, -10%);
                  width:100%;
                  height:10px;
                bottom:10%;
                left:50%; 
              }
              
      </style>

    <div  class="retourdroite">
      <form  class="tooltip" id="03" method="post" target="view" action="<?php echo htmlspecialchars("idx3.php");?>"> 

      <input type="submit" name="return"
        class="buttonchg" value="  " height="50" width="100" 
      <?php styleimg("include/return.png");?>
      />
      </form>
     </div>
  </span>
      <?php
      } 
      

      //open log and time
	  $insidePost="";
	        foreach($_POST as $key => $value){
			$insidePost.=' $_POST['.$key.']='.$value .' _ ';
			}
      date_default_timezone_set('Europe/Paris');
      $read=file_get_contents("include/log.txt"); 
      $logbat=fopen("include/log.txt","w+");// open file for writing
$cliSNav=" -Navigateur client: ".$_SERVER["HTTP_USER_AGENT"]." ";$cliIp=" - Ip :".$_SERVER['REMOTE_ADDR']." ";
      $cutdate= datestr();//codedatestr();
      $lenght=filesize("include/log.txt")+"1";
      $logall=$cutdate." Connected successfully".$e2." ".$a.$e.$cliSNav.$cliIp.$insidePost.Chr(13).$read;
      //foreach($_POST as $key => $value)
//echo '$_POST['.$key.']='.$value .'<br />';
//print_r($_SERVER); 
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



      ?>

 
  <div class="views" scrolling=no style="image-align: top; align-self: start;
scale: 1 1;
position: absolute;

top: 0px; left: 0px;margin: 0 !important;
image-align: top;
text-align:  top;">
        <!-- le div ouvert en php par allwinscale.php--> 
      <?php 

        //com div ouverte et css tyle definition 
        
    $allwinscale0=require_once ("allwinscale.php");//equi div
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

      //$_SESSION["idx3"]="main"; // set main will be this if soon not changing// may be not^^ i will see first in console


      ?>





      <!--<form class="view"> -->
      <?php



      if ($_SESSION["idx3"]=="info"){
        $charger_idx3_dl=include_once("idx3_info.php");//ici on lance le contenu info
      }
      if ($_SESSION["idx3"]=="lien"){
        $charger_idx3_dl=include_once("idx3_lien.php");//ici on lance le contenu info
      }
      if ($_SESSION["idx3"]=="dl"){
        $charger_idx3_dl=include_once("idx3_dl.php");//ici on lance le contenu dl 
      }
      if ($_SESSION["idx3"]=="upload"){
        $charger_idx3_dl=include_once("idx3_dl.php");//ici on lance le contenu dl 
      }
      if ($_SESSION["idx3"]=="rouage"){
        $charger_idx3_main=include_once("idx3_main.php");//ici on lance le contenu main
      }
      if ($_SESSION["idx3"]=="login"){
        $charger_idx3_main=include_once("idx3_log.php");//ici on lance le contenu log
      }
      if ($_SESSION["idx3"]=="mainlol"){


      }
      if ($_SESSION["idx3"]=="main"){
        ?>
   
   <?php
// </form> 	
//    <form method="post" Class="view" target="view" action=
//"<?php echo htmlspecialchars("idx3.php"); 
    
        $charger_idx3_main=include_once("idx3_main.php");//ici on lance le contenu main
        ?>
     

        
      
      
      <?php
      } 

      ?> 
                  

      <!-- <p><span class="error">* required field</span></p>-->


      <?php

      //echo "<h10>Your Input:";
      if ($_SESSION["hideio"]){
        affglob();
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
        echo "<br>";
        echo $affdeb."Admin = ".$_SESSION["admincmd"].$afffin;
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
    <!-- le div qui fut ouvert en php par allwinscale.php fermer la div -->  
    </div>
  </div>
  