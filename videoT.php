<!DOCTYPE html>
<html>

  
  <head>

    <meta charset="UTF-8">
    <title>Explorateur de répertoire</title>
    <style>
	
	body {
  transform-origin: 0% 0%;
 
  background-color: #000;
  border-radius: 12px;
  }
  .mainB{
  top:0px;
  left:0px;
    transform-origin: 0% 0%;
	self-align:left;
  }
input {
  transform-origin: 0% 50%;
  align-items: center;
  background-color: #fff;
  border-radius: 12px;
  box-shadow: transparent 0 0 0 3px,rgba(18, 18, 18, .1) 0 6px 20px;
  box-sizing: border-box;
  color: #121212;
  cursor: pointer;
  display: inline-flex;
  flex: 1 1 auto;
  font-family: Inter,sans-serif;
  font-size: 3.2rem;
  font-weight: 1500;
  justify-content: center;
  line-height: 1;
  margin: 0;
  outline: none;
  padding: 1rem 1.2rem;
  text-align: center;
  text-decoration: none;
  transition: box-shadow .2s,-webkit-box-shadow .2s;
  white-space: nowrap;
  border: 0;
  user-select: none;
  -webkit-user-select: none;
  touch-action: manipulation;
 
}

input:hover {
  scale:1.1;
  box-shadow: #121212 0 0 0 3px, transparent 0 0 0 0;
}



button {
  transform-origin: 0% 50%;
  align-items: center;
  background-color: #fff;
  border-radius: 12px;
  box-shadow: transparent 0 0 0 3px,rgba(18, 18, 18, .1) 0 6px 20px;
  box-sizing: border-box;
  color: #121212;
  cursor: pointer;
  display: inline-flex;
  flex: 1 1 auto;
  font-family: Inter,sans-serif;
  font-size: 3.2rem;
  font-weight: 1500;
  justify-content: center;
  line-height: 1;
  margin: 0;
  outline: none;
  padding: 1rem 1.2rem;
  text-align: center;
  text-decoration: none;
  transition: box-shadow .2s,-webkit-box-shadow .2s;
  white-space: nowrap;
  border: 0;
  user-select: none;
  -webkit-user-select: none;
  touch-action: manipulation;
 
}

button:hover {
  scale:1.1;
  box-shadow: #121212 0 0 0 3px, transparent 0 0 0 0;
}

      #thumbnails {
        display: flex;
        flex-wrap: wrap;
        justify-content: center;
      }
      #footer {
	  z-index: 9999999999;
        position: fixed;
        bottom: 0;
		left:-1px;
        width: 100%;
        background-color: white;
        text-align: center;
      }
	  .info-miniature{
	  position: relative;
	  }
      .file-info {
        top:-220px;
		right:0px;
        position: absolute;
        background-color: orange;
        border: 1px solid black;
        padding: 5px;
        display: none;
		
      }
      video {
        cursor: pointer;
        margin: 5px;
      
      }
      video:hover {
        scale:1.1;

       }
      canvas {
        cursor: pointer;
        margin: 5px;
        border: 1px solid black;
      }
      canvas:hover {
        scale:1.1;

       }
      canvas:hover + .file-info {
        display: block;
      }
	     img:hover {
        scale:1.1;

       }
      img:hover + .file-info {
        display: block;
      }
      video:hover + .file-info {

        display: block;
      }
	  
	  
	  	   span.canvas {
      display: inline-block;
      border: 2px double #FF8C00;
      border-radius: 10px;
      padding: 5px;
	  background-color: #f2f2f2;
	    box-shadow: 2px 2px 5px #888888;
    }
		.cang {    
 border: 2px double green;
      border-radius: 10px;
      padding: 5px;
	  background-color: #f2f2f2;
	  margin:3px;
	background-color: grey; 
	display: inline-block;
	text-align:center;
  	
	}
			.cano {    
			margin:3px;
 border: 2px double #FF8C00;
      border-radius: 10px;
      padding: 5px;
	  background-color: #f2f2f2;
	  
	background-color: grey; 
	display: inline-block;
	text-align:center;
  	
	}
	.hideVs {    
 border: 2px double #FF8C00;
      border-radius: 10px;
      padding: 5px;
	  background-color: #f2f2f2;
	  
	background-color: grey; 
	width: 730px;
	text-align:center;
    height:30px;	
	}
	.hideV {    position: relative;
	 visibility: hidden;
	}
	.hideVs:hover .hideV { 
	
		   display: inline-block;
	
	 visibility: visible;
	}
	.hideV:hover  { 
		top:30px;
		left:0px;
		display: inline-block;
		
		 visibility: visible;
	}
		.hideVs:hover{ 
  
    height:590px;	

	}
    </style>

  </head>
  <body>
  <div class="mainB" id="bodymain" width="100%">
  <input type="file" accept="video/*" id="input-video" onchange="loadVideo(this)"></br>
    </br>
