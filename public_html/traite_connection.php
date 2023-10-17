<?php
session_start();

if(isset($_SESSION['connect'])){
	header('location: projets.php');
	exit();
}

require('./monPDO.php');

// CONNEXION
if(!empty($_POST['email']) && !empty($_POST['password'])){

	// VARIABLES
	$email 		= $_POST['email'];
	$password 	= $_POST['password'];
	$error		= 1;

	// CRYPTER LE PASSWORD
	$password = "aq1".sha1($password."1254")."25";

	echo $password;

	$req = MonPdo::getInstance()->prepare('SELECT * FROM users WHERE email = :email');
	$req->setFetchMode(PDO::FETCH_ASSOC);
        $req->bindParam(':email',$email);
        $req->execute();
	while($user = $req->fetch()){

		if($password == $user['password']){
			$error = 0;
			$_SESSION['connect'] = 1;
			$_SESSION['pseudo']	 = $user['pseudo'];

			if(isset($_POST['connect'])) {
				setcookie('log', $user['secret'], time() + 365*24*3600, '/', null, false, true);
			}

			header('location: projets.php?success=1');
			exit();
		}

	}

	if($error == 1){
		header('location: connection.php?error=1');
		exit();
	}

}

