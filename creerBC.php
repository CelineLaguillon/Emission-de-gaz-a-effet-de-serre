<html>
	<?php
		require("fonction/fonction.php");
		require("fonction/fonctionsBilan.php");
		session_check();
		if(!$connexion=connexion()){
			die();
		}
	?>
	
	<head>
		<meta charset='UTF-8'>
				
		<link rel="stylesheet" href="css/style.css">
		<link rel="stylesheet" href="css/bilan_poste.css">
		<link rel="stylesheet" href="css/creer_modifierBC.css">
		
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
			Mes bilans de gaz à effets de serre
		</h1>
		
		<div class = "afficherBC_02">
			<?php
				affichage_bilan($connexion);
			?>
		</div>
		
		<div id = "creerBilan">
			<a class = 'fermer' href = 'voirBC.php'>
				Fermer
			</a>
			<h1>Créer un bilan</h1>
			<div class='formulaire'>
				<form method='post'>
					<label for = "nom">Nom du bilan</label>
					<input type='text' name='nom' class='nom' id='nom'  placeholder='Global' size='30' maxlength='30' required>
					<br>
					<label for = "periode">Période</label>
					<input type='text' name='periode' class='periode' id='periode'  placeholder='2018-2019' size='30' maxlength='11' required>
					
					<input type='submit' class = 'enregistrer' name='enregistrer' value='Enregistrer' required>
				</form>
				
				<?php
					insertion_bilan($connexion);
					
					if(isset($_POST['enregistrer'])){
						echo "<script type='text/javascript'>
						window.location.href='voirBC.php';
						</script>";
					}
				?>
			</div>
		</div>
	</body>
</html>

