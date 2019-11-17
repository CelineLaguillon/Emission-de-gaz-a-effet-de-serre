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
			
			<form method='post' action='accueil.php'>
				<input type='submit' id="precedent" name='envoyer' value='Revenir à la page précédente' >
			</form>
			
			<form method='post' action='deconnexion.php'>
				<input type='submit' id = "deconnexion" name='deconnecter' value='Se deconnecter'>
			</form>
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
