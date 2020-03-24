<?php
	require("fonction/fonction.php");
	require("fonction/fonctionsCompte.php");
	require("fonction/fonctionsAdmin.php");
	session_check();
	if(!$connexion=connexion()){
		die();	
	}

	$compte=$_SESSION['compte'.$_GET['compte']];
	$table='utilisateur';
	$requete="SELECT * FROM $table WHERE login='{$compte}'";
	$resultat=mysqli_query($connexion,$requete);
	$ligne=mysqli_fetch_row($resultat);
	$mdp=$ligne[1];


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
			navigationAdmin();
		?>
	</header>
	
	<body>
		<h1>Gestion du compte</h1>
		
		<div class = "formulaire">
			<form method="post">
				<label for="login">Login</label>
				<?php
				echo '<input type="text" name="Login" value="'.$compte.'" required>';
				?>
				<label for="mdp">Ancien Mot de passe</label>
				<input type="password" name="mdp" required>
				<label for="confirm_mdp">Nouveau Mot de passe</label>
				<input type="password" name="confirm_mdp" required>

				<input type="submit" name="envoyer" value="Mettre à jour les informations" required>
			</form>
		
		<?php
		if(isset($_POST['envoyer'])){
			if($_POST['mdp']==$mdp){
				modification_compteAdmin($connexion,$compte);
			}
			else {
				echo '<span style="color:red;">ERREUR lors de la modification de mot de passe</span>';
			}
		}
		?>
		</div>
		<div class = "supprimer">
			<?php
				echo "<a id = 'supprimerCompte' onclick = 'return confirm('Souhaitez-vous quitter votre session ?');' href = \"supprimer_compteAdmin.php?compte=".$compte."\">";
			?>
				Supprimer le compte
			</a>
		</div>
	</body>
</html>
