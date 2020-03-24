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
			<form method="post">
				<label for="mdp">Nouveau mot de passe</label>
				<input type="password" name="mdp" required>

				<label for="confirm_mdp">Confirmation du mot de passe</label>
				<input type="password" name="confirm_mdp" required>

				<input type="submit" name="envoyer" value="Mettre à jour les informations" required>
			</form>

		<?php
		if($_POST['mdp']==$_POST['confirm_mdp']){
		modification_compte($connexion);
		}
		else{
		echo '<span style="color:red;">ERREUR : MOT DE PASSE DIFFERENT</span>';
		}
		
		?>
		</div>
		<div class = "supprimer">
			<a id = "supprimerCompte" onclick = "return confirm('Souhaitez-vous quitter votre session ?');" href = 'supprimer_compte.php'>
				Supprimer le compte
			</a>
		</div>
	</body>
</html>
