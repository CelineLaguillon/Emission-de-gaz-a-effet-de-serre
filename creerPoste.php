<html>
<?php
	session_start();
	if(!isset($_SESSION["id"])){
			header("Location: formulaire.php");
	}
?>
		<head>
			<meta charset='UTF-8'>
			<link rel='stylesheet' href='style.css'/>
			
			<form method='post' action='accueil.php'>
				<input type='submit' id="precedent" name='envoyer' value='Revenir à la page précédente' >
			</form>
			
			<form method='post'>
				<input type='submit' id = "deconnexion" name='deconnecter' value='Se deconnecter' required>
			</form>
		</head>

		<body>
			<div id='global'>
			<h1> Compléter ce court formulaire : </h1>
			<form method='post' action='accueil.php'>
			<label for='nom'>Nom : </label>
			<input type='text' name='nom' id='nom'  placeholder='Ex : Electricité' size='30' maxlength='10' required>
			
			<label for='nom'>Facteur : </label>
			<input type='text' name='facteur' id='facteur'  placeholder='Ex : 1.2' size='30' maxlength='10' required>
			
			<label for='nom'>Consommation : </label>
			<input type='text' name='consommation' id='consommation'  placeholder='Ex : 1100kW' size='30' maxlength='10' required>
			
			<input type='submit' name='enregistrer' value='Enregistrer ce Bilan' required>
			</form>
			
			<form method='post' action='accueil.php'>
			<input type='submit' name='envoyer' value='Revenir à la page précédente' >
			</form>
			
			</div>
		</body>
</html>
