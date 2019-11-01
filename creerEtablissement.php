<html>
<?php
	require("parametres.php");
	session_start();
	if(!isset($_SESSION["id"])){
			header("Location: formulaire.php");
	}
	if($connexion=mysqli_connect($serveur,$login,$mdp)){
			mysqli_select_db($connexion,$bd)
			or die("Impossible d'accèder à la base de données");
			$tables="ETABLISSEMENT";
			
			
	}
?>
		<head>
			<meta charset='UTF-8'>
			<link rel='stylesheet' href='style.css'/>
		</head>

		<body>
			<div id='global'>
			<h1> Ajout d'un etablissement: </h1>
			<form method='post' >
			<label for='nom'>Nom : </label>
			<input type='text' name='nom' id='nom'  placeholder='Ex : IUT_VELIZY' size='30' maxlength='10' required>
			<input type='submit' name='enregistrer' value='Enregistrer cet établissement' required>
			</form>
			<?php
			if(isset($_POST['nom']) && $_POST['nom']!=""){
				$requete="INSERT INTO $tables VALUES ('{$_POST['nom']}')";
				$resultat=mysqli_query($connexion,$requete);
				$tables="LIAISON";
				$requete="INSERT INTO $tables VALUES('{$_SESSION['id']}','{$_POST['nom']}')"; 
				// doit ajouter la possibilité de lier un utilisateur à un établissement déja existant.
				$resultat=mysqli_query($connexion,$requete);
				echo "Action réussie"; // Faire des vrai vérifications, avertir si echec
				mysqli_close($connexion); 
			}
			?>
			<form method='post' action='accueil.php'>
			<input type='submit' name='envoyer' value='Revenir à la page précédente' >
			</form>
			
			</div>
		</body>
</html>
