<?php
	require("fonction/fonction.php");
	require("fonction/fonctionsAdmin.php");
	session_check();
	if($_SESSION['id']!='admin'){
		header("Location:index.php");
	}
	if(!$connexion=connexion()){
		die();	
	}
?>

<html>
	<head>
		<meta charset='UTF-8'>
				
		<link rel="stylesheet" href="css/style.css">
		<link rel="stylesheet" href="css/bilan_poste.css">
		<link rel="stylesheet" href="css/creer_modifierBC.css">
		
		<title>
			Liste des comptes
		</title>
	</head>
	
	<header>
		<?php
			navigationAdmin();
		?>
	</header>
	
	<body>
		<h1>Liste des comptes</h1>

		<div class = 'titre'>
			<h2 class = 'etablissement'>Liste de tous les comptes</h2>
		</div>
		<?php
			$table='utilisateur';
			$requete="SELECT login FROM $table";
			$compteur=0;
			$resultat=mysqli_query($connexion,$requete);
			while(!is_null($ligne=mysqli_fetch_row($resultat))){
				$_SESSION['compte'.$compteur]=$ligne[0];
				echo "
				<div class = 'bilan'>
					<a>
					<h3 class = 'titreBilan'>
						$ligne[0]
					</h3>
					</a>
					<div class = 'actions'>
						<a class = 'action' href = 'gestionDuCompteAdmin.php?compte=$compteur' alt = 'Modifier ou supprimer le Compte' id = 'modifier' title = 'Modifier ou supprimer le Compte'>
							<img src='Images/modifier.png' alt='Modifier ou supprimer le Compte' title='Modifier ou supprimer le Compte'>
						</a>
					</div>
				</div>";
				$compteur+=1;
			}

		?>
		
	
	</body>
</html>