<input type="range"  style='width:740px;' min="0.1" max="2" step="0.01" value="1"  onchange="VVideo(this)" onmouseover="VVideo(this)"></input>


</br>
<div class="hideVs">
_____________________________________ Vidéo! _____________________________________</br>
<video id="ma-video" class="hideV" width="640" height="480" loop muted controls poster="">
<source src="lapin.mp4" type="video/mp4">
</video></div>
</br>
<canvas class="cang" id="canvas" width="320" height="240"></canvas></br></br></br>
<button id="enregistrer">Enregistrer l'image</button></br></br></br>
<button id="enregistrer2">Envoyer l'image au serveur</button></br></br>
    </br>
    <input type="file" id="fileInput" accept="video/*,image/*" multiple></br></br></br>
    <div id="thumbnails"></div>
	
    
	
<script>




 /////////////////////////////////////////////////////////////////////////////////////
  //  video.currentTime = parseFloat(Math.floor(middle));video.playbackRate = 0.5;
  document.getElementById('enregistrer2').addEventListener('click', () => {
  
  const dataURI = canvas.toDataURL('image/png');
  const xhr = new XMLHttpRequest();
  xhr.onreadystatechange = function() {
    if (xhr.readyState === XMLHttpRequest.DONE) {
      if (xhr.status === 200) {
        console.log('Miniature envoyée avec succès !');
      } else {
        console.error('Erreur lors de l\'envoi de la miniature.');
      }
    }
  };//alert(racineName);
  ////////////////////////////////////////////////////////////////////////////////////////////
  xhr.open('POST', 'upload.php', true);
  xhr.setRequestHeader('Content-Type', 'application/x-www-form-urlencoded');
  //xhr.send('image=' + encodeURIComponent(dataURI));
  //test ok alert(racineName);
  // retour text test :
xhr.onreadystatechange = function() {
  if (xhr.readyState === XMLHttpRequest.DONE) {
    const response = xhr.responseText;
    const decodedResponse = decodeURIComponent(response); // Décoder la réponse encodée en URL
    console.log(decodedResponse); // Afficher la réponse décoder dans la console
  }
};
  xhr.send('image=' + encodeURIComponent(dataURI) + '&racineName=' + encodeURIComponent(racineName)+ '&Rep=' + encodeURIComponent("uploads/"));

});


//script
//script


  
  // pour simplifier le scroling ici class >>>>>
