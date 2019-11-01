<html>
<head>
		<meta charset='UTF-8'>
		<link rel='stylesheet' href='style.css'/>
	</head>
	<body>
		<div id='global'>
<?php
	require("parametres.php");
	session_start();
	if(!isset($_SESSION["id"])){
			header("Location: formulaire.php");
	}
	if($connexion=mysqli_connect($serveur,$login,$mdp)){
			mysqli_select_db($connexion,$bd)
			or die("Impossible d'accèder à la base de données");
			echo "<h1>Les Postes : </h1>";
			$tables="POSTE";
			$requete="SELECT Nom,Quantite,Facteur FROM $tables where Bilan='{$_GET['bilan']}'";
			$resultat=mysqli_query($connexion,$requete);
					while(!is_null($mesposte=mysqli_fetch_row($resultat))) {
						echo "$mesposte[0] $mesposte[1] $mesposte[2]";
					}
			
	}
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
						$requete="INSERT INTO $tables VALUES('{$_POST['nom']}','{$_GET['bilan']}','{$_POST['consommation']}','{$_POST['facteur']}')";
						$resultat=mysqli_query($connexion,$requete);
					}



					?>



					<form method='post' action='accueil.php'>
					<input type='submit' name='envoyer' value='Revenir à la page précédente' >
					</form>
		</div>			


	</body>

</html>