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
		<form method='post' action='accueil.php'>
			<input type='submit' id="precedent" name='envoyer' value='Revenir à la page précédente' >
		</form>
			
		<form method='post'>
			<input type='submit' id = "deconnexion" name='deconnecter' value='Se deconnecter' required>
		</form>
	</head>

	<body>
		<div id='global'>
			<h1> Mes bilans </h1>
			
			<a href="voirBC.php">Visualiser mes bilans</a><br><br>

			<a href = "creerBC.php">Créer un bilan</a><br><br>
			
			<?php				
				if (isset($_POST['deconnecter'])){
					session_unset();
					session_destroy();
				
					header("Location: formulaire.php");
				
				}
			?>
		</div>
	</body>
</html>