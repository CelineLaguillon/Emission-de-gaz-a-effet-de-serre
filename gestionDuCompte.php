<?php
	require("fonction.php");
	
	session_check();
?>
<html>
	<head>
		<?php
			haut("accueil.php");
		?>
		<title>
			Gestion du compte
		</title>
	</head>
	<h1>Gestion du compte</h1>
	
	<div id="formulaire">
		<form method="post" action="action.php">
			<label for="login">Nom d'utilisateur</label>
			<input type="text" name="login" id="connexion" required>
			
			<label for="mdp">Mot de passe</label>
			<input type="password" name="mdp" id="inputBilan" required>

			<label for="mdp">Confirmation du mot de passe</label>
			<input type="password" name="mdp" id="inputBilan" required>

			<input type="submit" id = "inputBilan" name="envoyer" value="Mettre à jour les informations" required>
		</form>
	</div>