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
		<link rel="stylesheet" href="css/menu.css">
		
		<title>
			Accueil
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
		<h1>Créer un poste</h1>
		<form method='post' action='accueil.php'>
		<label for = "nom">Nom</label><br>
		<select name = 'nom_poste'>
			<option value="">Choisir un nom</option>
			<?php
				choix_poste($connexion);
			?>
		</select>
		<br>
		
		<label for='nom'>Facteur</label>
		<input type='text' name='facteur' id='facteur'  placeholder='Ex : 1.2' size='30' maxlength='10' required>
		
		<label for='nom'>Consommation</label>
		<input type='text' name='consommation' id='consommation'  placeholder='Ex : 1100kW' size='30' maxlength='10' required>
		
		<input type='submit' name='enregistrer' value='Enregistrer ce Bilan' required>
		</form>
	</body>
</html>