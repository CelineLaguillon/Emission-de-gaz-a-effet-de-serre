<html>
	<?php
		require("fonction.php");
		session_start();
		if(!isset($_SESSION["id"])){
				header("Location: formulaire.php");
		}
		
		haut_02("voirPoste.php");
	?>
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