<html>
	<?php
		require("fonction/fonction.php");
		
		session_check();
		if(!$connexion=connexion()){
			die();	
				
		}
	?>
	
	<head>
		<meta charset='UTF-8'>
				
		<link rel="stylesheet" href="css/style.css">
		
		<title>
			Créer un établissement
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
		<h1>Ajouter un établissement</h1>
		<div id = "etablissement">
			<form method='post' >
				<label for='nom'>Nom de l'établissement</label>
				<input type='text' name='nom' id='nom' placeholder='Exemple : IUT_VELIZY' size='30' maxlength='10' required>
				<input type='submit' id = "enregistrer" name='enregistrer' value='Enregistrer'>
			</form>
		</div>
		<?php
			if(isset($_POST['nom']) && $_POST['nom']!=""){
				ajout_établissement($connexion);
				mysqli_close($connexion); 
			}
		?>
	</body>
</html>
