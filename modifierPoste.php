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
		<h1>Modifier le poste</h1>
		
		<div id='formulaire'>
			<form method='post'>
				<label for='nom'>Nom du poste</label>
				<?php
				$info=poste_recuperation($connexion,$_GET['bilan']);
				echo "<input type='text' name='nom' id='nom'  value=$info[0] size='30' maxlength='10' required>";
				?>
				<br>
				<label for='Periode'>Période</label>
				<?php
				echo "<input type='text' name='Periode' id='Periode'  value=$info[1] size='30' maxlength='11' required>";
				?>
				<input type='submit' name='enregistrer' value='Enregistrer ce poste' required>
			</form>
		</div>	
			
		<?php
			modification_poste($connexion);
			mysqli_close($connexion);
		?>
	</body>
</html>
