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
		<form method='post'>
			<input type='submit' id = "deconnexion1" name='deconnecter' value='Se deconnecter'>
		</form>
	</head>

	<body>
		<div id='global'>
			<h1> Voici les différents choix : </h1>
			
			<a href = "voirBC.php">Mes bilans</a><br><br>
			
			<a href="creerEtablissement.php">Ajouter un établissement</a>
			
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