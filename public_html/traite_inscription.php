<?php
session_start();

require("./monPDO.php");
 
	if(!empty($_POST['pseudo']) && !empty($_POST['email']) && !empty($_POST['password']) && !empty($_POST['password_confirm'])){
 
		// VARIABLE
 
		$pseudo       = $_POST['pseudo'];
		$email        = $_POST['email'];
		$password     = $_POST['password'];
		$pass_confirm = $_POST['password_confirm'];
 
		// TEST SI PASSWORD = PASSWORD CONFIRM
 
		if($password != $pass_confirm){
				header('Location: inscription.php?error=1&pass=1');
					exit();
 
		}
 
		// TEST SI EMAIL UTILISE
		$req = MonPdo::getInstance()->prepare("SELECT count(*) as numberEmail FROM users WHERE email =:email");
        $req->setFetchMode(PDO::FETCH_ASSOC);
        $req->bindParam(':email',$email);
        $req->execute();
		while($email_verification = $req->fetch()){
			if($email_verification['numberEmail'] != 0) {
				header('location: inscription.php?error=1&email=1');
				exit();
 			}
		}
 
		// HASH
 		$secret = sha1($email).time();
		$secret = sha1($secret).time().time();
 
		// CRYPTAGE DU PASSWORD
		
 		$password = "aq1".sha1($password."1254")."25";
 
        // ENVOI DE LA REQUETE
        $texteReqs="INSERT INTO users(pseudo, email, password, secret) VALUES(:pseudo,:email,:password,:secret)";
 		 $req = MonPdo::getInstance()->prepare($texteReqs);
         $req->setFetchMode(PDO::FETCH_ASSOC);
         $req->bindParam(':pseudo',$pseudo);
         $req->bindParam(':email',$email);
         $req->bindParam(':password',$password);
         $req->bindParam(':secret',$secret);
         $value = $req->execute();
		header('location: connection.php?success=1');
		exit();
 
 	}
?>