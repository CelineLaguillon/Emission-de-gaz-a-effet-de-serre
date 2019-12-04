<html>
	<head>
		<meta charset='UTF-8'>
		<link rel='stylesheet' href='css/style.css'/>
	</head>

	<?php
		
		function connexion(){
			require("parametres.php");
			if($connexion=mysqli_connect($serveur,$login,$mdp)){
				mysqli_select_db($connexion,$bd)
				or die("Impossible d'accèder à la base de données");
				return $connexion;
			}
		}
		
		//voirBC
		function affichage_bilan($connexion){
			$tables="liaison";
			$requete="SELECT Etablissement FROM $tables where Utilisateur='{$_SESSION['id']}'";
			$resultat=mysqli_query($connexion,$requete);
			while(!is_null($ligne=mysqli_fetch_row($resultat))){
				echo "<div id='bilan'><h2>$ligne[0]</h2>";
				$tables="bilan_carbone";
				$requete="SELECT id,nom,Periode FROM $tables where Etablissement='{$ligne[0]}'";
				$bilan=mysqli_query($connexion,$requete);
				while(!is_null($mesBilans=mysqli_fetch_row($bilan))) {
					echo "<a href=\"poste.php?bilan=$mesBilans[0]\"><h3>$mesBilans[1] $mesBilans[2]<h3></a><br>";
					
					echo "<div id = 'boutons'>";				
					echo "<a href = 'modifierBC.php?bilan=$mesBilans[0]' alt = 'Modifier le bilan' id = 'modifier' title = 'Modifier le bilan'>";
					echo "<img src='Images/modifier.png'>";
					echo "</a>";
				
					echo "<a href = 'supprimer.php?bilan=$mesBilans[0]' alt = 'Supprimer le bilan' id = 'supprimer' title = 'Supprimer le bilan'>";
					echo "<img src='Images/supprimer.png'>";
					echo "</a>";
					echo "</div>";
				}
			echo "</div>";
			}
		}
		//poste
		function affichage_poste($connexion){
			$tables="poste";
			$requete="SELECT Nom,Quantite,Facteur FROM $tables where Bilan='{$_GET['bilan']}'";
			$resultat=mysqli_query($connexion,$requete);
			while(!is_null($mesposte=mysqli_fetch_row($resultat))) {
				echo "$mesposte[0] $mesposte[1] $mesposte[2]";
			}
		}
		//creerEtablissement
		function ajout_établissement($connexion){
			$tables="etablissement";
			$requete="INSERT INTO $tables VALUES ('{$_POST['nom']}')";
			$resultat=mysqli_query($connexion,$requete);
			$tables="liaison";
			$requete="INSERT INTO $tables VALUES('{$_SESSION['id']}','{$_POST['nom']}')"; 
			// doit ajouter la possibilité de lier un utilisateur à un établissement déja existant.
			$resultat=mysqli_query($connexion,$requete);
			echo "Action réussie"; // Faire des vrai vérifications, avertir si echec
		}
		//creerbilan
		function choix_etablissement($connexion){
			$tables="etablissement";
			$requete="SELECT nom FROM $tables ";
			$resultat=mysqli_query($connexion,$requete);
			while(!is_null($ligne=mysqli_fetch_row($resultat))){
				echo "<option value=$ligne[0]>$ligne[0]</option>";
			}
		}
		function insertion_bilan($connexion){
			if(isset($_POST['nom']) && $_POST['etablissement']!=""){
				$tables="bilan_carbone";
				$requete="INSERT INTO $tables (Nom,Etablissement,Periode) VALUES ('{$_POST['nom']}','{$_POST['etablissement']}','{$_POST['Periode']}') ";
				$resultat=mysqli_query($connexion,$requete);
			}
			else{
				echo "Il faut choisir un établissement";
			}
		}

		//modifierBC
		function bilan_recuperation($connexion,$bilan){
			$tables="bilan_carbone";
			$requete="SELECT nom,Periode FROM $tables where id='$bilan'";
			$info=mysqli_fetch_row(mysqli_query($connexion,$requete));
			return $info;
		}
		function modification_bilan($connexion){
			if(isset($_POST['nom'])){
				$tables="bilan_carbone";
				$requete="UPDATE $tables SET nom='{$_POST['nom']}',Periode='{$_POST['Periode']}'where Id='{$_GET['bilan']}' ";
				$resultat=mysqli_query($connexion,$requete);
			}
		}
		//supprimer bilan
		function suppression_bilan($connexion){
		   if(isset($_GET['bilan'])){
		        $table="bilan_carbone";
			    $requete="DELETE FROM $table WHERE id='{$_GET['bilan']}'";
			    echo $requete;
			    $resultat=mysqli_query($connexion,$requete);
		    } 
		}
		
		function debut_haut(){
			echo "<head>";
			echo "<meta charset='UTF-8'>";
			echo "<link rel='stylesheet' href='css/style.css'/>";
			echo "<title>Bilan d'émission carbone</title>";
			echo "<div id = 'icones'>";
		}
		
		function fin_haut(){
			echo "</div>";
			echo "</head>";
		}
		
		function haut($ref){
			debut_haut();
			echo "<a href =".$ref." id = 'precedent' title = 'Retour à la page précédente'>";
			echo "<img src='Images/precedent.png'>";
			echo "</a>";
			echo "<a href = 'deconnexion.php' id = 'deconnexion' title = 'Déconnexion'>";
			echo "<img src='Images/deconnexion.png'>";
			echo "</a>";
			fin_haut();
		}
		
		function haut_02($ref){
			debut_haut();
			echo "<a href =".$ref." id = 'precedent' title = 'Retour à la page précédente'>";
			echo "<img src='Images/precedent.png'>";
			echo "</a>";
			fin_haut();
		}
		
		function haut_accueil(){
			debut_haut();
			// echo "<img src = 'Images/Logo.png' id = 'logo_accueil'";
			echo "<a href = 'deconnexion.php' id = 'deconnexion_accueil' title = 'Déconnexion'>";
			echo "<img src='Images/deconnexion.png'>";
			echo "</a>";
			fin_haut();
		}
	?>
</html>
