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
			<h1> Compléter ce court formulaire : </h1>
			<form method='post'>
			<label for='nom'>Nom du Bilan : </label>
			<?php
			$info=bilan_recuperation($connexion,1);
			echo "<input type='text' name='nom' id='nom'  value=$info[0] size='30' maxlength='10' required>";
			?>
			<br>
			<label for='Periode'>Période : </label>
			<?php
			echo "<input type='text' name='Periode' id='Periode'  value=$info[1] size='30' maxlength='11' required>";
			?>
			<input type='submit' name='enregistrer' value='Enregistrer ce Bilan' required>
			</form>
			<?php
			modification_bilan($connexion);
			mysqli_close($connexion);
			?>
			<form method='post' action='accueil.php'>
			<input type='submit' name='envoyer' value='Revenir à la page précédente' >
			</form>
			
			</div>
		</body>
</html>
