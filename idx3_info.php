
<style>


    .idx3inforo{
        z-index:10;
      position:relative;
      padding:0%;
                  transform-origin:0%,0%;
                  transform: translate(-0%, -0%);
        
        /*background: #000;*/    
  margin:0;
  border: 0;
  text-align:center;
  height:    <?php
            echo 100*(1/$_SESSION["scale"])
            ?>%;
  width:100%;
  top: 0%;
 /* overflow: hidden;*/
  
 
  
}
.bas2info{
              
              z-index:1;
        text-align: bottom;
        position:absolute;
        transform-origin:0%,0%;
                  transform: translate(0%, 0%);
        width:100%;
        height:    <?php
            echo 30*(1/$_SESSION["scale"])
            ?>%;
        top:0%;
        margin:0;
                  /*background: #F0F;*/
        
                  
              
              

            }
        
     .bdpinfo{
        z-index:5;
        margin:0;
        position:relative;
        transform-origin:0%,0%;
                  transform: translate(0%, 0%);
        height:    <?php
            echo 35*(1/$_SESSION["scale"])
            ?>%;
        /*background: #0FF;*/
        top:0%;

        

    }

    .bdpinfob{
        z-index:14;
        text-align: bottom;
        position:absolute;
        transform-origin:0,0%;
                  transform: translate(0%, 0%);
        width:100%;
        height:    <?php
            echo 70*(1/$_SESSION["scale"])
            ?>%;
        /*background: #F00;*/
        top:30%;
        margin:0;

    }
</style>
<div class="idx3inforo">
<div class="bas2info">
<?php 
//here jonction of subs of idx3_info

if(array_key_exists('infozone', $_POST)) {
    echo "<l> Permet d'entrer des infos:</br> reset return scrp scrm ou commentaire !</l>";
    }
    if(array_key_exists('infopval', $_POST)) {
        echo "<l> Permet d'ajouter +1 à l’item </br> et affiche son quanti ! </l>";
    }
    if(array_key_exists('infop', $_POST)) {
        echo "<l> Permet d'ajouter +1 à l’item ! </l>";
    }
    if(array_key_exists('infom', $_POST)) {
        echo "<l> Permet de soustraire 1 à l’item !  </l>";
    }
    if(array_key_exists('logininfo', $_POST)) {
        echo "<l> Permet de se connecter </br> avec login et password !  </l>";
    }
    if(array_key_exists('lieninfo', $_POST)) {
        echo "<l> Permet de lier plusieurs items avec un commentaire: </br> ils sont rangés dans un tableau !  </l>";
    }
    if(array_key_exists('dlinfo', $_POST)) {
        echo "<l> Permet de télécharger les données sur le disque !</l>";
    }
    if(array_key_exists('rouageinfo', $_POST)) {
        echo "<l> Permet de proceder à une configuration: </br> pour les enregistrements et les titres des items !  </l>";
    }
    if(array_key_exists('uploadinfo', $_POST)) {
        echo "<l> Permet de proceder à un upload des données : </br> dans les cookies ou sur le net !  </l>";
    }
    if(array_key_exists('loupeinfo', $_POST)) {
        echo "<l> Permet de proceder à des recherches dans les tableaux: </br> pour les enregistrements et les titres des items !  </l>";
    }
    if(array_key_exists('infoinfo', $_POST)) {
        include("include/infosite.php");
    }
 ?> 


 </br>
</div>
 <div class="bdpinfob">
<p>

<form id="03" method="post" target="view" action="<?php echo htmlspecialchars("idx3.php");?>">
<?php

//echo "<h1>This is Button io that is selected</h1>";
echo $affdebb."Item 0".chr(34)."name=".chr(34)."infopval".chr(34).$afffinb;

?> 
<input name="infom" class="buttonminus" type="submit" value="Item -1" >&ensp;
<input name="infop" ma_div_txt="lol" type="submit" class="buttonplus" value="Item +1" 
style=" 

}  "></p>

<input type="submit" class="infochg" id="Info" name="infozone" Value="Zone de saisie" size=3 autocomplete="off"
style="    background-color: #FFFFFF;
    border-radius: 40em;
    border-style: none;
    box-shadow: #ADCFFF 0 -12px 6px inset;
    box-sizing: border-box;
    color: #000000;
    display: inline-block;
    font-family: -apple-system,sans-serif;
    font-size: 1.5rem;
    font-weight: 2;
    letter-spacing: 4px;
    margin: 0;
    outline: none;
    padding: 1rem 1.001rem;
    quotes: auto;
    text-align: center;
    text-decoration: none;
    transition: all .45s;
    user-select: none;
    -webkit-user-select: none;
    "
    >
 

</br>
<input type="submit" name="logininfo"
      class="buttonchg" value="  " height="50" width="100" 
<?php styleimg("include/login.png");?>
/>     
<input type="submit" name="lieninfo"
      class="buttonchg" value="  " height="50" width="100" 
<?php styleimg("include/lien.png");?>
/> 

<br/> 
<input type="submit" name="dlinfo"
      class="buttonchg" value="  " height="50" width="100" 
      <?php styleimg("include/dl2.png");?>
      />
       
<input type="submit" name="rouageinfo"
      class="buttonchg"  value="  "
      <?php styleimg("include/rouage.png");?> 
      
/>
<input type="submit" name="uploadinfo"
      class="buttonchg"  value="  "
      <?php styleimg("include/upload.png");?>     
/>
<br/> 
<input type="submit" name="loupeinfo"
      class="buttonchg"  value="  "
      <?php styleimg("include/loupe.png");?>     
/>
<input type="submit" name="infoinfo"
      class="buttonchg"  value="  "
      <?php styleimg("include/info2.png");?>     
/>

</form>
</div>

</div>
