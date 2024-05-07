<?php 
//here jonction of subs of idx3_lien

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
        echo "<l>  </l>
        <bloc bords=".chr(34)."arrondis".chr(34)." style=".chr(34)."important".chr(34).">
      <titre1>information importante sur ce site!</titre1>
      <p>Ce site ne contient que du php.</p>
      <p>Aucun bout de ce code ne fait appel à du java script<alert> qui est du code executé sur votre machine</alert>.</p>
   </bloc>
   <p>des options vous seront proposés pour:</p>
   <liste>
     <p>via le site web,utiliser les serveur de base de donnés hébergé par o2switch basé en france</p>
     <p>via votre navigateur héberger en local les données</p>
     <p>via votre ordinateur sauvegarder en local les données afin d'en péréniser les contenus</p>
   </liste>
        ";
    }
    
 
    if(array_key_exists('lien', $_POST)) {
        $_SESSION["rebours"]=11;
        $_SESSION["lientemp"]=codedatestr();
    
    ?> <META HTTP-EQUIV="Refresh" CONTENT="1; URL=idx3.php">
    <?php    //$_SESSION["matrice"][0]= array("AD","SC","G","CHG","BO","info","KEY");
    //$_SESSION["curseur"] += 1;
    //$_SESSION["matrice"][0]= array("AD","SC","G","CHG","BO","info","KEY");
    }

    if ($_SESSION["rebours"]!=0){
        $_SESSION["rebours"]-=1;
        ctrebours("Le lien ");
        echo "<h10> Pour l'ID:</br>".$_SESSION["lientemp"]."</br> à la position : ".$_SESSION["curseur"]."</h10>";
        echo "</br><h10>".count($_SESSION["matrice"], COUNT_RECURSIVE)." / ".count($_SESSION["matrice"])."</h10>";
        if ($_SESSION["rebours"]==0){

            $_SESSION["idx3"]="main";
            pushmatrice();
            setzero();
            ?><META HTTP-EQUIV="Refresh" CONTENT="0; URL=idx3.php">
            <?php 
        }
        ?><META HTTP-EQUIV="Refresh" CONTENT="1; URL=idx3.php">
            <?php
    }
 ?> 
 </br>


<?php

//echo "<h1>This is Button io that is selected</h1>";


?> 








</br>

  </br>
  

   
