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
			
			<a href = "accueil.php" id = "precedent">
				<img src="Images/precedent.png">
			</a>
		
			<a href = "deconnexion.php" id = "deconnexion">
				<img src="Images/deconnexion.png">
			</a>
		</head>

		<body>
			<div id='global'>
			<h1>Ajouter un établissement</h1>
			<form method='post' >
				<label for='nom'>Nom de l'établissement : </label>
				<input type='text' name='nom' id='nom'  placeholder='Exemple : IUT_VELIZY' size='30' maxlength='10' required>
				<input type='submit' id = "enregistrer" name='enregistrer' value='Enregistrer cet établissement'>
			</form>
			<?php
			if(isset($_POST['nom']) && $_POST['nom']!=""){
				ajout_établissement($connexion);
				mysqli_close($connexion); 
			}
			?>
			
			</div>
		</body>
</html>
