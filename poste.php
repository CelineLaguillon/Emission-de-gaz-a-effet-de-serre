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
<?php
	require("fonction.php");
	session_start();
	if(!isset($_SESSION["id"])){
			header("Location: formulaire.php");
	}
	if(!$connexion=connexion()){
		die();	
			
	}
	function ajout_poste($connexion){
		$tables="POSTE";
		$requete="INSERT INTO $tables VALUES('{$_POST['nom']}','{$_GET['bilan']}','{$_POST['consommation']}','{$_POST['facteur']}')";
		$resultat=mysqli_query($connexion,$requete);
	}
	echo "<h1>Les Postes : </h1>";
	affichage_poste($connexion);
?>
	
			<h1> Compléter ce court formulaire : </h1>
					<form method='post'>
					<label for='nom'>Nom : </label>
					<input type='text' name='nom' id='nom'  placeholder='Ex : Electricité' size='30' maxlength='20' required>
					
					<label for='facteur'>Facteur(test) : </label>
					<input type='text' name='facteur' id='facteur'  placeholder='Ex : 1.2' size='30' maxlength='10' required>
					
					<label for='consommation'>Consommation : </label>
					<input type='text' name='consommation' id='consommation'  placeholder='Ex : 1100kW' size='30' maxlength='10' required>
					
					<input type='submit' name='enregistrer' value='Enregistrer ce Bilan' required>
					</form>
					
					<?php
					if(isset($_POST['nom']) && isset($_POST['enregistrer'])){
						ajout_poste($connexion);
					}
					?>
		</div>			
	</body>
</html>