///////////////////////////////////////////////////////////////////////////////////////
/////////////////////////////////////////////////////////////////////////////////////////
var scale2=1;
var largeur = window.screen.width; // obtenir la largeur en points CSS
if (largeur < 768) { scale2=2;// définir un seuil pour les petits écrans
  // ou pas ^^ window.location.href =  // rediriger vers la version mobile du site
}
var bodymain=document.getElementById('bodymain');
window.addEventListener('resize', function() {
 //alert("The window has been resized."); 
 vkD();
});
vkD();
function vkD(){
	var kDoc=document.documentElement.clientWidth/1300;
	bodymain.style.scale=kDoc*scale2;
	//alert(document.documentElement.clientWidth);
}
//document.documentElement.clientWidth;style.scale=kDoc;
var switchvp=1;
    let racineName="lapin";
    var video = document.getElementById('ma-video');
    const canvas = document.getElementById('canvas');
    const context = canvas.getContext('2d');
    var inputV = document.getElementById('input-video');
    FinputV();
  canvas.addEventListener('mouseover', () => {
      //context.drawImage(video, 0, 0, canvas.width, canvas.height);
     // dessine la miniature 1 fois par pauses 
    });
    video.addEventListener('pause', () => {
      context.drawImage(video, 0, 0, canvas.width, canvas.height);
     // dessine la miniature 1 fois par pauses 
    });
    document.getElementById('canvas').addEventListener('click', () => {
      const clkvid = document.getElementById('ma-video');
	  switchvp*=-1;
      if (switchvp>0){clkvid.play();}else{clkvid.pause();}
	  
    });
	 document.getElementById('enregistrer').addEventListener('click', () => {
      const dataURI = canvas.toDataURL('image/png');
      const link = document.createElement('a');
      link.href = dataURI;
      link.download = racineName+'.png';
      document.body.appendChild(link);
      link.click();
	  
    });
    video.addEventListener('loadeddata', () => {
      canvas.width = video.videoWidth;
      canvas.height = video.videoHeight;
      var middle = video.duration / 3;
    //video.currentTime=2;webkitdirectory directory pour input repertoir
    video.currentTime = parseFloat(Math.floor(middle));
    //video.play();
    //video.click;loadeddata
    //video.pause();
  // Lancer la lecture de la vidéo
  video.play();

  // Mettre la vidéo en pause après une seconde
 setTimeout(() => {
    video.pause();
  }, 2500);
});
function nbP(inVvalue){
  numbPerP = inVvalue.value; Pselected=1;
   AfficherPages(Pselected,numbPerP);
}
const thumbnailsDiv = document.getElementById('thumbnails');

document.addEventListener('DOMContentLoaded', () => {
  
  
  const viderButton = document.getElementById('vider');
  //const thumbnailsDiv = document.getElementById('thumbnails');
  document.getElementById('Pplus').addEventListener('click', () => {
   pageplus();
       
   AfficherPages(Pselected,numbPerP);
  });
  document.getElementById('Pmoins').addEventListener('click', () => {
    Pselected-=1;  
    if (Pselected<1){Pselected=1;}
    AfficherPages(Pselected,numbPerP);
  });
  document.getElementById('Vider!').addEventListener('click', () => {
    // Supprime tous les enfants de l'élément 'thumbnailsDiv'
    while (thumbnailsDiv.firstChild) {
      thumbnailsDiv.removeChild(thumbnailsDiv.firstChild);
    }
  });
});


  video.addEventListener('play',
function() {
    var $this = this; //cache
    (function loop() {
      if (!$this.paused && !$this.ended) {
        context.drawImage($this, 0, 0);
        setTimeout(loop, 1000 / 30); // drawing at 30fps
      }
    })();
  }, 0);
 
  //  video.currentTime = parseFloat(Math.floor(middle));video.playbackRate = 0.5;
