<?php
    include("./monPDO.php");
    $recup_nom_image =[];
if (isset($_POST['submit'])) {
    if (!empty($_POST['categorie'])&&!empty($_POST['client'])&& !empty($_POST['date_projet']) && !empty($_POST['url']) && !empty($_POST['text'])&& !empty($_POST['legend'])) {
        $categorie=$_POST['categorie'];
        $client=$_POST['client'];
        $date_projet=$_POST['date_projet'];
        $url=$_POST['url'];
        $text=$_POST['text'];
        $legend=$_POST['legend'];
        // VERIFICATION
        if (!filter_var($url, FILTER_VALIDATE_URL)) {
            // PAS UN LIEN
            header('location: ../?error=true&message=Adresse url non valide');
            exit();
        }
    
        $texteReq ="insert into    info_projets (categorie,client,date_projet,url,text,legend) 
    values (:categorie,:client,:date_projet,:url,:text,:legend)";
        $req = MonPdo::getInstance()->prepare($texteReq);
        $req->setFetchMode(PDO::FETCH_OBJ);// attention pas de fetch_class car les colonnes ne correspondent pas à un objet auteur
        //var_dump($bd);
    
    
        $req->bindParam(':categorie', $categorie);
        $req->bindParam(':client', $client);
        $req->bindParam(':date_projet', $date_projet);
        $req->bindParam(':url', $url);
        $req->bindParam(':text', $text);
        $req->bindParam(':legend', $legend);
        $req->execute();
    
    
        $texteReqs="SELECT * FROM info_projets order by id_projets DESC LIMIT 1";
        $req = MonPdo::getInstance()->query($texteReqs);
        $req->setFetchMode(PDO::FETCH_OBJ);// attention pas de fetch_class car les colonnes ne correspondent pas à un objet auteur
        $arriv=$req->fetch();
        //var_dump($_FILES);
       // var_dump($arriv);
        $id_projets= $arriv->id_projets;
    }




    $j=0;
    //var_dump($_FILES);
    for($i=0;$i<count($_FILES) ;$i++) {
        if ($_FILES['nom_image'.$i]['error']==4) {
            continue;
        }
        //var_dump($_FILES);
        //traitements du formulaire des images livres  la boutique
        //verifier si l'image est bien reçu
    
        var_dump('hé est-ce que ça passe !');
        //variable
        $error = 1;
        $j=0;
        $addresse=[];
        //verifier si la taille de l'image est correcte
        if ($_FILES['nom_image'.$i]['size']<=3000000) {
            //recupérer les information de l'image(nom,extension ,etc) pour le stocker dans la variable $informatiosImage
            $informatiosImage= pathinfo($_FILES['nom_image'.$i]['name']);
            //recupérer l'extension de l'image  pour le stocker dans la variable $extensionImage
            $extensionImage =$informatiosImage['extension'];
            $extensionArray = array('png','gif','jpeg','jpg');
            if (in_array($extensionImage, $extensionArray)) {
                
                $addresse = './uploads/'.time().rand().rand().'.'.$extensionImage;
                
                //var_dump($addresse);
                $nb= move_uploaded_file($_FILES['nom_image'.$i]['tmp_name'], $addresse);
                $error=0;
                if ($nb) {
                    $nom_image=$_FILES['nom_image'.$i]['name'];
                    $texteReq="insert into    image (id_projets,nom_image) 
                    values (:id_projets,:nom_image)";
                    $req = MonPdo::getInstance()->prepare($texteReq);
                    $req-> setFetchMode(PDO::FETCH_OBJ);// attention pas de fetch_class car les colonnes ne correspondent pas à un objet auteur
                    
                    $req->bindParam(':id_projets', $id_projets);
                    $req->bindParam(':nom_image', $addresse);
                    $req->execute();
                }
            }
        }
        //while($j<3){
             //  $m= $i;
            $recup_nom_image[$i] =$addresse;
            //$m=0;
            //var_dump($addresse);
            //$j++;
       // }
    }
    
}  


//var_dump($recup_nom_image);

// Récupérations des infos de la base de donnée pour le traitement à data.js
$texteReqs="SELECT *FROM info_projets,image WHERE info_projets.id_projets=image.id_projets";
        $req = MonPdo::getInstance()->prepare($texteReqs);
        $req->setFetchMode(PDO::FETCH_OBJ);// attention pas de fetch_class car les colonnes ne correspondent pas à un objet auteur
        $req->execute();
        $tables=[];
       $i=0;
       $tables = json_encode($arriv=$req->fetchAll());
      
        $texteReqs="SELECT *FROM image ORDER BY id_image DESC ";
        $req = MonPdo::getInstance()->prepare($texteReqs);
        $req->setFetchMode(PDO::FETCH_OBJ);// attention pas de fetch_class car les colonnes ne correspondent pas à un objet auteur
        $req->execute();
        $tabImages=[];
       $i=0;
       $tabImages= json_encode($arriv=$req->fetchAll());
      
       
       if(isset($error) && $error ==0){
           $texteReqs="SELECT image.id_projets,image.nom_image FROM info_projets,image WHERE info_projets.id_projets =image.id_projets ";
           $req = MonPdo::getInstance()->prepare($texteReqs);
           $req->setFetchMode(PDO::FETCH_OBJ);// attention pas de fetch_class car les colonnes ne correspondent pas à un objet auteur
           $req->execute();
           $addresse_images=[];
           $addresse_images=json_encode($req->fetchAll());
           
           
        }
        
        
        //Paginations
        // On détermine sur quelle page on se trouve
(isset($_GET['page']) && !empty($_GET['page']))?$currentPage = (int) strip_tags($_GET['page']):$currentPage = 1;

// On détermine le nombre total de projets
$sql = 'SELECT COUNT(*) AS nb_projet FROM `info_projets`;';

// On prépare la requête
$req = MonPdo::getInstance()->prepare($sql);

// On exécute
$req->execute();

// On récupère le nombre de projets
$result = $req->fetch();

$nbProjets = (int) $result['nb_projet'];

// On détermine le nombre de projets par page
$parPage = 3;

// On calcule le nombre de pages total
$paginer = ceil($nbProjets / $parPage);

// Calcul du 1er projet de la page
$premier = ($currentPage * $parPage)-$parPage;

        
        // Récupérations des infos de la base de donnée pour le traitement à data.js
        $texteReqs="SELECT *FROM info_projets  ORDER BY id_projets DESC LIMIT :premier, :parpage";
        $req = MonPdo::getInstance()->prepare($texteReqs);
        $req->setFetchMode(PDO::FETCH_OBJ);// attention pas de fetch_class car les colonnes ne correspondent pas à un objet auteur
        $req->bindParam(':premier', $premier,PDO::PARAM_INT);
        $req->bindParam(':parpage', $parPage,PDO::PARAM_INT);
        
        $req->execute();
        $tab=[];
       $i=0;
       $tab = $req->fetchAll();
       $tabo=[];
       foreach($tab as $key=>$val){
           $tabo[$key]=$val;
           $texteReqs="SELECT *FROM image WHERE  id_projets =:id_projets";
        $req = MonPdo::getInstance()->prepare($texteReqs);
        $req->setFetchMode(PDO::FETCH_OBJ);// attention pas de fetch_class car les colonnes ne correspondent pas à un objet auteur
        $req->bindParam(':id_projets', $val->id_projets);
        $req->execute();
        $img=[];
       $i=0;
       $img = $req->fetchAll();
       $tabo[$key]->images=$img;
       }
       $tabo =json_encode($tabo);
       
       if(count($tab)==0){
           header('location:./');
           exit;

       }
        
        
        
        
        
        ?>