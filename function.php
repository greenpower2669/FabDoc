<?php
//function_lib from fab
$io=$io." read begin of func ...";
// fonctions liées à la date
function datestr(){
  return  "Le ".date("d/m/Y")." à ".date("H")."h".date("i")." et ".date("s")."s ";
}
function codedatestr(){
  return date("Ymd").date("H").date("i").date("s").implode(" ",$_COOKIE)."_".$_SESSION["matrice"][0][0]."_"
  .$_SESSION["matrice"][0][1]."_".$_SESSION["matrice"][0][2]."_".$_SESSION["matrice"][0][3]."_".$_SESSION["matrice"][0][4]."_"
  .$_SESSION["matrice"][0][5];
}

function codedate(){
  return date("Ymd").date("H").date("i").date("s");
}
class Fabconv{
	public static function sH($string){
		$hex='';
		for ($i=0; $i < strlen($string); $i++){
			$hex .= dechex(ord($string[$i]));
		}
		return $hex;
	}
	public static function hS($hex){
		$string='';
		for ($i=0; $i < strlen($hex)-1; $i+=2){
			$string .= chr(hexdec($hex[$i].$hex[$i+1]));
		}
		return $string;
	}
}

class Fab {
  public static function AlltoString($inarr) {
    $str = '';
		if (!is_array($alertPHPin)) {$str .= $inarr;} else {
			foreach ($inarr as $key => $value) {
				if (!is_array($value)) {$str .= $key . '=' . $value . ' -&- ';} else {
				foreach ($value as $key2 => $value2) {
					$str .= $key2 . '=' . $value2 . ' -&- ';
				}
			}
			}
		}
    return rtrim($str, '&');
  
	}
}
function showTab($intabornotdeep2){
	echo "<script>alert(\" >>>>>> ";echo "Post :".Fab::AlltoString($intabornotdeep2)."  <<<<<< \")</script>";}
function CSVopen(){
	// 
	// save tools in csv and open it 
	// Define datas:
	// type type x y value  police taille argument in matrice doc type saved or model date
	// 
	// type "image" value
	// type "clickbox"
	// type "number"
	// type "date"
	// type data
	// value
	// police 
	// taille
	// argument
	// ligne 1  Image 0 0 "ol.png"  << data
	// ligne 2 date de création
	// ligne 3 date de modification
	// DONC 7 C ET -10 ROWS
	
$file_to_read = fopen('data.csv', 'r');

if($file_to_read !== FALSE){
echo "<table>\n";
while(($data = fgetcsv($file_to_read, 100, ',')) !== FALSE){
echo "<tr>";for($i = 0; $i < count($data); $i++){echo "<td>".$data[$i]."</td>";}echo "</tr>\n";}
echo "</table>\n";
fclose($file_to_read);
}
}
function pushmatrice(){
  $_SESSION["matrice"][$_SESSION["curseur"]][0]=$_SESSION["AD"];
  $_SESSION["matrice"][$_SESSION["curseur"]][1]=$_SESSION["SC"];
  $_SESSION["matrice"][$_SESSION["curseur"]][2]=$_SESSION["G"];
  $_SESSION["matrice"][$_SESSION["curseur"]][3]=$_SESSION["CHG"];
  $_SESSION["matrice"][$_SESSION["curseur"]][4]=$_SESSION["BO"];
  if ($_SESSION["info"]==""){$_SESSION["info"]=codedate();}
  $_SESSION["matrice"][$_SESSION["curseur"]][5]=$_SESSION["info"];
  $_SESSION["matrice"][$_SESSION["curseur"]][6]=$_SESSION["lientemp"];
  $_SESSION["curseur"]+=1;
}

function fromrightc( $chain, $nb ) {
    $io=$io." use fromright ! ";
    $chain=substr($chain,$nb); 
    //$io=$io." use fromright return ! ".$chaine;//io n'a pas de de héritage ici
    return $chain;
    }
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
  
function lol() {//test of require or include, test ok!
   $io=$io." ...lol used..."; 
return "lol";}

function fromright( $chaine, $nb ) {
    // Nombre de caractère
    if(strlen($chaine)>=$nb)
    {
    // Met la portion de chaine dans $chaine
    $chaine=substr($chaine,0,$nb); 
    // position du dernier espace
    $espace=strrpos($chaine," "); 
    // test si il ya un espace
    if($espace)
    // si ya 1 espace, coupe de nouveau la chaine
    $chaine=substr($chaine,0,$espace);
    // Ajoute ... à la chaine
    $chaine .= '...';
    }
    return "ok!";//$chaine;
    }