//enregistrer2 supprimé et lapin.mp4 sera sample.mp4
function VVideo(inVvalue){
  video.playbackRate = inVvalue.value; 
}
function selectVideo() {
        document.getElementById("input-video").click();
      }

      function loadVideo(input) {
        FinputV()
        const file = input.files[0];
        if (file) {
         
          video.src = URL.createObjectURL(file);
          video.type = file.type;
        } else {
          alert("Veuillez sélectionner un fichier vidéo.");
        }
      }
      function loadVideob(input) {
        FinputV()
        const file = input;
        if (file) {
         
          video.src = URL.createObjectURL(file);//alert(URL.createObjectURL(file));
          video.type = file.type;
        } else {
          alert("Veuillez sélectionner un fichier vidéo.");
        }
      }
	    function loadVideoc(input) {
        FinputV()
		video.src=input.src;
        //alert(input.src);
  
      }
      function FinputV(){    iracineName = inputV.value.substring(0, inputV.value.length - 4);
      
        let indexDernierSlash = iracineName.lastIndexOf('\\');
  iracineName = iracineName.substring(indexDernierSlash + 1);
   //alert(iracineName);
      }
//script
//script
function trierMultifiles( infiles) {
  
  const files = infiles;
  const fileArray = [];
  
  for (let i = 0; i < files.length; i++) {
    fileArray.push(files[i]);
    //alert(files[i].name);
  }
  
  fileArray.sort((a, b) => a.name.localeCompare(b.name));
  
 return fileArray;
}
 video.addEventListener("pause", (event) => { switchvp=-1;});
  
  const fileCountSpan = document.getElementById('fileCount');
	let nameLet;
	var nameletRoot;
	const fileInput = document.getElementById('fileInput');//pour listener on change
  let files;//public pour page à page!
  let files2;
  var numbPerP=10;// nombres de vidéos par pages!
  var nPages;// file lengh div by numbPerP
  var Pselected=1;// la page selectionnée
  // fonction pour appel page à pages! 
  // VIdébut=(pselected-1) * nbdeVppages VIfin= (pselected) * nbdeVppages 
  // spanePages sera redef aussi thumbnailsnpPages
  //
  function pageplus(){
    if (Pselected<nPages){Pselected+=1;}
  }
  // Définir la fonction de rappel pour l'événement de clic sur les boutons
    function handleClick(pageNumberb) {
      Pselected=pageNumberb;
      AfficherPages(Pselected, numbPerP);
    }

  function AfficherPages(pselected, nbdeVppages){
   
    thumbnailsDiv.innerHTML="";
  
    nPages=files.length/nbdeVppages;

      var VIdebut=(pselected-1) * nbdeVppages; 
    var VIfin= (pselected) * nbdeVppages; 
    // Vide le contenu de la span thumbnailsnpPages
    const thumbnailsnpPages = document.getElementById('spanePages');
      thumbnailsnpPages.innerHTML="";

      for (let i = 0; i < nPages; i++) {
        const button = document.createElement('button');
        button.innerText = i + 1; // Pour afficher les boutons numérotés de 1 à n plutôt que de 0 à n-1
        button.id = `btnP${i + 1}`; // Attribuer un ID à chaque bouton avec le format 'btnP' suivi du numéro
        // Ajouter l'événement de clic en utilisant la fonction de rappel handleClick
        button.addEventListener('click', () => handleClick(i+1));
  
        thumbnailsnpPages.appendChild(button);
      }
      const strpselected="btnP"+pselected;
      const btn1 = document.getElementById(strpselected);
      btn1.style.backgroundColor = 'green';
     btn1.style.color = 'white';
     // for (let i = 0; i < nPages; i++) { }//thumbnailsnpPages
 
  if ((VIfin)>files.length){VIfin=files.length;}
  //si la fin est au dessus du debut alors:
  if (VIdebut<VIfin){
            files2.forEach(obj => {
                  const nameAndExt = obj.name.split(".");
                  obj.name = nameAndExt[0]; // le nom sans extension
                  obj.ext = nameAndExt[1]; // l'extension
                    });
              for (let i = VIdebut; i < VIfin; i++) {
                    const file = files[i];
                    
                    nameLet = files[i].name.split(".");//alert(nameLet[0]);
                    nameletN=files[i].name//nameLet[0];
                      nameletRoot=nameLet[0];
                    const spanWithThumbnailid = document.createElement('span');
                    spanWithThumbnailid.id=nameletN;
                    if (file.type === 'video/mp4') {spanWithThumbnailid.className="cano";}
                    if (file.type.startsWith('image/')){spanWithThumbnailid.className="cang";}
                    thumbnailsDiv.appendChild(spanWithThumbnailid);
                    //faire apparaitre les support dans le bon ordre
              }
            //
            for (let i = VIdebut; i < VIfin; i++) {
              const file = files[i];
              nameLet = files[i].name.split(".");//alert(nameLet[0]);
            nameletN=files[i].name//nameLet[0];
            const spansID = document.getElementById(nameletN);
              if (file.type === 'video/mp4') {//alert(nameletN);
                const video = document.createElement('video');
                //video.id=files[i].name;
                video.src = URL.createObjectURL(file);
                //video.width = 200;
                video.height = 200;
                video.muted = true;
              //video.preload = "none";
                const spanWithThumbnail = document.createElement('span');
            const fileSizeMB = Math.round(file.size / (1024 * 1024)); // Calcul de la taille en mégaoctets arrondie
            const fileInfoTextB = document.createTextNode(`${file.name.split('.').slice(0, -1).join('.')}.${file.name.split('.').pop()} - ${fileSizeMB} Mo`);


                spanWithThumbnail.classList.add('info-miniature');
                spanWithThumbnail.appendChild(video);
                const fileInfoSpan = document.createElement('span');
                //const fileInfoText = document.createTextNode(`${file.webkitRelativePath.split('/').slice(-2,-1)[0]}/${file.name.split('.').slice(0, -1).join('.')}.${file.name.split('.').pop()}`);
                fileInfoSpan.classList.add('file-info');
                fileInfoSpan.appendChild(fileInfoTextB);
                spanWithThumbnail.appendChild(fileInfoSpan);
            spansID.appendChild(spanWithThumbnail);
            
                spanWithThumbnail.addEventListener('click', () => {
            let outNamefile=spansID.id.split(".");
            racineName=outNamefile[0];// var ok alert(racineName);
                          
                      loadVideob(file);
                    });
                // Lecture de la vidéo au survol de la miniature
                spanWithThumbnail.addEventListener('mouseenter', () => {
                  video.currentTime = 0;
                  video.play();
                });

                // Arrêt de la vidéo lorsque la souris quitte la miniature
                spanWithThumbnail.addEventListener('mouseleave', () => {
                  video.pause();
                });
              //l'image associée
              //let nameLet = files[i].name.split(".");//alert(nameLet[0]);
                //nameAndExt[0]; // le nom sans extension
                //  nameAndExt[1]; // l'extension
              const filteredArray = files.filter(obj => obj.name.startsWith(nameletN+".png"));

                  
              }
              if (file.type.startsWith('image/')){
                const reader = new FileReader();
                reader.readAsDataURL(file);
                reader.onload = () => {
                  const img = new Image();
                  img.src = reader.result;
                  const canvas = document.createElement('canvas');
                
                  const ctx = canvas.getContext('2d');
                  img.onload = () => {
                canvas.width = 200*(img.width/img.height);
                  canvas.height = 200;
                    ctx.drawImage(img, 0, 0, canvas.width, canvas.height);
                    canvas.addEventListener('click', () => {
                      const confirmUpload = confirm(`Voulez-vous envoyer le fichier ${file.webkitRelativePath.split('/').slice(0, -1).join('/')}/${file.name.split('.').slice(0, -1).join('.')}.${file.name.split('.').pop()} ?`);
                      if (confirmUpload) {
                        canvas.style.cursor = 'wait';
                        const formData = new FormData();
                        formData.append('file', file);
                        const xhr = new XMLHttpRequest();
                        xhr.open('POST', 'upload.php');
                        xhr.onload = () => {
                          canvas.style.cursor = 'pointer';
                          if (xhr.status === 200) {
                            alert('Fichier envoyé avec succès');
                          } else {
                            alert(`Erreur lors de l'envoi du fichier : ${xhr.status}`);
                          }
                        };
                        xhr.send(formData);
                      }
                    });
                    const fileInfoSpan = document.createElement('span');
                    const fileInfoText = document.createTextNode(`${file.name.split('.').slice(0, -1).join('.')}.${file.name.split('.').pop()}`);
                    fileInfoSpan.classList.add('file-info');
                    fileInfoSpan.appendChild(fileInfoText);
                    const spanWithThumbnail = document.createElement('span');
                    spanWithThumbnail.classList.add('info-miniature');
                    spanWithThumbnail.appendChild(canvas);
                    spanWithThumbnail.appendChild(fileInfoSpan);
                    spansID.appendChild(spanWithThumbnail);
              
                  };
                };
              }

            }
          }
} // fin de fonction afficher pages!
  fileInput.addEventListener('change', (event) => {
  thumbnailsDiv.innerHTML="";
  files = trierMultifiles(event.target.files);files2=files;
  AfficherPages(Pselected,numbPerP);
   

  });
