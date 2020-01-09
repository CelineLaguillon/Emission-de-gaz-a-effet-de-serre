<?php
	require("fonction.php");
	
	session_start();
	if(!isset($_SESSION["id"])){
			header("Location: index.php");
	}
?>
<html>
	<head>
		<meta charset='UTF-8'>
				
		<link rel="stylesheet" href="css/style.css">
		<link rel="stylesheet" href="css/menu.css">
		
		<title>
			Accueil
		</title>
	</head>
	
	<header>
		<div class = "icones">	
			<a class = "deconnexion" onclick = "return confirm('Souhaitez-vous quitter votre session ?');" href = "deconnexion.php">
				<img src = "Images/deconnexion.png" title = "Déconnexion" alt = "Déconnexion">
			</a>
		</div>
	</header>

	<body>
		<h1>Accueil</h1>
		
		<div id = "menu">
			<section class = "sous-menu">
				<a href="voirBC.php">
					<img src="Images/voirBC.png" alt="Voir les bilans"/>
				</a>
			</section>
			
			<section class = "sous-menu">
				<a href="gestionDuCompte.php">
					<img src="Images/parametres.png" alt="Gestion du compte"/>
				</a>
			</section>
		</div>
	</body>
</html>
