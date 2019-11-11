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
			
			<form method='post' action='mesBilans.php'>
				<input type='submit' id="precedent" name='envoyer' value='Revenir à la page précédente' >
			</form>
			
			<form method='post'>
				<input type='submit' id = "deconnexion" name='deconnecter' value='Se deconnecter' required>
			</form>
		</head>
		<body>
			<div id='global'>
				<h1>Vos bilans de gaz à effet de serre</h1>
				<a href = "creerBC.php" id = "creer">
					<img src="Images/creer.png" width="75" height="75">
				</a>
				<br>
				<?php
					affichage_bilan($connexion);
					mysqli_close($connexion);
				?>
				
				<!-- A faire dans la fonction d'affichage -->
				<a href = "bilanN.php">
					Bilan 1 de l'IUT de Vélizy de l'année scolaire 2018-2019
				</a>
				
				<a href = "fonction.php" id="modifier">
					<img src="Images/modifier.png" width="50" height="50">
				</a>
				
				<a href = "fonction.php" id = "supprimer">
					<img src="Images/supprimer.png" width="50" height="50">
				</a>
			</div>
		</body>
</html>
