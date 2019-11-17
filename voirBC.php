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
			
			<a href = "accueil.php" id = "precedent">
				<img src="Images/precedent.png">
			</a>
		
			<a href = "deconnexion.php" id = "deconnexion">
				<img src="Images/deconnexion.png">
			</a>
		</head>
		<body>
			<div id='global'>
				<h1>Vos bilans de gaz à effet de serre</h1>
				<a href = "creerBC.php" id = "creer">
					<img src="Images/creer.png">
				</a>
				<?php
					affichage_bilan($connexion);
					mysqli_close($connexion);
				?>
			</div>
		</body>
</html>
