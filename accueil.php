<?php
	require("fonction.php");
	
	session_start();
	if(!isset($_SESSION["id"])){
			header("Location: index.php");
	}
?>
<html>
	<head>
		<?php
			haut_accueil();
		?>
		<title>
			Accueil
		</title>
	</head>

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
