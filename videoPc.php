

<!DOCTYPE html>
<html>
<head>
  <meta charset="UTF-8">
  <title>Exemple de code HTML et JS</title>
</head>
<body>
  <h1>Exemple de code HTML et JS</h1>
  <p>Sélectionnez des fichiers vidéo et image à afficher.</p>
  <p>Si un fichier image en .png a le même nom qu'un fichier vidéo, il sera affiché dans le même span.</p>
  <form>
    <label for="videoInput">Sélectionnez des fichiers vidéo:</label>
    <input type="file" id="videoInput" accept="video/*" multiple><br>
    <label for="imageInput">Sélectionnez des fichiers image:</label>
    <input type="file" id="imageInput" accept="image/*" multiple><br>
  </form>

  <!-- Conteneur pour les spans -->
  <div id="spanContainer"></div>

  <!-- Script JavaScript -->
  <script>
  // Sélectionner les éléments du DOM
let videoInput = document.getElementById("videoInput");
let imageInput = document.getElementById("imageInput");
let spanContainer = document.getElementById("spanContainer");

// Créer une fonction pour afficher les fichiers vidéo et image
function displayFiles() {
  // Vider le conteneur des spans
  spanContainer.innerHTML = "";

  // Récupérer les fichiers vidéo et image
  let videoFiles = videoInput.files;
  let imageFiles = imageInput.files;

  // Créer un objet pour stocker les noms des fichiers vidéo sans extension
  let videoNames = {};

  // Parcourir les fichiers vidéo
  for (let i = 0; i < videoFiles.length; i++) {
    // Récupérer le nom du fichier vidéo sans extension
    let videoName = videoFiles[i].name.split(".")[0];

    // Stocker le nom du fichier vidéo dans l'objet avec la valeur true
    videoNames[videoName] = true;

    // Créer un élément span pour afficher le fichier vidéo
    let videoSpan = document.createElement("span");

    // Créer un élément video pour afficher la prévisualisation du fichier vidéo
    let videoElement = document.createElement("video");
    videoElement.src = URL.createObjectURL(videoFiles[i]);
    videoElement.width = 320;
    videoElement.height = 240;
    videoElement.controls = true;

    // Ajouter l'élément video au span
    videoSpan.appendChild(videoElement);

    // Créer un élément p pour afficher le nom du fichier vidéo
    let videoNameElement = document.createElement("p");
    videoNameElement.textContent = "Nom du fichier vidéo: " + videoFiles[i].name;

    // Ajouter l'élément p au span
    videoSpan.appendChild(videoNameElement);

    // Ajouter le span au conteneur des spans
    spanContainer.appendChild(videoSpan);
  }

  // Parcourir les fichiers image
  for (let i = 0; i < imageFiles.length; i++) {
     // Récupérer le nom du fichier image sans extension
     let imageName = imageFiles[i].name.split(".")[0];

     // Vérifier si le nom du fichier image correspond à celui d'un fichier vidéo 
     if (videoNames[imageName]) {
       // Récupérer le span correspondant au fichier vidéo 
       let matchingVideoSpan = spanContainer.querySelector(`video[src*="${imageName}"]`).parentNode;

       // Créer un élément img pour afficher la prévisualisation du fichier image 
       let imageElement = document.createElement("img");
       imageElement.src= URL.createObjectURL(imageFiles[i]);
       imageElement.width=320;
       imageElement.height=240;

       // Ajouter l'élément img au span 
       matchingVideoSpan.appendChild(imageElement);

       // Créer un élément p pour afficher le nom du fichier image 
       let imageNameElement=document.createElement("p");
       imageNameElement.textContent="Nom du fichier image: "+imageFiles[i].name;

       // Ajouter l'élément p au span 
       matchingVideoSpan.appendChild(imageNameElement);
     }
   }
}

// Ajouter un écouteur d'événement sur les inputs pour appeler la fonction displayFiles quand ils changent 
videoInput.addEventListener("change", displayFiles);
imageInput.addEventListener("change", displayFiles);
  
  </script>

</body>
</html>