<?php
session_start();

//echo "<script>alert(\"id=";echo "Post :".FormData::toString()." en cours\")</script>";
function F5like(){echo "<meta http-equiv=\"refresh\" content=\"0\">";}
function alertPHP($alertPHPin){ 
if (is_array($alertPHPin)) {}
echo "<script>alert(\">>  ";echo "Php_io : ".$alertPHPin."  <<\")</script>";}



$file = $_SESSION["SelectIFP"];

if (file_exists($file)) {
    header('Content-Description: File Transfer');
    header('Content-Type: application/octet-stream');
    header('Content-Disposition: attachment; filename="'.basename($file).'"');
    header('Expires: 0');
    header('Cache-Control: must-revalidate');
    header('Pragma: public');
    header('Content-Length: ' . filesize($file));
    readfile($file);
    exit;
}


?>
