<?php
session_start();
//  Fab info , 210 × 297 
// Fab info, GetPageWidth() et  GetPageHeight() comme float return permettent indique des mm
// Largeur de : 210.00155555556
// Hauteur de : 297.00008333333

function StrEnTab($chaine,$intall) {
	//3 attendu substr_count
	  $tableauA = explode(",", $chaine);
	$CoutnV=substr_count($chaine,",");
	if ($CoutnV<=2){
		if ($CoutnV==0){$chaine.=",".$intall.",".$intall;}
		if ($CoutnV==1){$chaine.=",".$tableauA[1];	}
	}
  $tableau = explode(",", $chaine);
  return $tableau;
}
function F5like(){echo "<meta http-equiv=\"refresh\" content=\"0\">";}
function alertPHP($alertPHPin){ echo "<script>alert(\">>  ";echo "Php_io : ".$alertPHPin."  <<\")</script>";}
require('fpdf.php');
class ArrayManager {
  private $array;
//count($array) % 10 != 0
  public function __construct($array) {
    //if (count($array) % 10 != 0) {
      //throw new Exception("Le nombre d'éléments du tableau doit être un multiple de 10.");
    //}
    $this->array = $array;
  }
//count($row) != 10
  public function addRow($row) {
    if (count($row) != 10) {
      throw new Exception("Le nombre d'éléments de la ligne doit être égal à 10.");
    }
    array_push($this->array,$row);
  }

  public function downloadA() {
    return $this->array;
  }
  public function readA($rowin,$colin) {
    return $this->array[$rowin][$colin];
  }
}
class csvO {
  public static function Rf($filename) {
    $csvFile = fopen($filename, 'r');

    $data = array();

    while (($line = fgetcsv($csvFile)) !== FALSE) {
      $data[] = $line;
    }

    fclose($csvFile);

    return $data;
  }

  public static function Wf($filename, $data) {
    $csvFile = fopen($filename, 'w');

    foreach ($data as $line) {
      fputcsv($csvFile, $line);
    }

    fclose($csvFile);
  }
}

function StrE($str,$mot){
	$strexistrep=false;
	 if(strpos($str, $mot) !== false){
		 $strexistrep=true;
    //echo "Le mot existe!";
  } else{
	  $strexistrep=false;
    //echo "Le mot n'existe pas!";
  }

	return $strexistrep;
}
class PDF extends FPDF
{
// FAB EXTEND // VAR W H et fonction FabFond(String "Image path") 
// aussi fonction checkbox(x,y,bool istrue?)
function subWrite($h, $txt, $link='', $subFontSize=12, $subOffset=0)
{
    // resize font
    $subFontSizeold = $this->FontSizePt;
    $this->SetFontSize($subFontSize);
    
    // reposition y
    $subOffset = ((($subFontSize - $subFontSizeold) / $this->k) * 0.3) + ($subOffset / $this->k);
    $subX        = $this->x;
    $subY        = $this->y;
    $this->SetXY($subX, $subY - $subOffset);

    //Output text
    $this->Write($h, $txt, $link);

    // restore y position
    $subX        = $this->x;
    $subY        = $this->y;
    $this->SetXY($subX,  $subY + $subOffset);

    // restore font size
    $this->SetFontSize($subFontSizeold);
}
function FabFond($imgFondPath)
{
	$H=$this->GetPageHeight();	
	$W=$this->GetPageWidth();
	$this->Image($imgFondPath,0,0,$W,$H);
}
function checkbox($X,$Y,$checked = TRUE, $checkbox_size = 5 , $ori_font_family = 'Arial', $ori_font_size = '10', $ori_font_style = '' )
{
if($checked == TRUE)
$check = "4";
else
$check = "";
$ori_font_size=$checkbox_size*2.5/1.8;
$this->SetXY($X,$Y);
$this->SetFont('ZapfDingbats','', $ori_font_size);
$this->Cell($checkbox_size, $checkbox_size, $check, 1, 0);
$this->SetFont( $ori_font_family, $ori_font_style, $ori_font_size);
}
// En-tête
function Header()
{
	// Logo
	//$this->Image('fab/assets/image.png',10,6,30);
	//$this->Ln(20);
	// Police Arial gras 15
	//$this->SetFont('Arial','B',15);
	// Décalage à droite
	//$this->Cell(80);
	// Titre
	//$this->Cell(0,0,'DEMANDE DE MISSION',0,0,"C");


	//$this->Ln(05);
	//$this->SetFont('Times','I',12);
	//$this->Cell(0,10,'�  remplir obligatoirement par la personne concern�e',0,1,"C");
	// Saut de ligne
	//$this->Ln(05);
	//$this->SetFont('Arial','B',12);
	//$this->Cell(0,0,'LORDRE DE MSSION DOIT ETRE EN VOTRE POSSESSION LORS DE VOTRE DEPLACEMENT',0,0,"C");

}

// Pied de page
function Footer()
{
	// Positionnement à 1,5 cm du bas
	$this->SetY(-15);
	// Police Arial italique 8
	$this->SetFont('Arial','I',8);
	// Numéro de page
	//$this->Cell(0,10,'Page '.$this->PageNo().'/{nb}',0,0,'c');
}
}
function hex2rgb($hex) {
	$hex = str_replace("#", "", $hex);
	if(strlen($hex) == 3) {
		$r = hexdec(substr($hex,0,1).substr($hex,0,1));
		$g = hexdec(substr($hex,1,1).substr($hex,1,1));
		$b = hexdec(substr($hex,2,1).substr($hex,2,1));
	} else {
		$r = hexdec(substr($hex,0,2));
		$g = hexdec(substr($hex,2,2));
		$b = hexdec(substr($hex,4,2));
	}
	$rgb[0]=$r;$rgb[1]=$g;$rgb[2]=$b;
	return $rgb;
}




