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
		</head>
		<body>
			<div id='global'>
			<h1> Vos Bilan à gaz à effet de serre : </h1> <br>
			<?php
				affichage_bilan($connexion);

					mysqli_close($connexion);
			?>
			<form method='post' action='accueil.php'>
			<input type='submit' name='envoyer' value='Revenir à la page précédente' >
			</form>
				
			</div>
		</body>
</html>
