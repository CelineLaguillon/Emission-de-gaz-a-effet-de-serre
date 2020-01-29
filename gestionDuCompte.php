<?php
	require("fonction.php");
	
	session_check();
	if(!$connexion=connexion()){
			die();	
				
		}
?>

<html>
	<head>
		<meta charset='UTF-8'>
				
		<link rel="stylesheet" href="css/style.css">
		<link rel="stylesheet" href="css/bilan_poste.css">
		
		<title>
			Gestion du compte
		</title>
	</head>
	
	<header>
		<?php
			navigation();
		?>
	</header>
	
	<body>
		<h1>Gestion du compte</h1>
		
		<div class = "formulaire">
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
		
		<div class = "supprimer">
			<input type="submit" id = "supprimerCompte" name="supprimerCompte" value="Supprimer le compte">
		</div>
	</body>
</html>