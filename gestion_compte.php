<?php
	require("fonction.php");
	
	// session_start();
	// if(!isset($_SESSION["id"])){
			// header("Location: index.php");
	// }
?>
<html>
	<?php
		haut("accueil.php");
	?>
	<h1>Gestion du compte</h1>
	
	<div id="gestionCompte">
		<form method="post" action="action.php">
			<div id = "login">
				<label for="login">Nom d'utilisateur</label>
				<input type="text" name="login" id="inputBilan" required>
			</div>
			
			<div id = "motDePasse">
				<label for="mdp">Mot de passe</label>
				<input type="password" name="mdp" id="inputBilan" required>
			</div>
			
			<div id = "confirmation">
				<label for="mdp">Confirmation du mot de passe</label>
				<input type="password" name="mdp" id="inputBilan" required>
			</div>
			<input type="submit" id = "inputBilan" name="envoyer" value="Mettre à jour les informations" required>
		</form>
	</div>