function test_input($data) {
  $data = trim($data);
  $data = stripslashes($data);
  $data = htmlspecialchars($data);
  return $data;
}
function styleimg($styleimgin){
  echo "style=".chr(34)."background:url(".$styleimgin.");background-size:
   50%;background-repeat: no-repeat;background-color: #FFFFFF;background-position: center;".chr(34);
}



$io=$io."...read ended of func! ";
return " funct loaded! ";

Function setinfo($setinfo){
  $_SESSION["info"]=$setinfo;
}

function sendtxt($inscale,$intxt){ // utilisé dans idx2 et 3_main
  ?>
  <form id="02" method="post" target="_parent" action="<?php echo htmlspecialchars("index.php");?>"> 
<input type="text" class="<?php 
if ($inscale==2){echo "buttonaff";} else { echo "infochg";}?>
" id="infot" name="infot" Value="<?php echo $intxt; ?>" size=<?php echo ($inscale*4); ?> autocomplete="off"
style=
"    

    " 	
> 

</form>
<?php
}
?>
<?php

//$pizza  = "piece1 piece2 piece3 piece4 piece5 piece6";
//$pieces = explode(" ", $pizza);
//echo $pieces[0]; // piece1
//echo $pieces[1]; // piece2

class ArrayManager {
  private $array;
//count($array) % 10 != 0
  public function __construct($array) {
    //if (count($array) % 10 != 0) {
      //throw new Exception("Le nombre d'éléments du tableau doit être un multiple de 10.");
    //}
    $this->array = $array;
  }
//count($row) != 10pu
public function trieC10() {
  // Trier le tableau en fonction de la colonne 10
  $tableau=$this->array;
				  // Extraire les données à partir de la ligne 10 jusqu'à la fin
			  $donnees_a_trier = array_slice($tableau, 10);
			  
			  // Trier les données en fonction de la colonne 10
			  usort($donnees_a_trier, function($a, $b) {
				return intval($a[9]) - intval($b[9]);
			  });
			  
			  // Réassembler les données triées avec les données non triées
			  $tableau_trie = array_merge(array_slice($tableau, 0, 10), $donnees_a_trier);
			  
$this->array=$tableau_trie;
}

  public function addRow($row) {
    if (count($row) != 10) {
      throw new Exception("Le nombre d'éléments de la ligne doit être égal à 10.");
    }
    array_push($this->array,$row);
  }
 public function removeRow($index) {
    if ($index < 0 || $index >= count($this->array)) {
      throw new Exception("L'index de la ligne à supprimer est incorrect.");
    }
    unset($this->array[$index]);
    $this->array = array_values($this->array);
  }
  
