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
		<div id='global'>
			<h1>Menu</h1>
			
			<div id = "menu">
				<table cellspacing = "10" cellpadding = "15">
					<tr>
						<td>
							<a href="voirBC.php">
								<img src="Images/voirBC.jpg" alt="Voir les bilans"/>
							</a>
						</td>
						
						<td>
							<a href="creerEtablissement.php">
								<img src="Images/etablissement.jpg" alt="Créer un établissement"/>
							</a>
						</td>
					</tr>
					
					<tr>
						<td>
							<a href="voirPoste.php">
								<!-- Gestion du compte -->
								<img src="Images/parametres.png" alt="Gestion du compte"/>
							</a>
						</td>
					</tr>
				</table>
			</div>
			
			<?php
				if (isset($_POST['deconnecter'])){
					session_unset();
					session_destroy();
				
					header("Location: index.php");
				}
			?>
		</div>
	</body>
</html>
