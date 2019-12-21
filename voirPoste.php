<html>
	
	<?php
		require("fonction.php");
		haut("accueil.php");
	?>
	<body>
<?php
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
?>
	
	<h1>Mes postes</h1>
	<form method='post'>
		<a href = "creerPoste.php" id = "creer">
			<img src="Images/creer.png">
		</a>
		<?php
			//affichage_poste($connexion);
			mysqli_close($connexion);
		?>
	</form>
	
	<div id="poste">
	<h2>Catégorie 1</h2>
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
	<h2>Catégorie 2</h2>
	<table border = "1" cellspacing = "10" cellpadding = "10">
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
	<h2>Catégorie 3</h2>
	<table border = "1" cellspacing = "10" cellpadding = "10">
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
	</div>
	
	<?php
		if(isset($_POST['nom']) && isset($_POST['enregistrer'])){
			ajout_poste($connexion);
		}
	?>
	</body>
</html>