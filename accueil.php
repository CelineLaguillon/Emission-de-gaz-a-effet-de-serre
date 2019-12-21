<?php
	require("fonction.php");
	
	session_start();
	if(!isset($_SESSION["id"])){
		header("Location: index.php");
	}
?>
<html>
	<?php
		haut_accueil();
	?>

	<body>
		<h1>Accueil</h1>
			
		<div id = "menu">
			<div id="voirBilan">
				<a href="voirBC.php">
					<img src="Images/voirBC.png" alt="Voir les bilans" title="Voir les bilans"/>
				</a>
			</div>
				
			<div id="compte">
				<a href="gestion_compte.php">
					<img src="Images/parametres.png" alt="Gestion du compte" title="Gestion du compte"/>
				</a>
			</div>
			
			
		</div>
	</body>
</html>