  public function downloadA() {
    return $this->array;
  }
  public function setA($a,$b,$c) {
    $this->array[$a][$b]=$c;
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
//$finalArray = $arrayManager->downloadA();
//$array = array(1, 2, 3, 4, 5, 6, 7, 8, 9, 10, 11, 12, 13, 14, 15, 16, 17, 18, 19, 20);
//$arrayManager = new ArrayManager($array);

//class txt zone
class ZonePTS
{
public $X;
public $Y;
public $Zoom;
function __construct ($inX,$inY,$inzoom)
	{
	$this->X=$inX;
	$this->Y=$inY;
	$this->Zoom;
	$this->Print();
	}
public function Print()
	{
  ?>
  
  <form id="02" method="post" target="_parent" action="<?php echo htmlspecialchars("index.php");?>"> 
  <input type="submit" name="loupe"
                                    class="PTS"  value=""
                                       
style=" 
<?php echo " 
transform: scale(0.4, 0.4);
   
position: absolute;
 width: 5px;height:5px;
top: ".$this->Y."px; left: ".$this->X."px;" ?> 
"									
                              />

</form>
<?php
	}
} // end class ZonePTS



// Exemple d'utilisation de la classe CSV
//$dataOl = csvO::Rf('ol.csv');
//csvO::Wf('ol.csv', $data);
//$finalArray = $arrayManager->downloadA();
//$array = array(1, 2, 3, 4, 5, 6, 7, 8, 9, 10, 11, 12, 13, 14, 15, 16, 17, 18, 19, 20);
//$arrayManager = new ArrayManager($array);
//$arrayManager = new ArrayManager(csvO::Rf('ol.csv'));
//$arrayManager->addRow(array(1, 2, 3, 4, 5, 6, 7, 8, 9, 10));
//csvO::Wf('ol.csv', $arrayManager->downloadA());
	
//class txt zone
class TextAnalyzer {
   public static function countUppercase($text) {
       $uppercaseCount = 0;
       for ($i = 0; $i < strlen($text); $i++) {
           if (ctype_upper($text[$i])) {
               $uppercaseCount++;
           }
       }
       return $uppercaseCount;
   }
}

class Downloader {
  public static function downloadFile($file_url) {
    // Récupère le nom du fichier à partir de l'URL
    $file_name = basename($file_url);

    // Envoie les en-têtes HTTP pour indiquer au navigateur qu'il s'agit d'un téléchargement
    header('Content-Type: application/octet-stream');
    header("Content-Transfer-Encoding: Binary"); 
    header("Content-disposition: attachment; filename=\"" . $file_name . "\""); 

    // Lit le fichier et envoie son contenu au navigateur
    readfile($file_url);
    exit;
  }
}

// Pour télécharger un fichier, tu peux maintenant utiliser:
//Downloader::downloadFile('https://exemple.com/monfichier.pdf');
// Exemple d'utilisation
//echo TextAnalyzer::countUppercase('Bonjour tout le monde !'); // affiche 1
//Doc::A4Wdoc($xin);
class Doc {
  const a4W = 210;
  const a4H = 297;
  const docW = 2479;
  const docH = 3504;
  public static function A4Wdoc($xin){
return intval($xin*doc::docW/doc::a4W);
  }
  public static function A4Hdoc($yin){
return intval($yin*doc::docH/doc::a4H);
  }
  public static function getiD($x, $y) {
	  $z=doc::a4W*10*floatval($y)+floatval($x)*10;
    return strval($z);
  }
}

//$formData = FormData::toString();


class FileUploader {
  private $target_dir;

  public function __construct($target_dir) {
    $this->target_dir = $target_dir;
  }

  public function upload() {
    // Vérifiez si le formulaire a été soumis
    if (isset($_POST['submitf'])) {
      // Récupère le nom du fichier téléchargé
      $file = $_FILES['file']['name'];

      // Récupère le chemin temporaire du fichier téléchargé sur le serveur
      $file_tmp = $_FILES['file']['tmp_name'];

      // Définissez où vous souhaitez que le fichier soit enregistré sur votre serveur
      $target_file = $this->target_dir . basename($file);
//alertPHP(" le fichier est disponible!"); si true
      // Déplacez le fichier téléchargé dans le répertoire de destination
     if  (move_uploaded_file($file_tmp, $target_file)){} else {// alertPHP("Le fichier est maintenant disponnible à la sélection!");
	 }
    }
  }

  public function displayForm() {
    ?>
      

      <form style="
	      border-style: double;
background-color: #A2D9CE;
 border-color: #D61425;
	  " target="view" action="<?php echo htmlspecialchars("idx3.php");?>" method="post" enctype="multipart/form-data">
         <input type="hidden" name="MAX_FILE_SIZE" value="30000000"></br>
		<input type="file" name="file"></br>
        <input type="submit" name="submitf" value="Uploader!"></br>
      </form>
    <?php
  }
}




//$uploader = new FileUploader("uploads/");

//$uploader->upload();
//$uploader->displayForm();
// Créez une fonction statique pour déplacer les fichiers
//FileUtils::Array_file_isgood($array)
class FileUtils { 
  // Créez une fonction statique pour déplacer les fichiers
  static function move_files($source_folder, $destination_folder) {
    // Vérifiez si le dossier source existe
    if (!is_dir($source_folder)) {
      throw new Exception('déplacement 1 Le dossier source n\'existe pas');
    }

    // Vérifiez si le dossier de destination existe, sinon créez-le
    if (!is_dir($destination_folder)) {
      mkdir($destination_folder);
    }

    // Ouvrez le dossier source
    $dir = opendir($source_folder);

    // Parcourez tous les fichiers du dossier source
    while (($file = readdir($dir)) !== false) {
      // Ignorez les éléments "." et ".."
      if ($file == '.' || $file == '..') {
        continue;
      }

      // Déplacez le fichier vers le dossier de destination
      rename($source_folder . '/' . $file, $destination_folder . '/' . $file);
    }

    // Fermez le dossier source
    closedir($dir);
  }

  // Créez une fonction statique pour déplacer un fichier
  static function move_file2($source_file, $destination_file) {
    // Vérifiez si le fichier source existe
    if (!file_exists($source_file)) {
      throw new Exception('déplacement : Le fichier source n\'existe pas');
    }

    // Déplacez le fichier vers le dossier de destination
    rename($source_file, $destination_file);
  }

  // Créez une fonction statique pour copier et supprimer un fichier
  static function copy_and_delete_file($source_file, $destination_file) {
    // Vérifiez si le fichier source existe
    if (!file_exists($source_file)) {
      throw new Exception('copie and del: Le fichier source n\'existe pas');
    }

    // Copiez le fichier source vers le fichier de destination
    copy($source_file, $destination_file);

    // Supprimez le fichier source
    unlink($source_file);
  }

  // Créez une fonction statique pour supprimer un fichier
  static function delete_file($file) {
    // Vérifiez si le fichier existe
    if (!file_exists($file)) {
      throw new Exception('Le fichier pour supp. n\'existe pas');
    }

    // Supprimez le fichier
    unlink($file);
  }
  static function Array_file_isgood($arrayin) {
	  $isgood=false;
	  if (is_array($arrayin) and in_array("police", $arrayin[0]) 
		  and in_array("x", $arrayin[0]) and in_array("y", $arrayin[0])){
		
		if (count($arrayin) >= 10) {
		$isgood=True;
		for($i = 0; $i < count($arrayin); ++$i) {
			$rowin=$arrayin[$i];
		if (is_array($rowin) and (count($rowin) == 10)	){} else {$isgood=false;echo "<script>alert(\"err=";echo "n'est pas un tab. ou est diff. à 10 elem. ".$isgood." en cours\")</script>";}
	 
		//and (count($rowin) != 10)	
		//echo "<script>alert(\"id=";echo "Bts".$arrayManager->readA($i,9)." en cours\")</script>";
		
		}
	}else { echo "<script>alert(\"err=";echo "est inférieur à 10 lignes ".$isgood." \")</script>";}
	} else { echo "<script>alert(\"err=";echo "n est soit pas un tab ou est non conforme".$isgood." en cours\")</script>";}
	return $isgood;
	}

}
class FormData {
  public static function toString() {
    $str = '';
    foreach ($_POST as $key => $value) {
      $str .= $key . '=' . $value . ' -&- ';
    }
    return rtrim($str, '&');
  }
}

//echo "<script>alert(\"id=";echo "Post :".FormData::toString()." en cours\")</script>";
function F5like(){echo "<meta http-equiv=\"refresh\" content=\"0\">";}
function alertPHP($alertPHPin){ 
if (is_array($alertPHPin)) {}
echo "<script>alert(\">>  ";echo "Php_io : ".$alertPHPin."  <<\")</script>";}
//echo "<script>alert(\"id=";echo "Post :".FormData::toString()." en cours\")</script>";
// Utilisez la fonctin pour déplacer un fichier
//fileUtils::move_file('/chemin/vers/fichier/source.txt', '/chemin/vers/fichier/destination.txt');
class FileSelector {
  // Répertoire contenant les fichiers
  private $dir = 'uploads';
  // Chemin du fichier sélectionné
  private $selected_file;

  public function select_file() {
    // Vérifiez si le formulaire a été soumis
    if (isset($_POST['submitupl'])) {
      // Récupérez le nom du fichier sélectionné
      $selected_file = $_POST['file'];
      // Concaténez le nom du fichier au chemin du répertoire pour obtenir le chemin complet du fichier sur le serveur
      $this->selected_file = $this->dir . '/' . $selected_file;
      // Vous pouvez maintenant utiliser le chemin du fichier comme vous le souhaitez, par exemple pour l'ouvrir ou le lire.
    }
  }

	public function display_form($intype,$inext1="",$inext2="",$inext3="") {
    // Ouvrez le répertoire contenant les fichiers
    $files = opendir($this->dir);
    // Affichez le formulaire HTML
?>
<div style="
border-style: double;
background-color: #A2D9CE;
border-color: #D61425;
">
<?php
    echo '<form action="' . $_SERVER['PHP_SELF'] . '" method="post">';
    echo '<label for="file">Sélectionnez un fichier '.$intype.' :</label>';
    echo '<select name="file" id="file">';
    // Parcourez les fichiers du répertoire et affichez-les comme des options de la liste déroulante
    while (($file = readdir($files)) !== false) {
		if (strpos($file,$inext3)==true or strpos($file,$inext2)==true or strpos($file,$inext1)==true or $inext1=="" ){
      echo '<option value="' . $file . '">' . $file . '</option>';
		}
    }
    echo '</select>';
    echo '<input type="submit" name="submitupl" value="Envoyer">';
    echo '</form></div>';
    // Fermez le répertoire
    closedir($files);
  }
  
  public function get_selected_file() {
    return $this->selected_file;
  }
}
 // Créez une instance de la classe FileSelector
  //$file_selector = new FileSelector();
  // Affichez le formulaire HTML
  //$file_selector->display_form();
  // Sélectionnez le fichier lorsque le formulaire est soumis
  //$file_selector->select_file();
  // Récupérez le chemin du fichier sélectionné
  //$selected_file = $file_selector->get_selected_file();
  // Vous pouvez maintenant utiliser le chemin du fichier comme vous le souhaitez, par exemple pour l'ouvrir ou le lire.
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

function downloadF($inFile){

$file = $inFile;

if (file_exists($file)) {
    header('Content-Description: File Transfer');
    header('Content-Type: application/octet-stream');
    header('Content-Disposition: attachment; filename="'.basename($file).'"');
    header('Expires: 0');
    header('Cache-Control: must-revalidate');
    header('Pragma: public');
    header('Content-Length: ' . filesize($file));
    readfile($file);
    exit;
}

	
}
function isSecure($input_string) {
  // Vérifier si la chaîne contient des caractères spéciaux
  $charsp="/[\'^£$%&*()}{@#~?><>,|=_+¬-]/";
  $alertUser='<script>alert("Ces données ne sont pas sécurisées. Une tentative d\'injection de code est possible.");</script>';
// if(preg_match( $charsp, $input_string)){echo $alertUser;return false;}
  // Vérifier si la chaîne contient des balises HTML
  if(preg_match('/<\w+>/', $input_string)){
    echo   $alertUser;
    return false;
  }
    //php

  //php
  if(preg_match('/<\?php\b[^<]*(?:(?!<\?php)<>]*)*\?>/', $input_string)){
    echo   $alertUser;
    return false;
  }
  // Vérifier si la chaîne contient des scripts JavaScript
  if(preg_match('/<script\b[^<]*(?:(?!<\/script>)<[^<]*)*<\/script>/', $input_string)){
    echo   $alertUser;
    return false;
  }
  // Si la chaîne passe toutes les vérifications, elle est considérée comme sûre
  return true;
}

function StruC($str)
{
    $upper = 0; 
    $lower = 0;
    $number = 0;
    $special = 0;
    for ($i = 0; $i < strlen($str); $i++)
    {
        if ($str[$i] >= 'A' && 
            $str[$i] <= 'Z')
            $upper++;
        else if ($str[$i] >= 'a' && 
                 $str[$i] <= 'z')
            $lower++;
        else if ($str[$i]>= '0' && 
                 $str[$i]<= '9')
            $number++;
        else
            $special++;
    }
	return $upper+$number+$special;
   // echo "Upper case letters: " , $upper,"\n" ;
   // echo "Lower case letters : " ,$lower,"\n" ;
    //echo "Number : " , $number ,"\n";
    //echo "Special characters : ", $special ;
}
class Zonetxt
{
			// par tab de 8, après les dix premiers >>
		//type	x	y	value	police	taille	argument id
		//   12 et 3 pour la taille de cell dans le html 24px
		
public $ID;
public $Scale;
public $inScale;
public $Txt;
public $X;
public $Y;
public $L;
public $TYPE;
public $Color;
public $Police;
public $PiKey;
public $GBSI="";

private $Wdoc=2479;
private $Hdoc=3504;
private $a4W=210;
private $a4H=297;
private $Chkboxsize;
private $Chkboxval;

private $docB="";
private $docU="";
private $docI="";
private $docL="";
private $docUL="";
private $htmlinputornot="input";
private $image;

private $realK=1;

function __construct ($inX,$inY,$inscale,$intxt,$inL,$intyp,$incolor,$inPolice,$ingbsi,$inkey)
	{
	$this->iKey=$inkey;
	$this->GBSI=$ingbsi;
	$this->Police=$inPolice;
	$this->Color=$incolor;
	$this->L=$inL;
	$this->Scale=$inscale;	$this->inScale=$inscale;
	
	$this->Txt=$intxt;
	$this->realK=$inscale/10;
	$this->X=$inX;
	$this->Y=$inY;
	$this->ID=(($this->Y*$this->a4W) + $this->X);
	 $this->TYPE=$intyp;
	
	 $this->Scale*=$_SESSION["KPT"];
	 $this->Chkboxsize=$this->Scale*1;//1.8
	 $this->L=strlen($this->Txt);
	  $testD="";
		if(StrE($ingbsi,"B")) { $this->docB="font-weight: 1000;";}
		if(StrE($ingbsi,"U")) {$this->docU="text-decoration-line: underline;"; $testD.=" underline";}
		if(StrE($ingbsi,"I")) {$this->docI="font-style: italic;";}
		if(StrE($ingbsi,"L")) {$this->docL="text-decoration-line: line-through;"; $testD.=" line-through";}
		if ($testD==""){$this->docUL="text-decoration-line: none;";} else { $this->docUL="text-decoration-line: ".$testD.";";}
		if($this->Police=="Courier"){ $this->Police ="courier"; } 
		if($this->Police=="Arial"){ $this->Police ="Arial"; }
		if($this->Police=="Helvetica"){ $this->Police ="helvetica"; } 
		if($this->Police=="Times"){ $this->Police ="times"; }
		if($this->Police=="Symbol"){ $this->Police ="symbol"; }
		if($this->Police=="ZapfDingbats"){ $this->Police ="Zapf Dingbats"; }
	$this->Print();

   

	//$this->Wdoc=2479;$this->Hdoc=3504;
	//$this->a4W=210;$this->a4H=297;
	// js docX=Math.trunc(px*210/Wdoc);
	// js docY=Math.trunc(py*297/Hdoc);
	//	docX=Math.trunc(10*px*210/Ol.docW)/10;
	//docY=Math.trunc(10*py*297/Ol.docH)/10;
	}
	public function pixdocX(){
		
	}
	public function pixdocY(){}
		public function docpixX(){
			//$this->X;$this->Wdoc;$this->a4W;
		return $this->X*$this->Wdoc/$this->a4W;
		}
	public function docpixY(){
		return $this->Y*$this->Hdoc/$this->a4H;
	}
public function Print()
	{
		$imgTxt=""; $hideTxt="";
		$colorinrow=$this->Color;//$colorinrow=Fabconv::hS($this->Color);dechex()
		$tScale=$this->Scale*0.5;$ChkTxt="";$ChkTxtchecked="";
			if ($this->TYPE=="Text"){$this->TYPE="text";}
			if ($this->TYPE=="Date"){$this->TYPE="date";}
			if ($this->TYPE=="Time"){$this->TYPE="time";}
	 $inputStr="";
	 $coefStr=(StruC($this->Txt)*0+4+strlen($this->Txt))*$this->Scale*0.6;
	  $inputStr="width: ". $coefStr."px;";
	if ($this->TYPE=="Check") {
		$this->TYPE="checkbox";$tScale=$this->Scale*0.5;//cause of 1.8 Here .8 and normaly .5 test .5 26 02 2023
		if($this->Txt=="true"){$ChkTxtchecked="checked";}
		$ChkTxt="width: ".$this->Chkboxsize."px;"."height: ".$this->Chkboxsize."px;";
	}
	//datetime-local
		$codeid=((10*$this->Y*$this->a4W) + $this->X*10);
		    //scale de la div, bug?  echo $this->scale/10; le bug avait lieux dans input mais scale n est pas utile car font size et height sont là
  $vidhide="visibility: hidden;";$Vidname="";
  if($this->TYPE=="Img"){
	  $QUOTR="";
		$imgTxt="";
	  $this->image=StrEnTab($this->Txt,$this->inScale);
	  $this->htmlinputornot="div";
	    $imgsansquotelongueur = strlen($this->image[0]);
    $imgsansquote = substr($this->image[0], 1,  $imgsansquotelongueur - 2);
	 $imgracine = substr($this->image[0], 0,  $imgsansquotelongueur - 4);
	 //alertPHP($this->image[0]);;alertPHP($imgracine);
	 
	  if(!file_exists("uploads/".$imgracine.".mp4")  or $imgracine==""){ }else{
		  $Vidname="uploads/".$imgracine.".mp4";$vidhide="";}
	  $hideTxt="visibility: hidden;";
	  $tailleI=intval($this->image[1]*11.8)."px;"."height: ".intval($this->image[2]*11.8)."px;";
	   $tailleIb="width: ".intval($this->image[1]*11.8)."px;";
	  
	  if(!file_exists("uploads/".$this->image[0])  or $this->image[0]==""){}else{
		  $QUOTR='background-image: url('.'uploads/'.$this->image[0].');width: ';
	  	$imgTxt=" background-size: 100% 100%; background-repeat:no-repeat; ".$QUOTR.$tailleI;
	  }
	$this->TYPE="text";
  }

  ?>

<div
id="<?php echo "div_".$codeid; ?>" class="layerElements" name="<?php echo "div_".$codeid; ?>" 

style=" 
 padding: 0;
 margin: 0;
position: absolute; margin: 0 !important;transform-origin: 0% 0%;  
scale:1 <?php ?>;
 <?php echo $imgTxt; ?>
top: <?php echo intval($this->docpixY()); ?>px;
left: <?php echo intval($this->docpixX()); ?>px;">

   <video autoplay muted loop id="myVideo"  style="
   <?php echo $tailleIb; ?>
    padding: 0;
 margin: 0;

  <?php echo $vidhide; ?>
 left:0px;top:0px;
position: absolute; margin: 0 !important;transform-origin: 0% 0%;  
" 
  src="<?php echo $Vidname; ?>" type="video/mp4">
</video>
<input type="<?php echo $this->TYPE; ?>" class="layerElementsb" 
id="<?php echo $codeid; ?>" 
name="<?php echo $codeid; ?>"
onkeypress="sizeAll(event)"
style="
overflow: visible;
<?php echo $inputStr;?>

 font-family: '<?php echo $this->Police;?>';
font-size: <?php echo $this->Scale;?>px;  
color : <?php echo $colorinrow;;?>;
text-align: start;overflow: visible;
transform-origin: 0% 0%;
 padding: 0;
 margin: 0;
height: <?php echo $this->Scale *1.1; ?>px;
 border-style: unset;

background: none;
 background-color:none;
 <?php echo $hideTxt; ?>
 <?php echo $ChkTxt; ?>
<?php echo $this->docB;?>
<?php echo $this->docI; ?>
<?php echo $this->docUL; ?>
text-decoration-thickness: 3px; 
"
id="infot" name="s" Value='<?php echo $this->Txt; ?>' size="<?php echo ($this->L*2); ?>" autocomplete="off"
<?php echo $ChkTxtchecked; ?>
 
></input>
<span class= "Cinputkey"  ><image class="Cinputkeyi" src="clef.png"
 style="
 position: absolute; margin: 0 !important;  
transform-origin: 0% 0%;
top: <?php echo $tScale*-1?>px;
left: <?php echo $tScale*0?>px;
 widtht: <?php echo $tScale;?>px;
 height: <?php echo $tScale;?>px;" 
></image>
<input  class= "Cinputkeyv" type="text" id="Btk<?php echo $codeid; ?>" name="Btk<?php echo $codeid; ?>"  
  Value="<?php echo $this->iKey; ?>"
	 style="
 position: absolute; margin: 0 !important;  
transform-origin: 0% 0%;
top: <?php echo $tScale*-2?>px;
left: <?php echo $tScale*0?>px;
 font-size: <?php echo $this->Scale*2;?>px; 
 height: <?php echo $tScale*4;?>px;" 
  ></span>
<input class= "CeditF"  type="color" id="Btc<?php echo $codeid; ?>" name="Btc<?php echo $codeid; ?>"  
value="<?php echo $colorinrow;?>" 
	 style="
 position: absolute; margin: 0 !important;  
transform-origin: 0% 0%;
bottom: 0px;
left: <?php echo - $tScale*2?>px;
 
width: <?php echo $tScale;?>px; height: <?php echo $tScale;?>px;" 
  ></input>
  <input class= "CeditF"  type="color" id="Btc<?php echo $codeid; ?>" name="Btc<?php echo $codeid; ?>"  
value="<?php echo $colorinrow;?>" 
	 style="
 position: absolute; margin: 0 !important;  
transform-origin: 0% 0%;
bottom: 0px;
right: <?php echo - $tScale*2?>px;
 
width: <?php echo $tScale;?>px; height: <?php echo $tScale;?>px;" 
  ></input>
<button class= "CeditF" type="submit" id="Btd<?php echo "".$codeid; ?>" name="Btd<?php echo "".$codeid; ?>"  

	 style="
 position: absolute; margin: 0 !important;  
transform-origin: 0% 0%;
top: 2px;
right: <?php echo - $tScale?>px;
 
background-image: url(dep.png);
background-size: 100% 100%;
background-repeat:no-repeat;
width: <?php echo $tScale?>px; height: <?php echo $tScale;?>px;
			  " 
  ></button>
<button class= "CeditF"  type="submit" id="Bts<?php echo $codeid; ?>" name="Bts<?php echo $codeid; ?>"  

	 style="
 position: absolute; margin: 0 !important;  
transform-origin: 0% 0%;
bottom: 2px;
right: <?php echo - $tScale?>px;
 
background-image: url(supp.png);
background-size: 100% 100%;
background-repeat:no-repeat;
width: <?php echo $tScale;?>px; height: <?php echo $tScale;?>px;" 
  ></button>
<button class= "CeditF" type="submit" id="Btd<?php echo "".$codeid; ?>" name="Btd<?php echo "".$codeid; ?>"  

	 style="
 position: absolute; margin: 0 !important;  
transform-origin: 0% 0%;
top: 2px;
left: <?php echo - $tScale?>px;
 
background-image: url(dep.png);
background-size: 100% 100%;
background-repeat:no-repeat;
width: <?php echo $tScale?>px; height: <?php echo $tScale;?>px;
			  " 
  ></button>
<button class= "CeditF"  type="submit" id="Bts<?php echo $codeid; ?>" name="Bts<?php echo $codeid; ?>"  

	 style="
 position: absolute; margin: 0 !important;  
transform-origin: 0% 0%;
bottom: 2px;
left: <?php echo - $tScale?>px;
 
background-image: url(supp.png);
background-size: 100% 100%;
background-repeat:no-repeat;
width: <?php echo $tScale;?>px; height: <?php echo $tScale;?>px;" 
  ></button>
  
<hr size="3" style="  <?php echo $hideTxt; ?>
position: relative; margin: 0 !important;  
 overflow: visible;
width; 190%;
background-color:green;
left: 0%;
color: blue;" 
>
</div>

<?php
	}
} 

class Ftool {
    public static function create_D($dir, $permissions = 0777) {
        if (!is_dir($dir)) {
            mkdir($dir, $permissions);
            return true;
        }
        return false;
    }

    public static function create_F($file, $content = '') {
        if (!file_exists($file)) {
            file_put_contents($file, $content);
            return true;
        }
        return false;
    }

    public static function D_exists($dir) {
        return is_dir($dir);
    }

    public static function F_exists($file) {
        return file_exists($file) && pathinfo($file, PATHINFO_EXTENSION) === 'txt';
    }
    
    public static function read_F($file) {
        if (self::F_exists($file)) {
            return file_get_contents($file);
        }
        return false;
    }

    public static function rename_D($old_name, $new_name) {
        if (is_dir($old_name)) {
            rename($old_name, $new_name);
            return true;
        }
        return false;
    }

    public static function rename_F($old_name, $new_name) {
        if (file_exists($old_name) && pathinfo($old_name, PATHINFO_EXTENSION) === 'txt') {
            rename($old_name, $new_name);
            return true;
        }
        return false;
    }

    public static function del_D($dir) {
        if (is_dir($dir)) {
            rmdir($dir);
            return true;
        }
        return false;
    }

    public static function del_F($file) {
        if (file_exists($file) && pathinfo($file, PATHINFO_EXTENSION) === 'txt') {
            unlink($file);
            return true;
        }
        return false;
    }

    public static function move_D($src, $dst) {
        if (is_dir($src)) {
            rename($src, $dst);
            return true;
        }
        return false;
    }

    public static function move_F($src, $dst) {
        if (file_exists($src) && pathinfo($src, PATHINFO_EXTENSION) === 'txt') {
            rename($src, $dst);
            return true;
        }
        return false;
    }
}

// Utilisation de la classe
//Ftool::create_D("new_directory");
//Ftool::create_F("new_file.txt", "Contenu du fichier");
//$dir_exist = Ftool::D_exists("existing_directory");
//$file_exist = Ftool::F_exists("existing_file.txt");
//$file_content = Ftool::read

// end class Zonetxt
// compte à rebours pour usage intéruption utilisateur!
function ctrebours($inrebours){
  echo "<p> ".$inrebours." sera réalisé dans</br> ".($_SESSION["rebours"])." secondes ! </p>";
}
function affglob(){
  echo "<l>Aff glob:</br>Session Titles : ".'<pre>';
  print_r($_SESSION["matrice"][0]);
  echo '</pre>'.'<pre>';
  echo "<l>Post :".'<pre>';
  print_r($_POST);
  echo '</pre>'."</l></br>";
  echo "<l>Get :".'<pre>';
  print_r($_GET);
  echo '</pre>'."</l></br>";
  echo "<l>Files :".'<pre>';
  print_r($_FILES);
  echo '</pre>'."</l></br>";
  echo "<l>Session All:".'<pre>';
  print_r($_SESSION);
  echo '</pre>'."</l></br>";
  echo "<l>Cookies :".'<pre>';
  print_r($_COOKIE);
  echo '</pre>'."</l></br>";
  echo "<l>Request :".'<pre>';
  print_r($_REQUEST);
  echo '</pre>'."</l></br>";
  echo "<l>Serveur :".'<pre>';
  print_r($_SERVER);
  echo '</pre>'."</l></br>";
  echo "<l>Envir :".'<pre>';
  print_r($_ENV);
  echo '</pre>'."</l></br>";
}


// $GLOBALS bug implode
// $_SERVER array
// $_GET array
// $_POST array
// $_FILES
// $_COOKIE
// $_SESSION array
// $_REQUEST array
// $_ENV

?>
