<?php ob_start();
session_start();

include("./monPDO.php");
$uc = empty($_GET['uc']) ? "projet" : $_GET['uc'];
 switch($uc){
     case 'projet':
         include("./controleurProjet.php");
     break;
     case 'image':
         include("./controleurProjet.php");
     break;
     
 }
 


?>
