

<?php 
//here jonction of subs of idx3_main
//doc 2479 / 3504
   $inputStr="";
	 $coefStr=(StruC($_SESSION["Valmove"])*0+4+strlen($_SESSION["Valmove"]))*$_SESSION["PTmove"]*9;
	  $inputStr="width: ". $coefStr."px;";
?>
<div id="allthedoc" 
onmousemove="sourisxy(event);"  onmouseup="Iend(event);"
>
		   <form  class="tooltip" id="03" method="post" target="view" action="<?php echo htmlspecialchars("idx3.php");?>"> 
		

<form  class="clsBtpdf" id="clsBtpdf" method="post" target="view" action="<?php echo htmlspecialchars("idx3.php");?>"> 


<div
id="layerpointer" class="layerElements" name="layerpointer"  src=""

ontouchstart="dragSt(event);" ontouchend="dragEt(event);"  ontouchmove="dragMt(event);" 
onmousedown="dragStm(event);" onmouseup="dragEtm(event);"  onmousemove="dragMtm(event);" 
style=" position: absolute; margin: 0 !important;  
transform-origin: 0% 0%;
left: <?php if ($_SESSION["Xmove"]=="X"){echo "-50000";$_SESSION["TYPEmove"]="Text";$_SESSION["PTmove"]=10;$_SESSION["Pmove"]="Courier";} else {echo Doc::A4Wdoc($_SESSION["Xmove"]);} ?>px;
top: <?php if ($_SESSION["Ymove"]=="Y"){echo "-50000";}else {echo Doc::A4Hdoc($_SESSION["Ymove"]);} ?>px;
 overflow: visible;
width:800px;
height:67px;
 text-align: left;
 align-content:left;
z-index:9999999;
text-align: left;
 padding: 0;
 margin: 0;

">
<image id="layerpointeri" draggable="false" style=" position: absolute; margin: 0 !important;  
transform-origin: 0% 0%; top:0px; left:0px;"  src=""> </image>
<span class= "Cinputkey"  >
<image class="Cinputkeyi" src="clef.png"
 style="
 
 draggable:false;
 
 position: absolute; margin: 0 !important;  
transform-origin: 0% 0%;
top: <?php echo $_SESSION["KPT"]*-10;?>px;
left: <?php echo $_SESSION["KPT"]*0;?>px;
 widtht: <?php echo $_SESSION["KPT"]*10;?>px;
 height: <?php echo $_SESSION["KPT"]*10;?>px;" 
></image>
<input  class= "Cinputkeyv" type="text" id="Btk0" name="Btk0"  draggable="false"
  Value="<?php echo $_SESSION["Kmove"];?>"
	 style="
 position: absolute; margin: 0 !important;  
transform-origin: 0% 0%;
top: <?php echo $_SESSION["KPT"]*-10;?>px;
left: <?php echo $_SESSION["KPT"]*0;?>px;
 font-size: <?php echo $_SESSION["KPT"]*20;?>px; 
 height:<?php echo $_SESSION["KPT"]*20;?>px;" 
  ></span>
<input draggable="false" type="<?php 
echo $MovetypeR;

?>" class="layerElementsb" id="layerpointerb" size = "3"
 name="layerpointerbs" Value="<?php if ($_SESSION["Valmove"]=="" or $_SESSION["TYPEmove"]=="Check" ){echo "";}else {echo $_SESSION["Valmove"];$_SESSION["Valmove"]="";} ?>" size="1" autocomplete="off" onchange="switchSize(event)"
 style="
font-size: <?php echo $_SESSION["KPT"]*10;?>px; 
 padding: 0;
 margin: 0;
 height: <?php echo $_SESSION["KPT"]*11;?>px;
 border: none;
 background: none;
  background-color: none;
text-decoration-thickness: 3px;
 z-index:9999999;
 <?php echo $inputStr;?>
 font-family: '<?php echo $_SESSION["Pmove"];?>';
  <?php echo $ChkTxt; ?>
  " 
  <?php echo $ChkTxtchecked; ?>
></input>




<hr size="3" style="
position: relative; margin: 0 !important;  
 overflow: visible;
width; 190%;
background-color:green;
left: 0%;
top: 3px;
color: blue;" 
>

<hr style="
position: relative; margin: 0 !important;  
 overflow: visible;