// Instanciation de la classe dérivée
$arrayManager = new ArrayManager(csvO::Rf($_SESSION["SelectF"]));

	$pdf = new PDF();
	$pdf->SetAutoPagebreak(False);
$pdf->SetMargins(0,0,0);
$pdf->AliasNbPages();
$pdf->AddPage();
$pdf->FabFond($_SESSION["SelectI"]);
$pdf->setMargins(0,0,0);
//$pdf->checkbox(70,157.2,TRUE);
	for($i = 11; $i < count($arrayManager->downloadA()); ++$i) { 
		$convb=utf8_decode($arrayManager->readA($i,3));
	$cor=1;
	$Inpt=$arrayManager->readA($i,5)*$cor;
	$inPtseul=$arrayManager->readA($i,5);
	//$pdf->SetXY($arrayManager->readA($i,1)-$convT*3.1/5,$arrayManager->readA($i,2)+$convT*1.8/10); et $convT=$Inpt*2.5/10; for 3.2 K $_SESSION["KPT"] now 4.6
	$convT=$Inpt*2.5/10;// mm convert 4mm pour 1O de police dans le html 12 de police dans fpdf
		if ($arrayManager->readA($i,0)=="Text" or $arrayManager->readA($i,0)=="Date" or $arrayManager->readA($i,0)=="Time"){
			$sixV="";
			$sixVa=$arrayManager->readA($i,6);
			if ($sixVa==7){$sixV="";  } else {
				if(StrE($sixVa,"B")) {$sixV.="B";}
				if(StrE($sixVa,"U")) {$sixV.="U";}
				if(StrE($sixVa,"I")) {$sixV.="I";}
				
		
			}
			 //$StrE($str,$mot) BUI  Line(float x1, float y1, float x2, float y2)
			$pdf->SetFont($arrayManager->readA($i,4),$sixV,$inPtseul);
			$debutBas=0.33*$inPtseul;
			$xdoc=$arrayManager->readA($i,1)-0.99;//0.006 0.09
			$ydoc=$arrayManager->readA($i,2)+$inPtseul*3.6/10*0;
			$ydocL=$ydoc+$debutBas*0.55;
			$debutG=$debutBas*0.5;
			$colT=hex2rgb($arrayManager->readA($i,7));
			$pdf->SetTextColor($colT[0],$colT[1],$colT[2]);//	alertPHP($colT[0]);
			$pdf->SetDrawColor($colT[0],$colT[1],$colT[2]);// SetDrawColor(int r [, int g, int b])
			$pdf->SetXY($xdoc,$ydoc);
			
			$pdf->Write($debutBas*1.1, $convb);
			if(StrE($sixVa,"L")) {
				$pdf->Line($xdoc+$debutG,$ydocL,$pdf->GetX()+$debutG,$ydocL);
				}
			//$pdf->Cell(210, $convT, $convb, 0, 0);
		//$pdf->text($arrayManager->readA($i,1),$arrayManager->readA($i,2)+$convT*0.35,$convb);
		//$convb=mb_convert_encoding($arrayManager->readA($i,3),"ANSI");
			//new Zonetxt($arrayManager->readA($i,1),$arrayManager->readA($i,2),$arrayManager->readA($i,5),$arrayManager->readA($i,3),2); 
			//$pdf->Text($arrayManager->readA($i,1),$arrayManager->readA($i,2),$convb);
			//$pdf->SetXY($arrayManager->readA($i,1),$arrayManager->readA($i,2)+$convT*0.08);
			
			//$pdf->cell($convT*0.3,$convT*0.3,$convb,0,"");
			//$pdf->subWrite($convT/3,$convb,'',$convT);
		}
		if ($arrayManager->readA($i,0)=="Check"){
			if($convb=="true"){$convbbool=TRUE;}else{$convbbool=FALSE;}
			
			$pdf->checkbox($arrayManager->readA($i,1)-$convT*2.3/10*0,$arrayManager->readA($i,2)+$convT*0.3/10*0,
			$convbbool,$Inpt/2);	
		}
		if ($arrayManager->readA($i,0)=="Img"){
				$thisimage=StrEnTab($arrayManager->readA($i,3),$arrayManager->readA($i,5));
				if(!file_exists("uploads/".$thisimage[0]) or $thisimage[0]==""){}else{
					$pdf->Image("uploads/".$thisimage[0], $arrayManager->readA($i,1)-$convT*2.3/10*0,$arrayManager->readA($i,2)+$convT*0.3/10*0, $thisimage[1],$thisimage[2]);
				}
		}
	
		$pdf->SetTextColor(0,0,0);//	alertPHP($colT[0]);
		$pdf->SetDrawColor(0,0,0);
	}
	$pdf->Output();


	//$pdf->Cell(30,5,'      Voiture >',0,0);
	//$pdf->checkbox(TRUE);
	//$pdf->Ln(20);
	//$pdf->Image('fab/assets/train.png',$pdf->GetX(),$pdf->GetY(),5);
	//$pdf->Cell(30,5,'      Train : ',0,0);
	//checkbox( $pdf, FALSE);
	//$pdf->Ln(20);
	//$pdf->Image('fab/assets/avion.png',$pdf->GetX(),$pdf->GetY(),5);
	//$pdf->Cell(30,5,'      Avion : ',0,0);
	//checkbox( $pdf, FALSE);
	//$pdf->Ln(20);
	//$pdf->Image('fab/assets/hotel.png',$pdf->GetX(),$pdf->GetY(),5);
	//$pdf->Cell(30,5,'      Hotel : ',0,0);
	//checkbox( $pdf, FALSE);
	//$pdf->Ln(20);

//$pdf->Cell(0,10,'� remplir obligatoirement par la personne concern�e',0,1);
	//$pdf->Ln(20);
	//$pdf->SetFont('Times','I',12);
//for($i=1;$i<=4;$i++){
	//$pdf->Cell(0,10,'Impression de la ligne num�ro '.$i,0,1);
	//}
//$W=$pdf->GetPageWidth();
//	$pdf->Cell(0,10,"Largeur de : ".$W,0,1);
//	$H=$pdf->GetPageHeight();
//	$pdf->Cell(0,10,"Hauteur de : ".$H,0,1);
$pdf->Output('F', 'save/ol.pdf');
$pdf->Output();
?>