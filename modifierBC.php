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
			Modifier le bilan
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
		<h1>Modifier le bilan</h1>
		<div class = "formulaire">
			<form method = 'post'>
				<label for = "nom">Nom du bilan</label>
				<?php
				$info=bilan_recuperation($connexion,$_GET['bilan']);
				echo "<input type='text' name='nom' id='nom'  value=$info[0] size='30' maxlength='10' required>";
				?>
				<br>
				<label for = "periode">Période</label>
				<?php
				echo "<input type='text' name='periode' id='periode'  value=$info[1] size='30' maxlength='11' required>";
				?>
				<input type='submit' class = "enregistrer" name='enregistrer' value='Enregistrer' required>
			</form>
			<?php
				modification_bilan($connexion);
				mysqli_close($connexion);
			?>
		</div>
	</body>
</html>
