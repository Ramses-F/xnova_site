<?php
//require('./monPDO.php');
?>
<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<title>Connexion</title>
	<link rel="stylesheet" type="text/css" href="design/default.css">
</head>
<body>
	<header>
		<h1>Connexion</h1>
	</header>

	<div class="container">
		<p id="info">Bienvenue sur xnova si vous n'êtes pas inscrit, <a href="inscription.php">inscrivez-vous.</a></p>
	 	
		<?php
			if(isset($_GET['error'])){
				echo'<p id="error">Nous ne pouvons pas vous authentifier.</p>';
			}
			else if(isset($_GET['success'])){
				echo'<p id="success">Vous pouvez maintenant vous connecté.</p>';
			}
		?>

	 	<div id="form">
			<form method="POST" action="traite_connection.php">
				<table>
					<tr>
						<td>Email</td>
						<td><input type="email" name="email" placeholder="Ex : example@google.com" required></td>
					</tr>
					<tr>
						<td>Mot de passe</td>
						<td><input type="password" name="password" placeholder="Ex : ********" required ></td>
					</tr>
				</table>
				<p><label><input type="checkbox" name="connect" >Connexion automatique</label></p>
				<div id="button">
					<button type='submit'>Connexion</button>
				</div>
			</form>
		</div>
	</div>
</body>
</html>