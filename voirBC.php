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
		
		<script src="js/script.js"></script>
		
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
		
		<div id = "afficherBC">
			<?php
				affichage_bilan($connexion);
			?>
		</div>
		
		<div id = "modifierBilan">
			<a class = 'fermer' onclick = 'fermerFenetre()'>
				Fermer
			</a>
			<h1>Modifier le bilan</h1>
			<div class = "formulaire">
				<form method = 'post'>
					<label for = "nom">Nom du bilan</label>
					<?php
					$info = bilan_recuperation($connexion, $_GET['bilan']);
					
					echo "<input type='text' name='nom' id='nom'  value='$info[0]' size='30' maxlength='10' required>";
					?>
					<br>
					<label for = "periode">Période</label>
					<?php
					echo "<input type='text' name='periode' id='periode'  value='$info[1]' size='30' maxlength='11' required>";
					?>
					<input type='submit' class = "enregistrer" name='enregistrer' value='Enregistrer' required>
				</form>
				
				<?php
					modification_bilan($connexion);
					mysqli_close($connexion);
				?>
			</div>
		</div>
		
		<div id = "creerBilan">
			<a class = 'fermer' onclick = 'fermerFenetre()'>
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
				?>
			</div>
		</div>
	</body>
</html>
