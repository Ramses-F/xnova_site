<?php
 include("./monPDO.php");
 // On détermine le nombre total de projets
$sql = 'SELECT COUNT(*) AS nb_projet FROM `info_projets`;';

// On prépare la requête
$req = MonPdo::getInstance()->prepare($sql);

// On exécute
$req->execute();

// On récupère le nombre de projets
$result = $req->fetch();

$parPage = (int) $result['nb_projet'];
$premier =0;

// Récupérations des infos de la base de donnée pour le traitement à data.js
$texteReqs="SELECT*FROM info_projets ORDER BY id_projets DESC LIMIT :premier, :parpage";
$req = MonPdo::getInstance()->prepare($texteReqs);
$req->setFetchMode(PDO::FETCH_OBJ);// attention pas de fetch_class car les colonnes ne correspondent pas à un objet auteur
$req->bindParam(':premier', $premier,PDO::PARAM_INT);
$req->bindParam(':parpage', $parPage,PDO::PARAM_INT);
$req->execute();
$tab=[];
$tab = $req->fetchAll();
$tabOeuvre=[];
for($i=0;$i<count($tab);$i++){
   
   $texteReqs="SELECT *FROM image WHERE  id_projets =:id_projets";
$req = MonPdo::getInstance()->prepare($texteReqs);
$req->setFetchMode(PDO::FETCH_OBJ);// attention pas de fetch_class car les colonnes ne correspondent pas à un objet auteur
$req->bindParam(':id_projets', $tab[$i]->id_projets);
$req->execute();
$img=[];
$img = $req->fetchAll();
$tab[$i]->images=$img;
}
$tabOeuvre =json_encode($tab);

?>