<html>
	<?php
		require("fonction.php");
		session_check();
		if(!$connexion=connexion()){
			die();
		}
	?>
	
	<head>
		<?php
			haut("accueil.php");
		?>
		<title>
			Mes bilans
		</title>
	</head>
	
	<body>
		<h1>Vos bilans de gaz à effet de serre</h1>
				
		<div id = "bilans">
			<?php
				affichage_bilan($connexion);
				mysqli_close($connexion);
			?>
		</div>
	</body>
</html>