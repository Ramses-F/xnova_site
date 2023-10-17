<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<title>XNOVA : Crée la solution ULTIME pour votre entreprise</title>
	<link rel="icon" type="image/png" href="/logo.png">
	<link rel="stylesheet" type="text/css" href="design/default.css">
</head>
 
<body>
	<header>
		<h1>Inscription</h1>
	</header>

	<div class="container">

		<?php
		if(!isset($_SESSION['connect'])){ ?>

		<p id="info">Bienvenue sur xnova, pour en voir plus, inscrivez-vous. Sinon, <a href="connection.php">Connectez-vous.</a></p>

		<?php
		 
			if(isset($_GET['error'])){
		 
				if(isset($_GET['pass'])){
					echo '<p id="error">Les mots de passe ne correspondent pas.</p>';
				}
				else if(isset($_GET['email'])){
					echo '<p id="error">Cette adresse email est déjà utilisée.</p>';
				}
			}
			else if(isset($_GET['success'])){
				echo '<p id="success">Inscription prise correctement en compte.</p>';
			}
		 
		?>
	 
	 	<div id="form">
			<form method="POST" action="traite_inscription.php">
				<table>
					<tr>
						<td>Pseudo</td>
						<td><input type="text" name="pseudo" placeholder="Ex : Nicolas" required></td>
					</tr>
					<tr>
						<td>Email</td>
						<td><input type="email" name="email" placeholder="Ex : example@google.com" required></td>
					</tr>
					<tr>
						<td>Mot de passe</td>
						<td><input type="password" name="password" placeholder="Ex : ********" required ></td>
					</tr>
					<tr>
						<td>Retaper mot de passe</td>
						<td><input type="password" name="password_confirm" placeholder="Ex : ********" required></td>
					</tr>
				</table>
				<div id="button">
					<button type='submit'>Inscription</button>
				</div>
			</form>
		</div>

		<?php } else { ?>
		
		<p id="info">
			Bonjour <?= $_SESSION['pseudo'] ?><br>
			<a href="disconnection.php">Déconnexion</a>
		</p>

		<?php } ?>

	</div>
</body>
</html>