<html>
	<head>
		<meta charset="UTF-8">
		<link rel="stylesheet" href="css/style.css"/>
	</head>

	<body>
		<div id="global">
			<img id = "logo" src = "Images/Logo.png" alt = "Logo de l'IUT de Vélizy-Villacoublay" title = "IUT de Vélizy"/>
			<div id = 'cadre'>	
				<form method="post" action="action.php">
					<div id = "login">
						<label for="login">Nom d'utilisateur</label>
						<input type="text" name="login" id="login" required>
					</div>
					
					<div id = "motDePasse">
						<label for="mdp">Mot de passe</label>
						<input type="password" name="mdp" id="mdp" required>
					</div>
					<input type="submit" id = "connexion" name="envoyer" value="Se connecter" required>
				</form>
			</div>
		</div>
	</body>

<?php
	if(isset($_GET["id"])){
		if($_GET["id"] == 1){
			echo "Échec d'authentification.";
		}
	}
?>

</html>
