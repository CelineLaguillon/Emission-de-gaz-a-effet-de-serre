<html>
	<head>
		<meta charset="UTF-8">
		<link rel="stylesheet" href="style.css"/>
	</head>

	<body>
		<div id="global">
			<h1>Page de connexion</h1>
			
			<form method="post" action="action.php">
				<label for="login">Login : </label>
				<input type="text" name="login" id="login" required>
				<br><br>

				<label for="mdp">Mot de passe : </label>
				<input type="password" name="mdp" id="mdp" required>
				<br><br>

				<input type="submit" id = "connexion" name="envoyer" value="Se connecter" required>
			</form>
			
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