width; 190%;
top: -15px;
left: -50%;
color: red;" 
>
<hr style="
position: relative; margin: 0 !important;  
 overflow: visible;
width; 190%;
top:-47px;
left: -50%;
color: red;" 
>

<hr style="
position: relative; margin: 0 !important;  
 overflow: visible;
width; 190%;
top:-59px;
left: -50%;
color: orange;
/*1em = 16px   2px = trait et 2px de marge donc top:-2px; ligne du dessus*/
" 
>
<hr style="
position: relative; margin: 0 !important;  
 overflow: visible;
width; 190%;
top:-43px;
left: -50%;
color: bleu;
/*1em = 16px   2px = trait et 2px de marge donc top:-2px; ligne du dessus*/
" 
>
<div class="layerElementsPb" style="transform-origin: 0% 0%;">
<input id="PTi2"

	type="range" min="3" max="210" value="<?php echo $_SESSION["PTmove"];?>" step="1"
	 style="
	

	  position: absolute; margin: 0 !important;  
transform-origin: 0% 0%;
top: -1px;
left: -1px;
  transform: rotate(90deg);
	 font-size: 6px; 
 padding: 0;
 margin: 0;
 border-style: inset;
 size: 6px;
  " 
	onclick="getValuePT2();"	ontouchend="getValuePT2();" onmousemove="getValuePT2();"		
ontouchmove="getValuePT2();"></input>

</div> 



<input id="Dx" name="Dx" type="text" value="<?php echo $_SESSION["Dx"]; ?>"
 style="position: absolute; margin: 0 !important; top: -15px;
left: -10000px; visibility: hidden;
 "
></input>
<input id="Dy" name="Dy" type="text" value="<?php echo $_SESSION["Dy"]; ?>"
 style="position: absolute; margin: 0 !important; top: -1px;
left: -10000px; visibility: hidden;
 "
></input>
<input id="Dbt" name="Dbt" type="text" value="<?php echo $_SESSION["Dbt"]; ?>"
 style="position: absolute; margin: 0 !important; top: -1px;
left: -10000px; visibility: hidden;
 "
></input>
</div>

<div id="image" class="box" 


style=" 
align-self: start;
scale: 1 1;
transform-origin: 0% 0%;
position: absolute;

top: 0px; left: 0px;margin: 0 !important;
text-align: left; width: 12479px; height: 13504px;
background-color:<?php echo "black"; ?>;
background-image: url(<?php echo $_SESSION["SelectI"]; ?>);

background-size: 2479px 3504px;
background-repeat:no-repeat;
"
>

<div id="imagelayer"  ondblclick="fdclick();"
 onmousemove="touchmM(event);" onmousedown="IstartM(event);"
ontouchstart="Istart(event);" ontouchend="Iend(event);" ontouchcancel="Icanc(event);" ontouchmove="touchm(event);"
onscroll="souris(event);" onmousewheel="souris(event);"
 
style="align-self: start;
background-color:bleu;
transform-origin: 0% 0%;
scale: 1 1;
position: absolute;
text-align: left;
top: 0px; left: 0px;margin: 0 !important;
width: 2479px;
height: 3504px;">

<div style="
 position: absolute; margin: 0 !important;  
transform-origin: 0% 0%;
top: 7px;
left: 35px;
visibility: hidden;
 background-color: purple;"
>
<?php echo $selected_file; ?>
</div>
<style> 

</style> 

 
<?php 

for($i = 11; $i < count($arrayManager->downloadA()); ++$i) {
$GBSIv="";
$GBSIv=$arrayManager->readA($i,6);
//if(array_key_exists("G", $_POST)) {$GBSIv.="G";}
//if(array_key_exists("B", $_POST)) {$GBSIv.="B";}
//if(array_key_exists("S", $_POST)) {$GBSIv.="S";}
//if(array_key_exists("I", $_POST)) {$GBSIv.="I";}
//alertPHP($GBSIv); 
$txtPl=(Strlen($arrayManager->readA($i,3))+TextAnalyzer::countUppercase($arrayManager->readA($i,3)))*$arrayManager->readA($i,5)*0.02;
new Zonetxt($arrayManager->readA($i,1),$arrayManager->readA($i,2),$arrayManager->readA($i,5),$arrayManager->readA($i,3),$txtPl,$arrayManager->readA($i,0),$arrayManager->readA($i,7),$arrayManager->readA($i,4),$arrayManager->readA($i,6),$arrayManager->readA($i,8));// alertPHP($arrayManager->readA($i,6));
}
// construct ($inX,$inY,$inscale,$intxt,$inL)
?>

