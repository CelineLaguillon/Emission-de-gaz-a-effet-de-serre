<html>
	<?php
		session_start();
		if(!isset($_SESSION["id"])){
				header("Location: formulaire.php");
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
		</div>
	</body>
</html>
