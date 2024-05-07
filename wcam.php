  <body>
  
  <style>
	body {
		background-color:black;
	}
	.canh {	 visibility: hidden;}
	.score {
		  font-size: 40px;
		 border: 2px double green;
      border-radius: 10px;
      padding: 5px;
	  background-color: #f2f2f2;
	  margin:3px;
	background-color: white; 
	display: inline-block;
	text-align:center;
		color: red;		
		top:10px;
		left:30px;
        position: absolute;
		}
		
			.cible {
		 border: 2px double #FF8C00;
		border-radius: 10px;
		color: red;		
		top:237px;
		left:319px;
        position: absolute;
		}
	</style>

<div id="corps" onclick="points()"> 
<span id="score" class="score"></span>

<canvas class="cano" id="canvas2" width="640" height="480"></canvas>
  <video id="video2" class="canh" width="64" height="48" loop muted controls poster=""></video>
 
</div>
<script>
  // Obtenir les références des éléments vidéo et canvas
  var video2 = document.getElementById("video2");
  var canvas2 = document.getElementById("canvas2");
  var ctx2 = canvas2.getContext("2d");
  var choix='red';
  var scoring =document.getElementById('score');
var vnotrun=true;  
var score=0;
  var minRGB;
scoring.innerHTML="Le score des bleus est de : "+score+" Points!";
  // Demander l'accès à la webcam
  navigator.mediaDevices.getUserMedia({
  video: {
  
    facingMode: "environment"
  }
})
    .then(function(stream2) {
		
      // Lier le flux vidéo à l'élément vidéo
      video2.srcObject = stream2;
      // Jouer la vidéo
      video2.play();
	  
    })
    .catch(function(err) {
      // Gérer les erreurs
      console.error(err);
    });
// Convertit un tableau rgba en ryb
function rgbaToRyb(rgba) {
	// extraire les données du tableau grb en entrée.
	// model: rgba r, g, b, a
var r=rgba[0];
var g=rgba[1];
var b=rgba[2];
var a=rgba[3];
//var r = color[0], g = color[1], b = color[2]; alrady done
    // Remove the whiteness from the color.
    var w = Math.min(r, g, b);
    r -= w;
    g -= w;
    b -= w;

    var mg = Math.max(r, g, b);

    // Get the yellow out of the red+green.
    var y = Math.min(r, g);
    r -= y;
    g -= y;

    // If this unfortunate conversion combines blue and green, then cut each in
    // half to preserve the value's maximum range.
    if (b && g) {
        b /= 2.0;
        g /= 2.0;
    }

    // Redistribute the remaining green.
    y += g;
    b += g;

    // Normalize to values.
    var my = Math.max(r, y, b);
    if (my) {
        var n = mg / my;
        r *= n;
        y *= n;
        b *= n;
    }

    // Add the white back in.
   // r += w;
    //y += w;
    //b += w;

    // And return back the ryb typed accordingly.
 if (1==0){ // more miss coding
var y;
  // Convert RGBA values to range of 0-1
  r /= 255;
  g /= 255;
  b /= 255;

  // Find max and min RGB values /totRGBnop
  const maxRGB = Math.max(r, g, b);
  const minRGB = Math.min(r, g, b);
  // remove whiteness : manque v0
  r-=minRGB;g-=minRGB;b-=minRGB;
  y=Math.min(r, g);
  r-=y;g-=y;
   const my = Math.max(r, y, b);
  if (b && g) {
	  b/=2.0;G/=2.0;
	  
  }
  y+=g;b+=g;
  
  if (maxRGB){
	  var n=maxRGB/my; r*=n;y*=n;b*=n;
  }
	r+=minRGB;y+=minRGB;b+=minRGB;
 // misscoding here
  

				  // Calculate yellow, magenta, and cyan values
				  const yellow = (maxRGB - r) + (maxRGB - g) / 2;
				  const magenta = (maxRGB - g) + (maxRGB - b) / 2;
				  const cyan = (maxRGB - b) + (maxRGB - r) / 2;

				  // Calculate red, blue, and green values
				  const red = (maxRGB - r) - yellow;
				  const blue = (maxRGB - b) - cyan;
				  const green = (maxRGB - g) - magenta;

				  // Convert RYB values to range of 0-255
				  const rY = Math.round(red * 255);
				  const yY = Math.round(yellow * 255);
				  const bY = Math.round(blue * 255);
			const returnV= [ rY, yY, bY, a ]; // miss coding too
				  r *= 255;
				  g *= 255;
				  b *= 255; // miss coding too again
  }

	const returnV= [r, y, b, a ];
  // Return RYB values as an object // array in return model : 
  return returnV;
}
  // Définir une fonction pour dessiner la vidéo dans le canvas
  function drawVideo2() {
	
    
    // Dessiner la vidéo actuelle dans le canvas
	//ctx2.globalCompositeOperation = ‘source-over’;
    if (vnotrun){}
	ctx2.drawImage(video2, 0, 0, canvas2.width, canvas2.height);
    // Demander une nouvelle animation
    requestAnimationFrame(drawVideo2); //// call the animate function and pass the element and the duration as arguments
////animate(box, 2000); si def = >> function animate(element, duration) 
	vnotrun=false;
	drawcible();
	drawV();
	
  }
  function drawV(){
  
  // Set the fill style to green
ctx2.fillStyle = 'green';

// Draw the four points
ctx2.fillRect(canvas2.width / 2 - 1, canvas2.height / 2, 1, 1);
ctx2.fillRect(canvas2.width / 2 + 1, canvas2.height / 2, 1, 1);
ctx2.fillRect(canvas2.width / 2, canvas2.height / 2 - 1, 1, 1);
ctx2.fillRect(canvas2.width / 2, canvas2.height / 2 + 1, 1, 1);
  }
  function drawcible (){
  //DRAWING
  ctx2.strokeStyle = "red";
	
		
  ctx2.drawImage(video2, 0, 0); ctx2.beginPath(); ctx2.arc(canvas2.width/2, canvas2.height/2, 25, 0, 2 * Math.PI); ctx2.stroke();
  }
