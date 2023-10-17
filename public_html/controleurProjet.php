<?php


$action = $_GET['action'];

switch($action){
    case "listProjet" :
        
        // Récupérations des infos de la base de donnée pour le traitement à data.js
        $texteReqs="SELECT *FROM info_projets";
        $req = MonPdo::getInstance()->prepare($texteReqs);
        $req->setFetchMode(PDO::FETCH_OBJ);// attention pas de fetch_class car les colonnes ne correspondent pas à un objet auteur
        $req->execute();
        $lesProjets=$req->fetchAll();
        
        include('./listProjet.php');
    break;
    case "recupImage" :
        
        // Récupérations des infos de la base de donnée pour le traitement à data.js
        $texteReqs="SELECT *FROM info_projets";
        $req = MonPdo::getInstance()->prepare($texteReqs);
        $req->setFetchMode(PDO::FETCH_OBJ);// attention pas de fetch_class car les colonnes ne correspondent pas à un objet auteur
        $req->execute();
        $lesProjets=$req->fetchAll();

        $texteReqs="SELECT *FROM image";
        $req = MonPdo::getInstance()->prepare($texteReqs);
        $req->setFetchMode(PDO::FETCH_OBJ);// attention pas de fetch_class car les colonnes ne correspondent pas à un objet auteur
        $req->execute();
        $lesImages=$req->fetchAll();
        
        include('./listImage.php');
    break;
    case "add" :
        $mode = "Ajouter";
        include('./formProjet.php');
    break;
    case "update" :
        $mode = "Modifier";
        $id= $_GET['num'];   
        $req = MonPdo::getInstance()->prepare("SELECT * FROM info_projets WHERE id_projets= :id");
        $req-> setFetchMode(PDO::FETCH_OBJ);
        $req->bindParam(':id',$id);
        $req->execute();
        $leProjet = $req->fetch();
        include('./formProjet.php');
    break;
    case "miseAjour" :
        $mode = "Modifier";
        $id= $_GET['num'];   
        $req = MonPdo::getInstance()->prepare("SELECT * FROM image WHERE id_image = :id");
        $req-> setFetchMode(PDO::FETCH_OBJ);
        $req->bindParam(':id',$id);
        $req->execute();
        $leImage = $req->fetch();
        
        include('./formImage.php');
    break;
    case "delete" :
        $num= $_GET['num'];
        $req = MonPdo::getInstance()->prepare("SELECT * FROM image where id_projets= :id");
        $req-> setFetchMode(PDO::FETCH_OBJ);
	$req->bindParam(':id',$num);
    $req->execute();
    $leProjet = $req->fetch();
    
    $req = MonPdo::getInstance()->prepare("DELETE FROM image where id_projets= :num");
    $req->bindParam(':num',$num);
    $nb= $req->execute();
    if($nb==1){
        $_SESSION['message']=["success"=>"l'image à bien été supprimé"];
        
    }
    else {
        $_SESSION['message']=["success"=>"l'image n\'a pas été supprimé"];
        
    }
    
    header('location: distr.php?uc=projet&action=listProjet');
    exit();
break;
case 'valideForm':
    if(empty($_POST['num'])){//cas de création

        if (isset($_POST['submit'])) {
            var_dump($_POST);
            if (!empty($_POST['categorie'])&&!empty($_POST['client'])&&!empty($_POST['date_projet']) &&!empty($_POST['url'])&& !empty($_POST['text'])&& !empty($_POST['legend'])) {
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
                $texteReq ="insert into  info_projets (categorie,client,date_projet,url,text,legend) 
                values (:categorie,:client,:date_projet,:url,:text,:legend)";
                $req = MonPdo::getInstance()->prepare($texteReq);
                $req->setFetchMode(PDO::FETCH_OBJ);// attention pas de fetch_class car les colonnes ne correspondent pas à un objet auteur
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
        
    }
} 

$message = "ajouté";
}else{
    //cas de modification
    if (!empty($_POST['update'])) {
        if ($_FILES['nom_image']['error']==4) {
            continue;
        }
        //var_dump($_FILES);
        //traitements du formulaire des images livres  la boutique
        //verifier si l'image est bien reçu
        var_dump($_POST);
        var_dump('hé est-ce que ça passe !');
        //variable
        
        $error = 1;
        $j=0;
        $addresse=[];
        //verifier si la taille de l'image est correcte
        if ($_FILES['nom_image']['size']<=3000000) {
            //recupérer les information de l'image(nom,extension ,etc) pour le stocker dans la variable $informatiosImage
            $informatiosImage= pathinfo($_FILES['nom_image']['name']);
            //recupérer l'extension de l'image  pour le stocker dans la variable $extensionImage
            $extensionImage =$informatiosImage['extension'];
            $extensionArray = array('png','gif','jpeg','jpg');
            if (in_array($extensionImage, $extensionArray)) {
                
                $addresse = './uploads/'.time().rand().rand().'.'.$extensionImage;
                
                //var_dump($addresse);
                $nb= move_uploaded_file($_FILES['nom_image']['tmp_name'], $addresse);
                $error=0;
                if ($nb) {
                    $id_image = $_POST["num"];
                    $nom_image=$_FILES['nom_image']['name'];
                    $texteReq="UPDATE image  SET nom_image= :nom_image WHERE id_image=:id_image";
                    $req = MonPdo::getInstance()->prepare($texteReq);
                    $req-> setFetchMode(PDO::FETCH_OBJ);// attention pas de fetch_class car les colonnes ne correspondent pas à un objet auteur
                    
                    $req->bindParam(':id_image', $id_image);
                    $req->bindParam(':nom_image', $addresse);
                    $req->execute();
                }
            }
        }

    }
    if (!empty($_POST['num'])&& !empty($_POST['modifier'])) {
        var_dump($_POST);
        $num= $_POST['num'];
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
        $texteReq = "UPDATE info_projets  SET categorie= :categorie,client= :client,date_projet= :date_projet,url= :url,text= :text,legend =:legend
                WHERE id_projets= :id_projets";
                $req = MonPdo::getInstance()->prepare($texteReq);
                $req->setFetchMode(PDO::FETCH_OBJ);// attention pas de fetch_class car les colonnes ne correspondent pas à un objet auteur
                $req->bindParam(':id_projets', $num);
                $req->bindParam(':categorie', $categorie);
                $req->bindParam(':client', $client);
                $req->bindParam(':date_projet', $date_projet);
                $req->bindParam(':url', $url);
                $req->bindParam(':text', $text);
                $req->bindParam(':legend', $legend);
                $nb=$req->execute();
                $message = "modifié";
            }
            
            header('location: distr.php?uc=projet&action=listProjet');
            exit();
        break;
        }
        if($nb==1){
            $_SESSION['message']=["success"=>"le projet à bien été $message"];
            
        }
        else {
            $_SESSION['message']=["success"=>"le projet n\'a pas été $message"];
            
        }

        header('location: distr.php?uc=projet&action=miseAjour');
        exit();
    break;
}

?>