<?php
//iracineName
$nameV="";
$Rep="";
if (isset($_POST['racineName'])) {$nameV=$_POST['racineName'];}
if (isset($_POST['Rep'])) {$Rep=$_POST['Rep'];}
if (isset($_POST['image'])) {
  // Récupération de l'image encodée en base64 depuis la variable POST
  $dataURI = $_POST['image'];

  // Conversion de l'image en base64 en une image PNG
  $img = imagecreatefromstring(base64_decode(str_replace('data:image/png;base64,', '', $dataURI)));

  // Nom de fichier pour l'image enregistrée
  $filename = $Rep.$nameV.'.png';
  if(file_exists($filename)){
		  $i = 0;$nzero=$nameV;
		while (file_exists($filename)) {
			$nameV=$nzero.$i;
		 $filename = $Rep.$nameV.'.png';
		  $i++;
		}
  }
  // Enregistrement de l'image sur le serveur
  if (imagepng($img, $filename)) {
	  if(file_exists($filename)){$response = array('message' => 'ok', 'miniature:'=> $nameV);
	  echo json_encode($response);
	  }
		  //echo '<script>'.'alert("'.$nameV'");</script>'}
    //echo 'Miniature enregistrée avec succès Fab!';
  } else {
    $response = http_build_query(array('status' => 'OK', 'miniature:'=> $nameV));
echo $response;
echo 'Erreur lors de l\'enregistrement de la miniature.';
  }
} else {
$response = http_build_query(array('status' => 'KO'));
echo $response;
  //echo 'Aucune image n\'a été envoyée.';
}
//$data = array(...); // Ajoutez vos données à envoyer en réponse
//$response = http_build_query($data);
//echo $response;
?>
