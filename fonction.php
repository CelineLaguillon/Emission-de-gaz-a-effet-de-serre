<html>
	<head>
		<meta charset='UTF-8'>
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
		
		function session_check(){
			session_start();
			if(!isset($_SESSION["id"])){
				header("Location: index.php");
			}
		}
		
		//voirBC
		function affichage_bilan($connexion){
			$tables="liaison";
			$requete="SELECT Etablissement FROM $tables where Utilisateur='{$_SESSION['id']}'";
			$resultat=mysqli_query($connexion,$requete);
			while(!is_null($ligne=mysqli_fetch_row($resultat))){
				echo "
					<div class = 'titre'>
						<h2 class = 'etablissement'>$ligne[0]</h2>
						<a class = 'creer' onclick = 'creerBilan()'>
							<img src='Images/creer.png' alt='Créer un bilan' title='Créer un bilan'>
						</a>
					</div>
					";
				$tables="bilan_carbone";
				$requete="SELECT id,nom,Periode FROM $tables where Etablissement='{$ligne[0]}'";
				$bilan=mysqli_query($connexion,$requete);
				while(!is_null($mesBilans=mysqli_fetch_row($bilan))) {
					echo "
						<div class = 'bilan'>
							<a class = 'nom-bilan' href='voirPoste.php?bilan=$mesBilans[0]'>
								<h3>
									$mesBilans[1] $mesBilans[2]
								</h3>
							</a>
					
							<div class = 'actions'>			
								<a class = 'action' onclick = 'modifierBC($mesBilans[0])' alt = 'Modifier le bilan' id = 'modifier' title = 'Modifier le bilan'>
									<img src='Images/modifier.png' alt='Modifier le bilan' title='Modifier le bilan'>
								</a>
											
								<a class = 'action' href = 'supprimer.php?bilan=$mesBilans[0]' alt = 'Supprimer le bilan' id = 'supprimer' title = 'Supprimer le bilan'>
									<img src='Images/supprimer.png' alt='Supprimer le bilan' title='Supprimer le bilan'>
								</a>
							</div>
						</div>";
				}
			}
		}
		
		//voirPoste
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
			echo "Action réussie"; // Faire des vraies vérifications, avertir si echec
		}
		//creerbilan
		function choix_etablissement($connexion){
			$tables="liaison";
			$requete="SELECT etablissement FROM $tables ";
			$resultat=mysqli_query($connexion,$requete);
			return mysqli_fetch_row($resultat);
		}
		function insertion_bilan($connexion){
			if(isset($_POST['nom']) && $_POST['nom']!="" ){
				$tables="bilan_carbone";
				$etablissement=choix_etablissement($connexion)[0];
				$requete="INSERT INTO $tables (Nom,Etablissement,Periode) VALUES ('{$_POST['nom']}','$etablissement','{$_POST['periode']}') ";
				$resultat=mysqli_query($connexion,$requete);
			}
			else{
				if(isset($_POST['enregistrer'])){
					echo "Echec de la création de bilan";
				}
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
		
		function suppression_bilan($connexion){
		   if(isset($_GET['bilan'])){
		   		$table="poste";
		   		$requete="DELETE FROM $table WHERE bilan='{$_GET['bilan']}'";
		   		$resultat=mysqli_query($connexion,$requete); // Vérification à faire
		        $table="bilan_carbone";
			    $requete="DELETE FROM $table WHERE id='{$_GET['bilan']}'";
			    $resultat=mysqli_query($connexion,$requete);
		    } 
		}
		
		function navigation(){
			echo "
				<nav> 
					<ul id = 'menu1'>					
						<li>
							<a href = 'http://www.iut-velizy-rambouillet.uvsq.fr/' title = \"Lien vers le site de l'IUT de Vélizy\">
								<img class = 'logo_IUT' src = 'Images/Logo.png' alt = \"Logo de l'IUT de Vélizy\">
							</a>
						</li>
					</ul>
						
					<ul id = 'menu2'>
						<li class = 'droite'>
							<a href = 'voirBC.php'>
								Mes bilans
							</a>
						</li>

						<li class = 'droite'>
							<a href = 'gestionDuCompte.php'>
								Gestion du compte
							</a>
						</li>
						
						<li class = 'droite'>
							<a class = 'deconnexion' onclick = \"return confirm('Souhaitez-vous quitter votre session ?');\" href = 'deconnexion.php'>
								<img class = 'icone_deconnexion' src = 'Images/deconnexion.png' alt = 'Déconnexion' title = 'Déconnexion'>
							</a>
						</li>
					</ul>
				</nav>";
		}
	?>
</html>
