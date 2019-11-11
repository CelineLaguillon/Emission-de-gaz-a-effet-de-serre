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
				<h1>Créer un bilan</h1>
				<form method='post'>
					<label for = "nom">Nom du bilan : </label>
					<input type='text' name='nom' id='nom'  placeholder='Exemple : Global' size='30' maxlength='10' required>
					
					<label for = "etablissement">Etablissement : </label><br>
					<select name = 'etablissement'>
						<option value="">Choisir un établissement</option>
						<?php
							choix_etablissement($connexion);
						?>
					</select>
					<br>
					<label for = "periode">Période : </label>
					<input type='text' name='Periode' id='Periode'  placeholder='Exemple : 2018-2019' size='30' maxlength='11' required>
					
					<input type='submit' name='enregistrer' value='Enregistrer ce Bilan' required>
				</form>
				<?php
					insertion_bilan($connexion);
					mysqli_close($connexion);
				?>
			</div>
		</body>
</html>
