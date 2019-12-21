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

	haut_03("voirBC.php");
?>
		<body>
			<div id='bilans'>
				<h1>Créer un bilan</h1>
				<form method='post'>
					<label for = "nom">Nom du bilan</label>
					<input type='text' name='nom' id='inputBilan'  placeholder='Exemple : Global' size='30' maxlength='30' required>
					
					<label for = "etablissement">Etablissement</label><br>
					<div class='select'>
					<select name = 'etablissement' id = 'nom_fichier'>
						<option value="">Choisir un établissement</option>
						<?php
							choix_etablissement($connexion);
						?>
					</select>
					</div>
					<br>
					<label for = "periode">Période</label>
					<input type='text' name='Periode' id='inputBilan'  placeholder='Exemple : 2018-2019' size='30' maxlength='11' required>
					
					<input type='submit' name='enregistrer' id='inputBilan' value='Enregistrer' required>
				</form>
				<?php
					insertion_bilan($connexion);
					mysqli_close($connexion);
				?>
			</div>
		</body>
</html>
