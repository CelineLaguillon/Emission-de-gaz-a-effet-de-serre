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
			Créer un bilan
		</title>
	</head>
	
	<header>
		<div class = "icones">
			<a href = "voirBC.php" class = "precedent">
				<img src = "Images/precedent.png" title = "Retour à la page précédente" alt = "Retour à la page précédente">
			</a>
			
			<a class = "deconnexion" onclick = "return confirm('Souhaitez-vous quitter votre session ?');" href = "deconnexion.php">
				<img src = "Images/deconnexion.png" title = "Déconnexion" alt = "Déconnexion">
			</a>
		</div>
	</header>
	
	<body>
		<h1>Créer un bilan</h1>
		<div class='formulaire'>
			<form method='post'>
				<label for = "nom">Nom du bilan</label>
				<input type='text' name='nom' class='nom'  placeholder='Global' size='30' maxlength='30' required>
				<br>
				<label for = "periode">Période</label>
				<input type='text' name='periode' class='periode'  placeholder='2018-2019' size='30' maxlength='11' required>
				
				<input type='submit' class = 'enregistrer' name='enregistrer' value='Enregistrer' required>
			</form>
			
			<?php
				insertion_bilan($connexion);
				mysqli_close($connexion);
			?>
		</div>
	</body>
</html>