</script>

<div><button id="Pmoins"><</button><span id="spanePages"><button>_______</button></span> <button id="Pplus">></button></br></br>
<button id="Vider!">Vider!</button></br></br>	
<input type="range"  style='width:740px;' min="10" max="100" step="10" value="10"  onchange="nbP(this)"></input>

<div><button>Sur le serveur:</button> </br></br>
		<?php
	$dir="uploads/";
	$files = scandir($dir);
$file_list = array();

foreach ($files as $file) {
  if (!is_dir($file)) {
    $extension = strtolower(pathinfo($file, PATHINFO_EXTENSION));
    if ($extension == 'png' || $extension == 'mp4') {
      $file_list[] = $file;
    }
  }
}



//$file_list_json = json_encode($file_list);
	
// Get the root folder of the server
$root = $_SERVER["DOCUMENT_ROOT"];

// Concatenate the name of the folder you want
$folder = "uploads";

// Check if the folder exists
if (is_dir($folder)) {
  // Get the list of files in the folder
  $files = glob($folder . "/*");

  // Loop through each file and do something with it
  foreach ($files as $file) {
    // For example, display the file name and size  w* coef(w/h)
	if (strpos($file, '.png')) {
	echo '	<span	class="cang" height="344px" ><span class="info-miniature"><img src="'.$file.'" width="'.strval(200*(w_png($file)/h_png($file))).'" height="200"></canvas><span class="file-info">'.$file.'</span></span></span>
    ';//echo basename($file) . " - " . filesize($file) . " bytes<br>";
	}
	if (strpos($file, '.mp4')) {
	echo '
	<span class="cano" ><span class="info-miniature"><video muted=""  onmousedown="loadVideoc(this);" onmouseleave="this.pause();" onmouseenter="this.currentTime = 0;this.play();" src="'.$file.'" height="200"></video><span class="file-info">'.$file.' '.intval(filesize($file)/(1024*1024)*10)/10 . ' Mo</span></span></span>
	';
	
      //    video.pause();
    //echo basename($file) . " - " . filesize($file) . " bytes<br>"; 'mouseenter', () => {
          //video.currentTime = 0;
          //video.play();
	}
  }
} else {
  // Display an error message if the folder does not exist
  echo "Le dossier n'existe pas.";
}	
	sort($file_list); // Trie le tableau par ordre alphabétique
function is_png($file) {
  $info = getimagesize($file);
  $type = $info[2];
  return ($type == IMAGETYPE_PNG);
}
function w_png($file) {
  $info = getimagesize($file);
   return $info[0];

}
function h_png($file) {
  $info = getimagesize($file);
  return $info[1];
}
?>


</div>
	</br></br></br></br>
	</div>
	<div id="footer"><span id="fileCount"></span> Fichiers MP4 à utiliser pour créer des miniatures PNG de qualité!</div>
    </br></br></br>
  </body>
</html>
