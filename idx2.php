<!DOCTYPE HTML> 
<?php 
require_once ("allwintop0.php"); 
?> 
<head>
  <meta name="viewport" content="width=device-width, initial-scale=1.0;height=device-height, initial-scale=1.0">
</head>


<style>
    .idx2ro {
      position:absolute;
        object-fit:cover;
        
  margin:0;
  border: 0;
  text-align:center;
  height:100%;
  width:100%;
  
 /* overflow: hidden;*/
  
 
  
}
</Style>
<?php //<link rel="stylesheet" href="pourc.php"> ?> 
  

<?php

$allwintop0=require_once ("allwinscale.php");

if(array_key_exists('idxbt2', $_POST)) {
  button2();
}

if(array_key_exists('idxbtio', $_POST)) {
  $_SESSION["hideio"]=!$_SESSION["hideio"]; 
 
}
//




?>

<body class="barleft">

<h>__________</h>
 


      <div class="<?php if ($_SESSION["coefm"]!=1){
                  echo "lolcontainermobile";}
                  else {echo "notcontainer";}
            ?>">
<div class="idx2ro">
                      <style>
            .bas1{
              z-index:1;
                  position:absolute;
                  /*background: #F0F;*/
                  
                  padding:0%;
                  transform-origin:50%,0%;
                 
                  top: 13px;
               
                  <?php 
                  
                  if ($_SESSION["coefm"]!=1){
                  echo "
                  width:50%;
                  transform: translate(0%, 0%);
                  left: 0%;
                  ";}
                  if ($_SESSION["coefm"]==1) 
                   {echo " transform: translate(-0%, -0%);
                  width:100%;
                  height:50%;
                  ";}
				  echo " transform: translate(-0%, -0%);
                  width:100%;
                  height:5%;
                  ";?>
              
              

            }
            </style>
            <div class="bas1">
            <div>
                  <form  id="01" method="post" target="view" action="<?php echo htmlspecialchars("idx3.php");?>">  
                     <input id="Ggauche" type="submit" value="gauche" class="buttonchg">1</input>  


                </p>      
                  </form>
                  </div>

            </div>
            <style>
            .bas2{
              z-index:3;
                  position:absolute;
                  /*background: #F0F;*/
                  ;
                  padding:0%;
                  transform-origin:50%,0%;
         
                 
                <?php
                echo "font-sizexxx: ".$_SESSION["coefm"]."px;";
                if ($_SESSION["coefm"]!=1){
                  echo "top: 5%;
                  width:50%;
                  right:0%;
                  
                  transform: translate(0%, 0%);
                  ";}
                  if ($_SESSION["coefm"]==1) {echo "transform: translate(-0%, -0%);
                        width:100%;
                        height:50%;
                        top: 385px;
                        ";}

                  ?>
                  
              
              

            }
            </style>
            
            <div class="bas2">
                        <div>
                  




                        <?php //if ($_SESSION["coefm"]!=1){echo "";}?>


                  

            <div class="tooltip" >
                  <?php 
                        $form2=sendtxt(1,"");

                  ?>
                  <span class="tooltiptext">Saisir info ! </span>
            </div>
                                                                                                </br>
    
                  <div class="tooltip">
                  <form  id="03" method="post" target="view" action="<?php echo htmlspecialchars("idx3.php");?>"> 


                        <span class="tooltiptext"> Action : </span>
                        <div class="tooltipsub" >
                                                                        <input type="submit" name="login"
                                    class="buttonchg" value="  " height="50" width="100" 
                              <?php styleimg("include/login.png");?>
                              /> 
                              <span class="tooltipsubtext"> Se loguer ! </span>
                        </div>
                        <div class="tooltipsub" >    
                              <input type="submit" name="lien"
                                    class="buttonchg" value="  " height="50" width="100" 
                              <?php styleimg("include/lien.png");?>
                              /> 
                              <span class="tooltipsubtext"> Lier ! </span>
                        </div>
                                                                              <br/> 
                        <div class="tooltipsub" >
                              <input type="submit" name="dl"
                                    class="buttonchg" value="  " height="50" width="100" 
                                    <?php styleimg("include/dl2.png");?>
                                    />
                                    <span class="tooltipsubtext"> Charger ! </span>
                        </div> 
                        <div class="tooltipsub" > 
                              <input type="submit" name="rouage"
                                    class="buttonchg"  value="  "
                                    <?php styleimg("include/rouage.png");?>   
                              />
                              <span class="tooltipsubtext"> Modifier ! </span>
                        </div>
                        <div class="tooltipsub" >
                              <input type="submit" name="upload"
                                    class="buttonchg"  value="  "
                                    <?php styleimg("include/upload.png");?>     
                              />
                              <span class="tooltipsubtext"> Sauvegarder ! </span>
                        </div>
                                                      <br/> 
                        <div class="tooltipsub" >
                              <input type="submit" name="loupe"
                                    class="buttonchg"  value="  "
                                    <?php styleimg("include/loupe.png");?>     
                              />
                              <span class="tooltipsubtext"> Chercher ! </span>
                        </div>
                        <div class="tooltipsub" >
                              
                              <input type="submit" name="info"
                                    class="buttonchg"  value="  "
                                    <?php styleimg("include/info2.png");?>     
                              />
                              <span class="tooltipsubtext"> S'informer ! </span>
                        </div>


                              <?php 

                              // ecrit une ligne invisible pour la continuité du fond.
                              // idxbtscreenm et p por le scale abandoné mais o garde les param et var
                              ?>
                  </form>
                  </div>
                  </div>
            </div>



            
                        

            
      </div>
      
      </br></br></br></br></br></br></br></br></br></br></br></br></br></br></br></br></br></br></br></br></br></br></br></br></br></br></br></br></br></br></br></br></br></br></br></br></br></br></br></br></br></br></br></br></br></br>
                        </br><l style="font-size : 0;">.<l>
</div>                       
</body>
