<html>
	<?php
		require("fonction.php");
		session_check();
	?>
	
	<head>
		<?php
			haut_02("voirPoste.php");
		?>
		<title>
			Créer un poste
		</title>
	</head>
	
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