var pixel; // déclaration pour le get lixel //This will return an array of four values: red, green, blue, and alpha.

function points(){
	requestAnimationFrame(()=> { // canvas rempli? aussi les tests après
		pixel = ctx2.getImageData(canvas2.width/2, canvas2.height/2, 1, 1).data;
		  minRGB = Math.min(pixel[0] , pixel[1] , pixel[2] );
		var pixel2=rgbaToRyb(pixel);//pixel2  convern à la racine de pointFunc de rgb à ryb
			if (isred(rgbaToRyb(pixel) )){score+=1; }// test
			// conversion bugué et corrigée le 26 03 2023
			console.log("R: " + pixel2[0] + " Y: "+pixel2[1] +" B: "+pixel2[2]+" Pts : "+score+" bright: "+minRGB );
			console.log("R: " + pixel[0] + " G: "+pixel[1] +" B: "+pixel[2]+" Pts : "+score );
			// preuve de concept continue
			scoring.innerHTML="Le score des jaunes est de : "+score+" Points!"+" bright: "+minRGB;
		});

}
// ici test des differentes couleurs >>
var seuilK=2;
function isred(pix){
	var rep=false;
	var spec=0;
	var spec2=0;
	if (pix[0]>pix[1] && pix[0]>pix[2]){
		spec=pix[0];
		if (pix[1]>pix[2]){
			spec2=pix[1];} else {spec2=pix[2];
			}
		}
	if (pix[1]>pix[0] && pix[1]>pix[2]){
		spec=pix[1];
		if (pix[0]>pix[2]){
			spec2=pix[0];} else {spec2=pix[2];
			}
		}		
		
	if (pix[2]>pix[0] && pix[2]>pix[1]){
		spec=pix[2];
		if (pix[1]>pix[0]){
			spec2=pix[1];} else {spec2=pix[0];
			}
		}		
		
	var kverif=spec/255;
	var moy=(pix[1]+pix[2])/2;
		if (pix[0]>pix[1] && pix[0]>pix[2]){ 
			if (pix[0]>spec2*seuilK*kverif){rep=true;}
		}
		//alert(" R: "+pix[0]+" G: "+pix[1]+" B: "+pix[2]);
		return rep;
}
function isblue(pix){
	var rep=false;
	var spec=0;
	var spec2=0;
	if (pix[0]>pix[1] && pix[0]>pix[2]){
		spec=pix[0];
		if (pix[1]>pix[2]){
			spec2=pix[1];} else {spec2=pix[2];
			}
		}
	if (pix[1]>pix[0] && pix[1]>pix[2]){
		spec=pix[1];
		if (pix[0]>pix[2]){
			spec2=pix[0];} else {spec2=pix[2];
			}
		}		
		
	if (pix[2]>pix[0] && pix[2]>pix[1]){
		spec=pix[2];
		if (pix[1]>pix[0]){
			spec2=pix[1];} else {spec2=pix[0];
			}
		}		
		
	var kverif=spec/255;
	var moy=(pix[1]+pix[2])/2;
		if (pix[2]>pix[0] && pix[2]>pix[1]){
			if (pix[2]>spec2*seuilK*kverif){rep=true;}
		}
		//alert(" R: "+pix[0]+" G: "+pix[1]+" B: "+pix[2]);
		return rep;
}
function isyel(pix){
	var rep=false;
	var spec=0;
	var spec2=0;
	if (pix[0]>pix[1] && pix[0]>pix[2]){
		spec=pix[0];
		if (pix[1]>pix[2]){
			spec2=pix[1];} else {spec2=pix[2];
			}
		}
	if (pix[1]>pix[0] && pix[1]>pix[2]){
		spec=pix[1];
		if (pix[0]>pix[2]){
			spec2=pix[0];} else {spec2=pix[2];
			}
		}		
		
	if (pix[2]>pix[0] && pix[2]>pix[1]){
		spec=pix[2];
		if (pix[1]>pix[0]){
			spec2=pix[1];} else {spec2=pix[0];
			}
		}		
		
	var kverif=spec/255;
	var moy=(pix[1]+pix[2])/2;
		if (pix[1]>pix[0] && pix[1]>pix[2]){
			if (pix[1]>spec2*seuilK*kverif){rep=true;}
		}
		//alert(" R: "+pix[0]+" G: "+pix[1]+" B: "+pix[2]);
		return rep;
}
  // Ajouter un écouteur d'événement pour commencer l'animation au clic sur le canvas
  canvas2.addEventListener('click', drawVideo2);
  canvas2.addEventListener('click', points());

	
</script>
</body>