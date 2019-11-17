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
		
		<a href = "accueil.php" id = "precedent">
			<img src="Images/precedent.png">
		</a>
	
		<a href = "deconnexion.php" id = "deconnexion">
			<img src="Images/deconnexion.png">
		</a>
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
