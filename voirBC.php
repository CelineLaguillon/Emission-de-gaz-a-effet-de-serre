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
				mysqli_close($connexion);
			?>
		</div>
	</body>
</html>