</div>


<Div class="Iplaque" id="data" name="data" style="
transform-origin: 0% 0%;
scale:<?php echo $_SESSION["Dbt"]; ?>;
 position: absolute; margin: 0 !important; 
"

 >  
 
			     

			 	
			  </br>
			  <table>
			  <tr> <th></th><th></th> <th></th><th></th>    <output id="result">
			  </output>  </tr>
				
 


			
					<tr><th>
					 <div class="vtooltip">
					<input type="x" name="x" id="x"class="formout" style="width:50px;"
				 value="<?php if ($_SESSION["Xmove"]=="X"){echo "x";} else {echo $_SESSION["Xmove"];$_SESSION["Xmove"]="X";} ?>

" 
				> </input>
				          <span class="vtooltiptext">
La coordonnée x vous permettra de positionner le repère de gauche à droite avec une précision au dixième de millimètre. Tant que x apparaît, cela signifie que la prévisualisation de saisie de nouvelle saisie n'est pas sortie !(par double-clic)						  
</span></div>

				</th><th>
				 <div class="vtooltip">
				<input type="y" name="y" id="y" class="formout" style="width:50px;"
				value="<?php if ($_SESSION["Ymove"]=="Y"){echo "y";}else {echo $_SESSION["Ymove"];$_SESSION["Ymove"]="Y";} ?>" 
				></input>
				<span class="vtooltiptext">
La coordonnée y vous permettra de positionner le repère de haut en bas avec une précision au dixième de millimètre ! Tant que y apparaît, cela signifie que la prévisualisation de saisie de nouvelles données n'est pas sortie !(par double clic)
</span></div>
				</th>
				 <th>
				  <div class="vtooltip">
				 <label for="elemType"> 
  <select name="elemType" id="elemType" onchange="ElemTypechange();">
    <option value="Text" <?php if ($_SESSION["TYPEmove"]=="Text"){echo "selected";$_SESSION["TYPEmove"]="";} ?>>Text</option>
    <option value="Check"<?php if ($_SESSION["TYPEmove"]=="Check"){echo "selected";$_SESSION["TYPEmove"]="";} ?>>Check</option>
    <option value="Img"<?php if ($_SESSION["TYPEmove"]=="Img"){echo "selected";$_SESSION["TYPEmove"]="";} ?>>Img</option>
     <option value="Date"<?php if ($_SESSION["TYPEmove"]=="Date"){echo "selected";$_SESSION["TYPEmove"]="";} ?>>Date</option>
	 <option value="Date"<?php if ($_SESSION["TYPEmove"]=="Time"){echo "selected";$_SESSION["TYPEmove"]="";} ?>>Time</option>
	<option value="Autre"<?php if ($_SESSION["TYPEmove"]=="Autre"){echo "selected";$_SESSION["TYPEmove"]="";} ?>>Autre</option>
	
  </select>
  		<span class="vtooltiptext">
