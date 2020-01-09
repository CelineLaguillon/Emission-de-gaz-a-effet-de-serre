<html>
	<?php
		require("fonction.php");
		
		session_check();
		if(!$connexion=connexion()){
			die();	
				
		}
	?>
	
	<head>
		<meta charset='UTF-8'>
				
		<link rel="stylesheet" href="css/style.css">
		<link rel="stylesheet" href="css/bilan_poste.css">
		<link rel="stylesheet" href="css/tableau.css">
		
		<title>
			Les postes
		</title>
	</head>
	
	<header>
		<div class = "icones">
			<a href = "voirBC.php" class = "precedent">
				<img src = "Images/precedent.png" title = "Retour à la page précédente" alt = "Retour à la page précédente">
			</a>
			
			<a class = "deconnexion" onclick = "return confirm('Souhaitez-vous quitter votre session ?');" href = "deconnexion.php">
				<img src = "Images/deconnexion.png" title = "Déconnexion" alt = "Déconnexion">
			</a>
		</div>
	</header>
	
	<body>
		<?php
			function ajout_poste($connexion){
				$tables="POSTE";
				$requete="INSERT INTO $tables VALUES('{$_POST['nom']}','{$_GET['bilan']}','{$_POST['consommation']}','{$_POST['facteur']}')";
				$resultat=mysqli_query($connexion,$requete);
			}
			echo "<h1>Mes Postes</h1>";
		?>
	
		<?php
			// affichage_poste($connexion);
			mysqli_close($connexion);
		?>
		
		<h2 class = "titrePoste">Catégorie 1</h2>
		<table>
			<tr>
				<th>Nom</th>
				<th>Quantité</th>
				<th>Unité</th>
				<th>Facteur</th>
				<th>Modifier</th>
				<th>Supprimer</th>
			<tr>
			<tr>
				<td>
					Nom_01
				</td>
				<td>
					Quantité_01
				</td>
				<td>
					Unité_01
				</td>
				<td>
					Facteur_01
				</td>
				<td class = "image">
					<a href = "modifierPoste.php" id = "modifierPoste">
						<img src="Images/modifier.png">
					</a>
				</td>
				<td>
					<a href = "supprimerPoste.php" id = "supprimerPoste">
						<img src="Images/supprimer.png">
					</a>
				</td>
			</tr>
		</table>
		
		<h2 class = "titrePoste">Catégorie 2</h2>
		<table>
			<tr>
				<th>Nom</th>
				<th>Quantité</th>
				<th>Unité</th>
				<th>Facteur</th>
				<th>Modifier</th>
				<th>Supprimer</th>
			<tr>
			<tr>
				<td>
					Nom_01
				</td>
				<td>
					Quantité_01
				</td>
				<td>
					Unité_01
				</td>
				<td>
					Facteur_01
				</td>
				<td>
					<a href = "modifierPoste.php" id = "modifierPoste">
						<img src="Images/modifier.png">
					</a>
				</td>
				<td>
					<a href = "supprimerPoste.php" id = "supprimerPoste">
						<img src="Images/supprimer.png">
					</a>
				</td>
			</tr>
		</table>
		<h2 class = "titrePoste">Catégorie 3</h2>
		<table>
			<tr>
				<th>Nom</th>
				<th>Quantité</th>
				<th>Unité</th>
				<th>Facteur</th>
				<th>Modifier</th>
				<th>Supprimer</th>
			<tr>
			<tr>
				<td>
					Nom_01
				</td>
				<td>
					Quantité_01
				</td>
				<td>
					Unité_01
				</td>
				<td>
					Facteur_01
				</td>
				<td>
					<a href = "modifierPoste.php" id = "modifierPoste">
						<img src="Images/modifier.png">
					</a>
				</td>
				<td>
					<a href = "supprimerPoste.php" id = "supprimerPoste">
						<img src="Images/supprimer.png">
					</a>
				</td>
			</tr>
		</table>	
	</body>
</html>