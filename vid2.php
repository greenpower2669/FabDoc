<!DOCTYPE html>
<html>
<head>
  <meta charset="UTF-8">
  <title>Miniature d'aperçu de vidéo</title>
</head>
<body>
  <video id="ma-video" width="640" height="480" controls>
    <source src="ma-video.mp4" type="video/mp4">
  </video>
  <script>
    const video = document.getElementById('ma-video');
    const canvas = document.createElement('canvas');
    canvas.width = 320;
    canvas.height = 240;
    const context = canvas.getContext('2d');
    context.drawImage(video, 0, 0, canvas.width, canvas.height);
    const dataURI = canvas.toDataURL();
    const image = document.createElement('img');
    image.src = dataURI;
    document.body.appendChild(image);
  </script>
</body>
</html>
<!DOCTYPE html>
<html>
<head>
  <meta charset="UTF-8">
  <title>Miniature d'aperçu de vidéo</title>
</head>
<body>
  <video id="ma-video" width="640" height="480" controls poster="">
    <source src="ma-video.mp4" type="video/mp4">
  </video>
  <script>
    const video = document.getElementById('ma-video');
    const canvas = document.createElement('canvas');
    canvas.width = 320;
    canvas.height = 240;
    const context = canvas.getContext('2d');
    context.drawImage(video, 0, 0, canvas.width, canvas.height);
    const dataURI = canvas.toDataURL();
    video.setAttribute('poster', dataURI);
  </script>
</body>
</html>
<!DOCTYPE html>
<html>
<head>
  <meta charset="UTF-8">
  <title>Miniature d'aperçu de vidéo</title>
</head>
<body>
  <video id="ma-video" width="640" height="480" controls poster="">
    <source src="ma-video.mp4" type="video/mp4">
  </video>
  <canvas id="canvas" width="320" height="240"></canvas>
  <button id="enregistrer">Enregistrer l'image</button>
  <script>
    const video = document.getElementById('ma-video');
    const canvas = document.getElementById('canvas');
    const context = canvas.getContext('2d');
    video.addEventListener('play', () => {
      const interval = setInterval(() => {
        if (video.paused || video.ended) {
          clearInterval(interval);
          return;
        }
        context.drawImage(video, 0, 0, canvas.width, canvas.height);
      }, 1000 / 30); // dessine la miniature 30 fois par seconde
    });
    document.getElementById('enregistrer').addEventListener('click', () => {
      const dataURI = canvas.toDataURL('image/png');
      const link = document.createElement('a');
      link.href = dataURI;
      link.download = 'miniature.png';
      document.body.appendChild(link);
      link.click();
    });
	document.getElementById('enregistrer').addEventListener('click', () => {
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
  };
  xhr.open('POST', 'upload.php', true);
  xhr.setRequestHeader('Content-Type', 'application/x-www-form-urlencoded');
  xhr.send('image=' + encodeURIComponent(dataURI));
});

  </script>
</body>
</html>