Vous permet de sélectionner le type d'objet lié à la cellule : texte, clickbox et image. La zone de saisie permettra de préciser le chemin relatif de l'image (le x, y d'origine seront ceux de la cellule) Les deux cellules suivantes seront la largeur et la hauteur 
</span></div>
 </th>
 <th>
  <select name="elemFont" id="elemFont" onchange="Paspect()" >
    <option value="Courier"<?php if ($_SESSION["Pmove"]=="Courier"){echo "selected";$_SESSION["Pmove"]="";} ?>>Courier</option>
    <option value="Helvetica" <?php if ($_SESSION["Pmove"]=="Helvetica"){echo "selected";$_SESSION["Pmove"]="";} ?>>Helvetica</option>
    <option value="Arial"<?php if ($_SESSION["Pmove"]=="Arial"){echo "selected";$_SESSION["Pmove"]="";} ?>>Arial</option>
    <option value="Times"<?php if ($_SESSION["Pmove"]=="Times"){echo "selected";$_SESSION["Pmove"]="";} ?>>Times</option>
	<option value="Symbol"<?php if ($_SESSION["Pmove"]=="Symbol"){echo "selected";$_SESSION["Pmove"]="";} ?>>Symbol</option>
    <option value="ZapfDingbats"<?php if ($_SESSION["Pmove"]=="ZapfDingbats"){echo "selected";$_SESSION["Pmove"]="";} ?>>ZapfDingbats</option>
	</select>
	</th>
	  </tr>
	    <tr><th>
<input onchange="Paspect()"   class="graschk" name="G" value="G" type="checkbox" id="opt-inG" <?php echo $docB; ?>><label for="opt-inG" >G</label>
<input  onchange="Paspect()" class="barchk" name="B" value="B" type="checkbox" id="opt-inB" <?php echo $docL; ?>><label for="opt-inB" >B</label></th><th>
<input  onchange="Paspect()" class="surchk" name="S" value="S" type="checkbox" id="opt-inS" <?php echo $docU; ?>><label for="opt-inS" >S</label>
<input  onchange="Paspect()" class="itachk" name="I" value="I" type="checkbox" id="opt-inI" <?php echo $docI; ?>><label for="opt-inI" >I</label>
</th>


				<th><div class="vtooltip"><input type="number" min="3" max="210" name="PT" id="PT"class="formout" onchange="getValuePT3();"
				 value="<?php  echo $_SESSION["PTmove"]; ?>" style="width:60px;"
				>  <span class="vtooltiptext">
Cette option permet de grandir et de diminuer la taille de la cellule. Elle est également accessible près de la prévisualisation de création de nouvelles cellules.
			   </span></div></th><th>
				<div class="vtooltip">
				<button 
					 style="
 position: absolute; margin: 0 !important;  
transform-origin: 0% 0%;
bottom: 53px;
right: 2px;
 border-color: green;
background-image: url(docsend.png);
background-size: 100% 100%;
background-repeat:no-repeat;
width: 35px; height: 45px;
			  " type="submit" name="sendxy" id="sendxy" value=""></button>
			   <span class="vtooltiptext">
Validez une modification de cellules ou créez en une nouvelle. Equivalent à une suppression/recréation il est important de finir les déplacements pour éviter d'en refaire la création.
			   </span></div>
<div class="vtooltip">
<input type="color" id="Color" name="Color"onchange="Paspect()" 
           value="<?php echo $_SESSION["Cmove"]?>" 
		   style="
scale: 1 1;position: absolute; margin: 0 !important;  
 bottom: 51px;
right: 40px;
background-size: 100% 100%;
background-repeat:no-repeat;
width: 24px; height: 24px;
			  " >	
</input>
 <span class="vtooltiptext">
Permet de sélectionner une couleur via une interface !
			   </span></div>			  
<div class="vtooltip">
	 <button id="btN" onclick="flecheNave()" type="button" style="
scale: 1 1;position: absolute; margin: 0 !important;  
 bottom: 5px;
right: 65px;
 
background-image: url(arow.png);
background-size: 100% 100%;
background-repeat:no-repeat;
width: 25px; height: 25px;
			  " 
  ></button> <span class="vtooltiptext"> 
Un clic pour activer le repositionnement du document avec le curseur de la souris ! Pour arrêter, un autre clic suffit. Sur un écran tactile, il suffit de faire un "grab" avec un déplacement.
  </span></div>
  <div class="vtooltip">
   <button id="Btut" name="Btut" 

	 style="
 position: absolute; margin: 0 !important;  
transform-origin: 0% 0%;
 bottom: 5px;
right: 115px;
 
background-image: url(utilitaire.png);
background-size: 100% 100%;
background-repeat:no-repeat;
width: 20px; height: 25px;
			  " 
  ></button>
   <span class="vtooltiptext">
   utilitaire pour les miniatures de vidéo </span></div>
  <div class="vtooltip">
   <button id="Btpen" name="Btpen"  

	 style="
 position: absolute; margin: 0 !important;  
transform-origin: 0% 0%;
 bottom: 5px;
right: 91px;
 
background-image: url(pen.png);
background-size: 100% 100%;
background-repeat:no-repeat;
width: 20px; height: 25px;
			  " 
  ></button>
   <span class="vtooltiptext">
   Fait apparaître les options supplémentaires des cellules: -bouton de suppression et un bouton de déplacement
   (qui permet de changer les propriétés de la cellule comme : taille, placement, police, type, couleur et contenu).
   </span></div>
			   <div class="vtooltip">
	 <button id="btCentrer" onclick="Centrer()" type="button" style="
scale: 1 1;position: absolute; margin: 0 !important;  
 bottom: 5px;
right: 37px;
background-image: url(centrer.png);
background-size: 100% 100%;
background-repeat:no-repeat;
width: 25px; height: 25px;
			  " 
  ></button> <span class="vtooltiptext"> 
Un clic pour un repositionnement centré du document !
  </span></div>
  <div class="vtooltip">
  <?php 
  $messageIplaque="";
  if ($_SESSION["SelectI"]!=="choisir.png"){  $messageIplaque.="";} else {  $messageIplaque.='<span style="color:red;"> Img?</span>';};
  if ($_SESSION["SelectF"]!=="choisir.csv"){  $messageIplaque.="";} else {  $messageIplaque.='<span style="color:red;"> csv?</span>';}
   if ($_SESSION["SelectI"]!=="choisir.png" and $_SESSION["SelectF"]!=="choisir.csv"
   and file_exists($_SESSION["SelectF"])  and file_exists($_SESSION["SelectI"])) { 
								$messageIplaque="Img & csv";}
  echo  $messageIplaque;
  ?>
	<span class="vtooltiptext"> 
Si le message est rouge alors selectionnez grâce à l'extension de menu une image .png et un fichier .csv! </br> -CSV : <?php echo $_SESSION["SelectF"]; ?> !
 </br> -IMG : <?php echo $_SESSION["SelectI"]; ?> !
  </span></div>			
				</th>  </tr><tr><th></th><th>
					
	</th>	</form><th>

  </th><th>
  </th></tr></table>
<div class="vtooltip">
	 <button id="btplusgrand" name="btplusgrand" type="submit" style="
scale: 1 1;position: absolute; margin: 0 !important;  
 bottom: 20px;
right: 5px;
background-image: url(plusgrand.png);
background-size: 100% 100%;
background-repeat:no-repeat;
width: 15px; height: 15px;
			  " 
  ></button> <span class="vtooltiptext"> 
Un clic pour agrandir !
  </span></div><div class="vtooltip">
	 <button id="btpluspetit" name="btpluspetit" type="submit" style="
scale: 1 1;position: absolute; margin: 0 !important;  
 bottom: 20px;
left: 5px;
background-image: url(pluspetit.png);
background-size: 100% 100%;
background-repeat:no-repeat;
width: 15px; height: 15px;
			  " 
  ></button> <span class="vtooltiptext"> 
Un clic pour diminuer !
  </span></div>
  
<div class="avtooltip" 		style=" position: absolute;
		  margin: 0 !important;
left:40px;
top:0px;		 
width: 60px;


		 font-size:6px;
 padding: 0;
 margin: 0;">
				<input id="sizeDoc" name="sizeDoc"

onclick="getValueSD();"	ontouchend="getValueSD();" onmousemove="getValueSD();"		
ontouchmove="getValueSD();"
	type="range" min="19" max="100" value="<?php echo $_SESSION["Dz"]; ?>" step="1" 
		 style="
		 display:inline;
		 position: none;
		  margin: 0 !important;
width: 290px;
		 font-size:6px;
 padding: 0;
 margin: 0;
 border-style: inset;
 size: 6px;
  " 
	> <span class="avtooltiptext">
Permet de zoomer et de dézoomer la visualisation du document!
</span></div> 
	<div class="vtooltip">
	<input id="PTi"
	type="range" min="3" max="210" value="<?php echo $_SESSION["PTmove"];?>" step="1"
	 style="font-size: 6px; 
 padding: 0;
 margin: -6px;
margin-left:13px;
 border-style: inset;width: 305px;
 size: 6px;
  " 
	onclick="getValuePT();"	ontouchend="getValuePT();" onmousemove="getValuePT();"		
ontouchmove="getValuePT();">
<span class="vtooltiptext">
Cette option permet de grandir et de diminuer la taille de la cellule. Elle est également accessible près de la prévisualisation de création de nouvelles cellules.
</span></div> 
					<form  class="clsBtpdf" id="clsBtpdf" method="post" target="view" action="<?php echo htmlspecialchars("idx3.php");?>"> 
	<div class="vtooltip">
	<button id="Btpen" name="Btpen2"  

	 style="
 position: absolute; margin: 0 !important;  

bottom: 4px;
left: 190px;
 <?php if ($_SESSION["editF2"]==true){echo "transform: rotate(180deg);";}   ?>
background-image: url(bdown.png);
background-size: 100% 100%;
background-repeat:no-repeat;
width: 40px; height: 20px;
			  " 
  ></button>  <span class="vtooltiptext">
  Faites apparaître le sous-menu ! Pour vous connecter, visualiser un PDF ou télécharger une sauvegarde CSV. Le crayon permet de rendre les zones de saisie modifiables. Sélectionnez, téléchargez ou uploadez des fichiers.</span></div>
<div class="vtooltip">

<button id="Btinfo" name="Btinfo"  

	 style="
 position: absolute; margin: 0 !important;  
bottom: 4px;
left: 35px;
 <?php if ($_SESSION["editF2"]==true){echo "transform: rotate(12deg);";}   ?>
background-image: url(info2.png);
background-size: 100% 100%;
background-repeat:no-repeat;
width: 25px; height: 25px;
			  " 
  ></button>  <span class="vtooltiptext">
  FabDoc bêta 1.3_090323 (Fixed: input Auto size New:Img prev) est une application web qui facilite la création de formulaires web imprimables. Elle utilise un calque de fond PNG, des clicbox et des cellules. Le but est de maîtriser la programmation full stack (PHP8, JS, CSS, HTML).
</span></div>
 <div class="vtooltip">
  <button id="Btimgdl" name="Btimgdl"  

	 style="
 position: absolute; margin: 0 !important;  
transform-origin: 0% 0%;
bottom: 4px;
left: 105px;
 
background-image: url(imgdl.png);
background-size: 100% 100%;
background-repeat:no-repeat;
width: 20px; height: 25px;
			  " 
  ></button>
    <span class="vtooltiptext">
Permet de télécharger l'image de fond elle pourra être réimportée ultérieurement sur le serveur.  
  </span></div>
 <div class="vtooltip">
  <button id="Btcsv" name="Btcsv"  

	 style="
 position: absolute; margin: 0 !important;  
transform-origin: 0% 0%;
bottom: 4px;
left: 130px;
 
background-image: url(csvextend.png);
background-size: 100% 100%;
background-repeat:no-repeat;
width: 20px; height: 25px;
			  " 
  ></button>
    <span class="vtooltiptext">
Permet de télécharger une sauvegarde au format CSV. Cette dernière pourra être réimportée ultérieurement sur le serveur. Les données pourront aussi être exploitées dans des tableurs ou des bases de données.  
  </span></div>
   <div class="vtooltip">
          <button id="Btpdf" name="Btpdf"   style="
 position: absolute; margin: 0 !important;  
transform-origin: 0% 0%;
bottom: 4px;
left: 155px;
 
background-image: url(pdfextend.png);
background-size: 100% 100%;
background-repeat:no-repeat;
width: 20px; height: 25px;
			  " 
  ></button>
          <span class="vtooltiptext">
Permet de prévisualiser puis de télécharger ou d'imprimer le document au format PDF!
 </span></div>
<div class="vtooltip">
<button id="Btinfo2" name="Btinfo2"  

	 style="
 position: absolute; margin: 0 !important;  

 <?php if ($_SESSION["editF2"]==true){echo "transform: rotate(-12deg);";}   ?>
bottom: 4px;
left: 65px;
background-image: url(inter.png);
background-size: 100% 100%;
background-repeat:no-repeat;
width: 25px; height: 25px;
			  " 
  ></button>  <span class="vtooltiptext">Faites un double clic sur le document pour faire apparaître la nouvelle zone de saisie. Cette cellule, avant sa création, pourra changer ses propriétés : taille, placement, police, type, couleur et contenu. 
  </span></div>
  </form>
				
				<?php 
		//  <input type="submit" value="Submit">		
//			CSVopen(); ?>


<?php ?>
			
				
	<div class="divbutton" id="divbutton" >
	   
      <div class="btooltip">
     <button id="Btlogin" name="Btlogin"  

	 style="

 position: absolute; margin: 0 !important;  
transform-origin: 0% 0%;
bottom: 15px;
left: 25px;
 
background-image: url(login2.png);
background-size: 100% 100%;
background-repeat:no-repeat;
width: 35px; height: 35px;
			  " 
  ></button>
  
          <span class="btooltiptext">
Permet de se connecter afin de travailler sur sa version personnalisée. 
Un répertoire dédié vous sera attribué sur le serveur cloud !
 </span></div>
     <div class="btooltip">
     <button id="Btupl" name="Btupl"  

	 style="
 position: absolute; margin: 0 !important;  
transform-origin: 0% 0%;
bottom: 15px;
left: 65px;
 
background-image: url(upload.png);
background-size: 100% 100%;
background-repeat:no-repeat;
width: 30px; height: 35px;
			  " 
  ></button>
          <span class="btooltiptext">
Permet de transférer des fichiers de votre appareil vers votre répertoire dédié sur le serveur cloud, tels que des images au format PNG et des fichiers CSV.

 </span></div>
  <div class="btooltip">
       <button id="Btcloudci" name="Btcloudci"  

	 style="
 position: absolute; margin: 0 !important;  
transform-origin: 0% 0%;
bottom: 15px;
left: 95px;
 
background-image: url(selectI.png);
background-size: 100% 100%;
background-repeat:no-repeat;
width: 30px; height: 35px;
			  " 
  ></button>
 
        <span class="btooltiptext">
Permet de sélectionner le fichier image PNG avec lequel travailler.

 </span></div>
    <div class="btooltip">
       <button id="Btcloudc" name="Btcloudc"  

	 style="
 position: absolute; margin: 0 !important;  
transform-origin: 0% 0%;
bottom: 15px;
left: 125px;
 
background-image: url(cloudc.png);
background-size: 100% 100%;
background-repeat:no-repeat;
width: 30px; height: 35px;
			  " 
  ></button>
 
        <span class="btooltiptext">
Permet de sélectionner le fichier CSV avec lequel travailler.

 </span></div>
   <div class="btooltip">
       <button id="Btcloudcd"  name="Btcloudcd"  

	 style="
 position: absolute; margin: 0 !important;  
transform-origin: 0% 0%;
bottom: 15px;
left: 155px;
 background-image: url(cloudcdel.png);

background-size: 100% 100%;
background-repeat:no-repeat;
width: 30px; height: 35px;

			  " 
  ></button>
      <span class="btooltiptext">
Permet de supprimer des fichiers importés dans votre répertoire dédié sur le serveur cloud,
 tels que des images au format PNG et des fichiers CSV. Plus tard, la fonction de sauvegarde 
 cloud-à-cloud et de téléchargement direct sera implémentée
 </span></div>
  
 
 
       	
		 </div>	
		 
<Div class="IplaqueFiles" id="datafiles" name="datafiles" style="

scale:<?php echo $_SESSION["Dbt"]; ?>;
 position: absolute; margin: 0 !important; 
 bottom: -150px;
 transform-origin: 0% 0%;

">
<?php 



// echo $affdebb.$_SESSION["matrice"][0][0]."  ".$_SESSION["AD"].chr(34)." name=".chr(34)."val0p".$afffinb;
//echo $affdebb.$_SESSION["matrice"][0][1]."  ".$_SESSION["SC"].chr(34)." name=".chr(34)."val1p".$afffinb;
//echo $affdebb.$_SESSION["matrice"][0][2]."  ".$_SESSION["G"].chr(34)." name=".chr(34)."val2p".$afffinb;
//echo $affdebb.$_SESSION["matrice"][0][3]."  ".$_SESSION["CHG"].chr(34)." name=".chr(34)."val3p".$afffinb;
//echo $affdebb.$_SESSION["matrice"][0][4]."  ".$_SESSION["BO"].chr(34)." name=".chr(34)."val4p".$afffinb;
// at the end div allthedoc div
$uploader = new FileUploader("uploads/");

if(array_key_exists("Btupl", $_POST)) {
$uploader->displayForm();
}
$uploader->upload();

?>
<?php 
// save event onmousedown="fclick(event);" le 19 01 2023

//$uploader->upload();
//$uploader->displayForm();
$file_selector = new FileSelector();
  // Affichez le formulaire HTML

if(array_key_exists("Btpen", $_POST)) {
	    if ($_SESSION["editF"]==false){$_SESSION["editF"]=true;} else {$_SESSION["editF"]=false;}
		//la variable affecte le style de allwintop0 le css visible
		F5like(); //header("Refresh:0; url=index.php");//header("Refresh:0");
}
if(array_key_exists("Btpen2", $_POST)) {
	    if ($_SESSION["editF2"]==false){$_SESSION["editF2"]=true;} else {$_SESSION["editF2"]=false;}
		//la variable affecte le style de allwintop0 le css visible
		echo "<meta http-equiv=\"refresh\" content=\"0\">"; //header("Refresh:0; url=index.php");//header("Refresh:0");
}
  if(array_key_exists("Btlogin", $_POST)) {
	    $_SESSION["idx3"]="login";echo "<meta http-equiv=\"refresh\" content=\"0\">"; //header("Refresh:0; url=index.php");//header("Refresh:0");
}


if(array_key_exists("Btut", $_POST)) {

echo '<script>window.open("videoT.php", "_blank");</script>';
}
if(array_key_exists("Btcloudci", $_POST)) {
	   // $file_selector->display_form();
		//$_SESSION["selectedI"]=true;
		//alertPHP(" Selectioner une image !");
		    $file_selector->display_form(" Image .png","png");
		$_SESSION["selectedI"]=true;$_SESSION["deleteF"]=false;$_SESSION["deleteF"]=false;
}
if(array_key_exists("Btcloudc", $_POST)) {
	//alertPHP(" Selectioner un fichier !");
	    $file_selector->display_form("un tableaur .csv","csv");
		$_SESSION["selectedF"]=true;$_SESSION["selectedI"]=false;$_SESSION["deleteF"]=false;
}
if(array_key_exists("Btcloudcd", $_POST)) {
	alertPHP(" Attention, vous sélectionnez un fichier à supprimer !");
	    $file_selector->display_form("à supprimer","");
$_SESSION["deleteF"]=true;$_SESSION["selectedI"]=false;$_SESSION["deleteF"]=false;
}

  // Sélectionnez le fichier lorsque le formulaire est soumis
  $file_selector->select_file();
  // Récupérez le chemin du fichier sélectionné
  $selected_file = $file_selector->get_selected_file();
    //alertPHP(" select ".$selected_file." exist? ".(file_exists($selected_file)));
  // Vous pouvez maintenant utiliser le chemin du fichier comme vous le souhaitez, par exemple pour l'ouvrir ou le lire.
  if (file_exists($selected_file)){
  //alertPHP(" le fichier exist  select".$selected_file); 
		if ( 
		$selected_file!="uploads/." and $selected_file!="uploads/.." 
		and $_SESSION["deleteF"] and !(array_key_exists("Btcloudcd", $_POST))){
			 $_SESSION["deleteF"]=false;
		FileUtils::delete_file($selected_file);
		F5like(); } else {  $_SESSION["deleteF"]=false;} 
	   if ($_SESSION["selectedI"]){
		   $_SESSION["selectedI"]=false;$_SESSION["SelectI"]=$selected_file;
		   //alertPHP("I = ".$_SESSION["SelectI"]);
		   F5like(); } else {  $_SESSION["selectedI"]=false;}  
	   if (
	   $_SESSION["selectedF"]){$_SESSION["selectedF"]=false;$_SESSION["SelectF"]=$selected_file; 
	   //alertPHP("F = ".$_SESSION["SelectF"]);
	   F5like(); } else {  $_SESSION["selectedF"]=false;}

	}
//reset move/edit value after used 
$_SESSION["Kmove"]="";		
?>

</div> 
				</div>


<div class="mover" >
 <span style= "position: absolute;transform-origin: 0% 0%;
top: 0px; left: 0px; opacity: 0.2;" id="info_sourit" ></span>
 <span style= "position: absolute;transform-origin: 0% 0%;
top: 0px; left: 0px;" id="info_image"></span>
<br/>
 <span style= "position: absolute;transform-origin: 0% 0%;
top: 0px; left: 0px;" id="info_point"></span>

</div>
</div>


	

