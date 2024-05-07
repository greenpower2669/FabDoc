<!DOCTYPE html>
<html>
  <head>
    <meta charset="UTF-8">
    <title>Explorateur de répertoire</title>
    <style>
      canvas {
        cursor: pointer;
        margin: 5px;
        border: 1px solid black;
      }
      #thumbnails {
        display: flex;
        flex-wrap: wrap;
        justify-content: center;
      }
      #footer {
        position: fixed;
        bottom: 0;
        width: 100%;
        background-color: white;
        text-align: center;
      }
      .file-info {
        position: absolute;
        background-color: white;
        border: 1px solid black;
        padding: 5px;
        display: none;
      }
      canvas:hover + .file-info {
        display: block;
      }
    </style>
  </head>
  <body>
    <input type="file" id="fileInput" webkitdirectory directory multiple>
    <div id="thumbnails"></div>
    <div id="footer"><span id="fileCount"></span> fichiers</div>

    <script>
  const fileInput = document.getElementById('fileInput');
  const thumbnailsDiv = document.getElementById('thumbnails');
  const fileCountSpan = document.getElementById('fileCount');

  fileInput.addEventListener('change', (event) => {
    const files = event.target.files;
    for (let i = 0; i < files.length; i++) {
      const file = files[i];
      if (file.type.startsWith('image/')) {
        const reader = new FileReader();
        reader.readAsDataURL(file);
        reader.onload = () => {
          const img = new Image();
          img.src = reader.result;
          const canvas = document.createElement('canvas');
          canvas.width = 200;
          canvas.height = 200;
          const ctx = canvas.getContext('2d');
          img.onload = () => {
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
            const fileInfoText = document.createTextNode(`${file.webkitRelativePath.split('/').slice(-2,-1)[0]}/${file.name.split('.').slice(0, -1).join('.')}.${file.name.split('.').pop()}`);
            fileInfoSpan.classList.add('file-info');
            fileInfoSpan.appendChild(fileInfoText);
            const spanWithThumbnail = document.createElement('span');
            spanWithThumbnail.classList.add('info-miniature');
            spanWithThumbnail.appendChild(canvas);
            spanWithThumbnail.appendChild(fileInfoSpan);
            thumbnailsDiv.appendChild(spanWithThumbnail);
          };
        };
      }
    }
    fileCountSpan.textContent = `${files.length} fichiers`;
  });
</script>

  </body>
</html>
