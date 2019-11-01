<html>
<?php
	require("parametres.php");
	session_start();
	if(!isset($_SESSION["id"])){
			header("Location: formulaire.php");
	}
	if($connexion=mysqli_connect($serveur,$login,$mdp)){
			mysqli_select_db($connexion,$bd)
			or die("Impossible d'accèder à la base de données");
			$tables="LIAISON";
			$requete="SELECT Etablissement FROM $tables where Utilisateur='{$_SESSION['id']}'";
			$resultat=mysqli_query($connexion,$requete);
			
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
				while(!is_null($ligne=mysqli_fetch_row($resultat))){
					echo "<h2>$ligne[0]</h2>";
					$tables="bilan_carbone";
					$requete="SELECT id,nom,Periode FROM $tables where Etablissement='{$ligne[0]}'";
					$bilan=mysqli_query($connexion,$requete);
					while(!is_null($mesBilans=mysqli_fetch_row($bilan))) {
						echo "<a href=\"poste.php?bilan=$mesBilans[0]\"><h3>$mesBilans[1]  $mesBilans[2]<h3></a><br>";

					}
				}

			mysqli_close($connexion);
			?>
			<form method='post' action='accueil.php'>
			<input type='submit' name='envoyer' value='Revenir à la page précédente' >
			</form>
				
			</div>
		</body>
	}
	
</html>
