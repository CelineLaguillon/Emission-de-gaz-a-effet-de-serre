<?php
	require("fonction/fonction.php");
	require("fonction/fonctionsSuppression.php");
	require("fonction/fonctionsCompte.php");
	session_check();
	if(!$connexion=connexion()){
			die();	
				
		}
?>

<html>
	<head>
		<meta charset='UTF-8'>
				
		<link rel="stylesheet" href="css/style.css">
		<link rel="stylesheet" href="css/bilan_poste.css">
		<link rel="stylesheet" href="css/creer_modifierBC.css">
		
		<title>
			Gestion du compte
		</title>
	</head>
	
	<header>
		<?php
			navigation();
		?>
	</header>
	
	<body>
		<h1>Gestion du compte</h1>
		
		<div class = "formulaire">
			<form method="post" >
				<label for="mdp">Mot de passe</label>
				<input type="password" name="mdp" id="inputBilan" required>

				<label for="mdp">Confirmation du mot de passe</label>
				<input type="password" name="mdp" id="inputBilan" required>

				<input type="submit" id = "inputBilan" name="envoyer" value="Mettre à jour les informations" required>
			</form>
		</div>
		
		<div class = "supprimer">
			<form method="post">
				<input type="submit" id = "supprimerCompte" name="supprimerCompte" value="Supprimer le compte">
			</form>
			<?php
				if(isset($_POST['supprimerCompte'])){
					suppression_Compte($connexion);
					header("Location:deconnexion.php");
				}

				modification_compte($connexion);

			?>
		</div>
	</body>
</html>
