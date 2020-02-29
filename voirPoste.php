<html>
	<?php
		require("fonction/fonction.php");
		require("fonction/fonctionsPoste.php");
		session_check();
		if(!$connexion=connexion()){
			die();
		}
	?>
	
	<head>
		<meta charset='UTF-8'>
				
		<link rel="stylesheet" href="css/style.css">
		<link rel="stylesheet" href="css/bilan_poste.css">
		<link rel="stylesheet" href="css/poste.css">
		<link rel="stylesheet" href="css/tableau.css">
		
		<title>
			Mes bilans
		</title>
	</head>
	
	<header>
		<?php
			navigation();
		?>
	</header>
	
	<body>
		<h1>
			<?php
			$table="bilan_carbone";
			$requete="Select nom,Periode from $table where id='{$_GET['bilan']}'";
			$resultat=mysqli_query($connexion,$requete);
			$ligne=mysqli_fetch_row($resultat);
			echo "Les postes de gaz à effets de serre<br> $ligne[0] - $ligne[1]";
			?>
			
		</h1>
		
		<div id = "afficherPoste">
			<div id="ajoutPoste">
				<?php
					ajout_Poste($connexion);
				?>
			</div>
			<?php
				echo "<form method='post' action='actionPoste.php?bilan=".$_GET['bilan']."'>";
			?>
				<table>
						<tr>
							<th>Catégorie</th>
							<th>Poste</th>
							<th>Unité</th>
							<th>Facteur d'émission</th>
							<th>Valeur</th>
						</tr>

						
						<?php
							$type=["Sources fixes","Energie","Immobilisations","Materiel","Déplacements","Déchets"];
							
							foreach($type as $value) {
								echo "<tr>";
								echo "<td colspan='5'>$value</td>";
								echo "</tr>";
								affichage_Poste($connexion,$value);
							}
							
						?>
				</table>

				<input type='submit' name='valider' class = 'valider' value='Valider le bilan' />
				<input type='reset' class = 'valider' value='Annuler' />
			</form>
		</div>
	</body>
</html>
