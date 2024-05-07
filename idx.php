<?php 
require_once ("allwintop0.php"); 
?>  
<!DOCTYPE HTML>
<html>
<head>
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
</head>
<body class="bartop" marginwidth="0" marginheight="0">


<?php

$allwintop0=require_once ("allwinscale.php");
//initialisation of vars in cgf file and functions


//


if(array_key_exists('idxbtio', $_POST)) {
  $hideio=!$hideio; 
  //echo "<h1>This is Button io that is selected</h1>";
}

//


//echo "<h1>.$hideio.</h1>";

?>


<!--<p><span class="error">* required field</span></p>-->
<form id="02" method="post" target="view" action="<?php echo htmlspecialchars("idx3.php");?>"> 
<h><?php if ($_SESSION["coefm"]==1){echo "&ensp;&ensp;&ensp;&ensp;";}//v1.1?>_ - = FabDoc = - _</h>
<input type="text"  id="infohide" name="infohide" Value="nothing" size=3 autocomplete="off"
style=" 
 
    cursor: pointer; 
    opacity : 0;
    background: transparent;
    border: none !important;
    font-size: 2px;
    ">
</form>
</br><l style="font-size : 1%;    visibility: hidden;
    width: 140px;">.<l>
<form method="post" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]);?>">  





   
  
</form>

<?php

?>
</div>
</body>
</html>