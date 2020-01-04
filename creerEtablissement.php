<html>
	<?php
		require("fonction.php");
		session_check();
		if(!$connexion=connexion()){
			die();	
		}
	?>
	
	<head>
		<?php
			haut_accueil();
		?>
		<title>
			Créer un établissement
		</title>
	</head>
	
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
