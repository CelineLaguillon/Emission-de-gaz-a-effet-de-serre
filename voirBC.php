<html>
	<?php
		require("fonction.php");
		session_start();
		if(!isset($_SESSION["id"])){
				header("Location: formulaire.php");
		}
		if(!$connexion=connexion()){
			die();
		}
		
		haut("accueil.php");
	?>
		
		<body>
			<div id = "bilans">
				<h1>Vos bilans de gaz à effet de serre</h1>
				<a href = "creerBC.php" id = "creer">
					<img src="Images/creer.png" title="Créer un bilan">
				</a>
			<?php
				affichage_bilan($connexion);
				mysqli_close($connexion);
			?>
			</div>
		</body>
</html>
