<html>
<?php
	require("fonction.php");
	session_check();

	if(!$connexion=connexion()){
		die();
	}

	haut_02("voirBC.php");
?>
		<body>
			<h1>Créer un bilan</h1>
			<div id='formulaire'>
				<form method='post'>
					<label for = "nom">Nom du bilan</label>
					<input type='text' name='nom' id='nom'  placeholder='Global' size='30' maxlength='30' required>
					<br>
					<label for = "periode">Période</label>
					<input type='text' name='periode' id='periode'  placeholder='2018-2019' size='30' maxlength='11' required>
					
					<input type='submit' id = 'enregistrer' name='enregistrer' value='Enregistrer' required>
				</form>
				
				<?php
					insertion_bilan($connexion);
					mysqli_close($connexion);
				?>
			</div>
		</body>
</html>
