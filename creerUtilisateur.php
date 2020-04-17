<html>
	<?php
		require("fonction/fonction.php");
		require("fonction/fonctionsCompte.php");
	?>
	
	<head>
		<meta charset='UTF-8'>
				
		<link rel="stylesheet" href="css/style.css">
		<link rel="stylesheet" href="css/index.css">
		
		<title>
			Connexion
		</title>
	</head>

	<body>
		<div id = "logo">
			<img id = "logo_accueil" src = "Images/Logo.png" alt = "Logo de l'IUT de Vélizy-Villacoublay" title = "IUT de Vélizy"/>	
		</div>
		
		<div id = "formulaire">			
			<div id = "creer_compte">	
				<form method="post">					
					<?php
						if(isset($_POST['envoyer'])){
							$connexion = connexion();
							$table="utilisateur";
							$requete="SELECT login FROM $table WHERE login='{$_POST['login']}'";
							$resultat=mysqli_query($connexion,$requete);
							
							if(mysqli_num_rows ($resultat)>0){
								echo "<p><font color='#cd2906'>Ce nom d'utilisateur existe déjà</font></p>";
							}
							
							else if($_POST["confirm_mdp"] != $_POST["mdp"]){
								echo "<p><font color='#cd2906'>Les mots de passe sont différents</font></p>";
							}
							
							else{
								$table="etablissement";
								$requete="SELECT * FROM $table WHERE Nom='{$_POST['lieu']}' ";
								$resultat=mysqli_query($connexion,$requete);
								if(mysqli_num_rows ($resultat)>0){
									echo "<p><font color='#cd2906'>Cet établissement est déjà représenté</font></p>";
								}
								else{
									creation_compte($connexion);
									header("Location:index.php");
								}
							}
						}
					?>
					<label for="login">Nom d'utilisateur</label>
					<input id = "index" type="text" name="login" id="login" required>

					<label for="mdp">Mot de passe</label>
					<input id = "index" type="password" name="mdp" id="mdp" required>
					
					<label for="confirm_mdp">Confirmation du mot de passe</label>
					<input id = "index" type="password" name="confirm_mdp" id="mdp" required>
					
					<label for="lieu">Etablissement</label>
					<input id = "index" type="text" name="lieu" id="lieu" required>
					<input type="submit" id = "creation" name="envoyer" value="Créer le Compte">
				</form>
				
				<a href = "index.php">Retour</a>
			</div>
		</div>
	</body>
</html>
