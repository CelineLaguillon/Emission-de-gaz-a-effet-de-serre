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
			$requete="SELECT nom FROM $tables ";
			$resultat=mysqli_query($connexion,$requete);
			
	}
?>
		<head>
			<meta charset='UTF-8'>
			<link rel='stylesheet' href='style.css'/>
		</head>

		<body>
			<div id='global'>
			<h1> Compléter ce court formulaire : </h1>
			<form method='post'>
			<label for='nom'>Nom du Bilan : </label>
			<input type='text' name='nom' id='nom'  placeholder='Ex : global' size='30' maxlength='10' required>
			
			<label for='etablissement'> Etablissement : </label><br>
			<select name = 'etablissement'>
				<option value="">Etablissement à choisir</option>
				<?php
					while(!is_null($ligne=mysqli_fetch_row($resultat))){
						
						echo "<option value=$ligne[0]>$ligne[0]</option>";
					}
				?>
			</select>
			<br>
			<label for='Periode'>Période : </label>
			<input type='text' name='Periode' id='Periode'  placeholder='Ex : 2018-2019' size='30' maxlength='11' required>
			
			<input type='submit' name='enregistrer' value='Enregistrer ce Bilan' required>
			</form>
			<?php
				if(isset($_POST['nom']) && $_POST['etablissement']!=""){
					$tables="bilan_carbone";
					$requete="INSERT INTO $tables (Nom,Etablissement,Periode) VALUES ('{$_POST['nom']}','{$_POST['etablissement']}','{$_POST['Periode']}') ";
					$resultat=mysqli_query($connexion,$requete);
				}
				else{
					echo "Il faut choisir un établissement";
				}



			mysqli_close($connexion);
			?>
			<form method='post' action='accueil.php'>
			<input type='submit' name='envoyer' value='Revenir à la page précédente' >
			</form>
			
			</div>
		</body>
</html>
