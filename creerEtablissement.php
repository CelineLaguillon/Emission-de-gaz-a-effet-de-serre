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
			<h1> Ajout d'un etablissement: </h1>
			<form method='post' >
			<label for='nom'>Nom : </label>
			<input type='text' name='nom' id='nom'  placeholder='Ex : IUT_VELIZY' size='30' maxlength='10' required>
			<input type='submit' name='enregistrer' value='Enregistrer cet établissement' required>
			</form>
			<?php
			if(isset($_POST['nom']) && $_POST['nom']!=""){
				ajout_établissement($connexion);
				mysqli_close($connexion); 
			}
			?>
			<form method='post' action='accueil.php'>
			<input type='submit' name='envoyer' value='Revenir à la page précédente' >
			</form>
			
			</div>
		</body>
</html>
