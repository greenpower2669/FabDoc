



  <style>
  .fondroul	{

    position:absolute;
    font-size: 25px;
    text-align: center;
    color: #000;
    transform-origin:0%,0%;
      /*background: #FF0;*/            
     display: block;
    top:3%;
    width:100%;
    height:40%;

    <?php if ($_SESSION["coefm"]!=1){
                  echo "transform-origin:0%,0%;text-align:left;width:100%;transform: translate(-0%, -0%);
                  ";}
                  else {echo "";}

                  ?>
    
   
   
    
  }
  
  .h313	{font:small-caps 167% Arial,Helvetica,sans-serif}
    
  .containerb {
  
    
    position: relative;
    text-align:center;
    margin:0 auto;
    left:0%;
    transform: translate(-65%,30%);
    /*transform-origin: 50% 50%;*/
 
    width:520px;
    height:500px;
    -moz-perspective: 5903px;	  
    -webkit-perspective: 5903px}
    
  .containerb:hover * {
    -moz-animation-play-state:paused;
    -webkit-animation-play-state:paused}
      
  .frameb {height: 33px;
    -moz-transform-style: preserve-3d;
    -webkit-transform-style: preserve-3d;  /* translate must be last */
    -moz-transform: rotateX(35deg) rotateY(45deg) rotateZ(0deg) translate3d(325px,-70px,50px);
    -webkit-transform: rotateX(35deg) rotateY(-10deg) rotateZ(8deg) translate3d(325px,-70px,50px)}
    
  .stripb {-moz-transform-style: preserve-3d;
    -webkit-transform-style: preserve-3d;
    -moz-animation: spin 75s infinite linear;
    -webkit-animation: spin 75s infinite linear}
  
  .stripb div {
    position: absolute;
    border: solid rgb(145,87,0);
    border-width: 0 thin;
    background: #FFF ;  /*url("https://c0.lestechnophiles.com/www.numerama.com/wp-content/uploads/2016/03/une-google-photos.jpg?resize=1024,576")  background image is 792px 320px, try with green-hills or thailand-sunrise.jpg */
  
    left: 0px;
    
    height:33px;
    width:520px;
    opacity: 1;}
  
  .stripb .a {background-position: 0px 782px;
       -moz-transform: rotateX(0deg) translateZ(124px);
    -webkit-transform: rotateX(0deg) translateZ(124px)}
      
  .stripb .b {background-position: 0 33px;
       -moz-transform: rotateX(15deg) translateZ(124px);
    -webkit-transform: rotateX(15deg) translateZ(124px)}
    
  .stripb .c {background-position: 0 66px;
       -moz-transform: rotateX(30deg) translateZ(124px);
    -webkit-transform: rotateX(30deg) translateZ(124px)}
    
  .stripb .d {background-position: 0 99px;
       -moz-transform: rotateX(45deg) translateZ(124px);
    -webkit-transform: rotateX(45deg) translateZ(124px)}	
    
  .stripb .e {background-position: 0 132px;
       -moz-transform: rotateX(60deg) translateZ(124px);
    -webkit-transform: rotateX(60deg) translateZ(124px)}	
    
  .stripb .f {background-position: 0 165px;
       -moz-transform: rotateX(75deg) translateZ(124px);
    -webkit-transform: rotateX(75deg) translateZ(124px)}
    
  .stripb .g {background-position: 0 198px;
       -moz-transform: rotateX(90deg) translateZ(124px);
    -webkit-transform: rotateX(90deg) translateZ(124px)}
    
  .stripb .h {background-position: 0 231px;
       -moz-transform: rotateX(105deg) translateZ(124px);
    -webkit-transform: rotateX(105deg) translateZ(124px)}	
    
  .stripb .i {background-position: 0 264px;
       -moz-transform: rotateX(120deg) translateZ(124px);
    -webkit-transform: rotateX(120deg) translateZ(124px)}	
    
  .stripb .j {background-position: 0 297px;
       -moz-transform: rotateX(135deg) translateZ(124px);
    -webkit-transform: rotateX(135deg) translateZ(124px)}
    
  .stripb .k {background-position: 0 330px;
       -moz-transform: rotateX(150deg) translateZ(124px);
    -webkit-transform: rotateX(150deg) translateZ(124px)}
      
  .stripb .l {background-position: 0 363px;
       -moz-transform: rotateX(165deg) translateZ(124px);
    -webkit-transform: rotateX(165deg) translateZ(124px)}	
      
  .stripb .m {background-position: 0 396px;
       -moz-transform: rotateX(180deg) translateZ(124px);
    -webkit-transform: rotateX(180deg) translateZ(124px)}		
      
  .stripb .n {background-position: 0 429px;
       -moz-transform: rotateX(195deg) translateZ(124px);
    -webkit-transform: rotateX(195deg) translateZ(124px)}
    
  .stripb .o {background-position: 0 462px;
       -moz-transform: rotateX(210deg) translateZ(124px);
    -webkit-transform: rotateX(210deg) translateZ(124px)}
    
  .stripb .p {background-position: 0 495px;
       -moz-transform: rotateX(225deg) translateZ(124px);
    -webkit-transform: rotateX(225deg) translateZ(124px)}	
    
  .stripb .q {background-position: 0 528px;
       -moz-transform: rotateX(240deg) translateZ(124px);
    -webkit-transform: rotateX(240deg) translateZ(124px)}	
    
  .stripb .r {background-position: 0 561px;
       -moz-transform: rotateX(255deg) translateZ(124px);
    -webkit-transform: rotateX(255deg) translateZ(124px)}
    
  .stripb .s {background-position: 0 594px;
       -moz-transform: rotateX(270deg) translateZ(124px);
    -webkit-transform: rotateX(270deg) translateZ(124px)}
    
  .stripb .t {background-position: 0 627px;
       -moz-transform: rotatex(285deg) translateZ(124px);
    -webkit-transform: rotatex(285deg) translateZ(124px)}	
    
  .stripb .u {background-position: 0 660px;
       -moz-transform: rotateX(300deg) translateZ(124px);
    -webkit-transform: rotateX(300deg) translateZ(124px)}	
    
  .stripb .v {background-position: 0 693px;
       -moz-transform: rotateX(315deg) translateZ(124px);
    -webkit-transform: rotateX(315deg) translateZ(124px)}
    
  .stripb .w {background-position: 0 726px;
       -moz-transform: rotatex(330deg) translateZ(124px);
    -webkit-transform: rotatex(330deg) translateZ(124px)}
    
  .stripb .x {background-position: 0 759px;
       -moz-transform: rotateX(345deg) translateZ(124px);
    -webkit-transform: rotateX(345deg) translateZ(124px)}
  
  @-moz-keyframes spin {
    from { -moz-transform: rotatex(-360deg)}
    to   { -moz-transform: rotatex(0deg)}}
    
  @-webkit-keyframes spin {
    from { -webkit-transform: rotatex(-360deg)}
    to   { -webkit-transform: rotatex(0)}}
  
</style>


<div class="fondroul" id="fondroule">


  <h1></h1>
  
  <div class="containerb">	
    <div class="frameb">
      <div class="stripb">

        <div class="a"></div>
        <div class="b"></div>
        <div class="c"></div>
        <div class="d">les données. (csv)</div>
        <div class="e">Ce qui permetra d'en péréniser </div>
        <div class="f">Ou sur le disque!</div>
        <div class="g">Dans les cookies.</div>
        <div class="h">Via votre ordinateur sauvegarder.</div>
        <div class="i"></div>
        <div class="j"> </div>
        <div class="k">est basé en france</div>
        <div class="l">Base de donnés, o2switch</div>
        <div class="m"></div>
        <div class="n">Via le web,utiliser les serveurs</div>
        <div class="o"></div>
        <div class="p">Les options proposés sont:</div>
        <div class="q"></div>
        <div class="r"></div>
        <div class="s">sur votre machine!</div>
        <div class="t">Qui est du code executé </div>
        <div class="u">de java script!</div>
        <div class="v">Aucun bout de ce code n'utilise</div>
        <div class="w"></div>
        <div class="x">Ce site ne contient que du php.</div>
                                                                      </br></br>
      </div>
    </div>
  </div>
 
  </div>









