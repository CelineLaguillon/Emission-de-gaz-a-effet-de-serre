<?php
	session_start();
	if(!isset($_SESSION["id"])){
			header("Location: formulaire.php");
	}
?>

<html>
	<head>
		<meta charset='UTF-8'>
		<link rel='stylesheet' href='style.css'/>
		
		<form method='post' action='voirBC.php'>
			<input type='submit' id="precedent" name='envoyer' value='Revenir à la page précédente' >
		</form>
		
		<form method='post'>
			<input type='submit' id = "deconnexion" name='deconnecter' value='Se deconnecter' required>
		</form>
	</head>
	<body>
		<div id='global'>
			<h1>Nom du bilan sélectionné</h1>
			<h2>Catégorie 1</h2>
			<p>A compléter</p>
			<h2>Catégorie 2</h2>
			<p>A compléter</p>
			<h2>Catégorie 3</h2>
			<p>A compléter</p>
		</div>
	</body>
</html>
