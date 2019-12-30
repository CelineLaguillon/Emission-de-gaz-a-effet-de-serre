<html>
	<?php
		require("fonction.php");
		session_check();
		if(!$connexion=connexion()){
			die();
		}
		
		haut("accueil.php");
	?>
		
		<body>
			<div id='global'>
				<div id = "titre">
					<h1>Vos bilans de gaz à effet de serre</h1>
					<a href = "creerBC.php" id = "creer">
						<img src="Images/creer.png">
					</a>
				</div>
				<?php
					affichage_bilan($connexion);
					mysqli_close($connexion);
				?>
			</div>
		</body>
</html>
