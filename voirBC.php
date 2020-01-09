<html>
	<?php
		require("fonction.php");
		
		session_check();
		if(!$connexion=connexion()){
			die();
		}
	?>
	
	<head>
		<meta charset='UTF-8'>
				
		<link rel="stylesheet" href="css/style.css">
		<link rel="stylesheet" href="css/bilan_poste.css">
		
		<title>
			Mes bilans
		</title>
	</head>
	
	<header>
		<div class = "icones">
			<a href = "accueil.php" class = "precedent">
				<img src = "Images/precedent.png" title = "Retour à la page précédente" alt = "Retour à la page précédente">
			</a>
			
			<a class = "deconnexion" onclick = "return confirm('Souhaitez-vous quitter votre session ?');" href = "deconnexion.php">
				<img src = "Images/deconnexion.png" title = "Déconnexion" alt = "Déconnexion">
			</a>
		</div>
	</header>
	
	<body>
		<h1>Vos bilans de gaz à effet de serre</h1>
				
		<div id = "bilans">
			<?php
				affichage_bilan($connexion);
				mysqli_close($connexion);
			?>
		</div>
	</body>
</html>