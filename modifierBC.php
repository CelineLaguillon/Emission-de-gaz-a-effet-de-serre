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
		
		<div id = "modifierBilan">
			<?php

			echo "<a class = 'fermer' href = 'voirBC.php?bilan=".$_GET['bilan']."'>";
			?>
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
	</body>
</html>

