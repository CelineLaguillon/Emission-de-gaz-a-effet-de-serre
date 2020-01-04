<html>
	<head>
		<meta charset="UTF-8">
		<link rel="stylesheet" href="css/style.css"/>
		<link rel="stylesheet" href="css/index.css"/>
		<title>Connexion</title>
	</head>

	<body>
		<div id = "accueil">
			<img id = "logo_accueil" src = "Images/Logo.png" alt = "Logo de l'IUT de Vélizy-Villacoublay" title = "IUT de Vélizy"/><br>	
			<div id = "cadre">	
				<form method="post" action="action.php">
					<?php
					        if(isset($_GET["id"])){
					                if($_GET["id"] == 1){
					                        echo "<p><font color='#cd2906'>Échec d'authentification. Veuillez réessayer.</font></p>";
					                }
					        }
					?>
					<label for="login">Nom d'utilisateur</label>
					<input id = "index" type="text" name="login" id="login" required>

					<label for="mdp">Mot de passe</label>
					<input id = "index" type="password" name="mdp" id="mdp" required>
					<input type="submit" id = "connexion" name="envoyer" value="Se connecter">
				</form>
			</div>
		</div>
	</body>
</html>