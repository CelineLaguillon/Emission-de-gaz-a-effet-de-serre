<html>
<?php
	require("fonction.php");
	session_start();
	if(!isset($_SESSION["id"])){
			header("Location: formulaire.php");
	}
	if(!$connexion=connexion()){
		die();
	}
?>
		<head>
			<meta charset='UTF-8'>
			<link rel='stylesheet' href='style.css'/>
			
			<form method='post' action='accueil.php'>
				<input type='submit' id="precedent" name='envoyer' value='Revenir à la page précédente' >
			</form>
			
			<form method='post' action='deconnexion.php'>
				<input type='submit' id = "deconnexion" name='deconnecter' value='Se deconnecter' required>
			</form>
		</head>
		<body>
			<div id='global'>
				<h1>Vos bilans de gaz à effet de serre</h1>
				<a href = "creerBC.php" id = "creer">
					<img src="Images/creer.png" width="75" height="75">
				</a>
				<?php
					affichage_bilan($connexion);
					mysqli_close($connexion);
				?>
			</div>
		</body>
</html>
