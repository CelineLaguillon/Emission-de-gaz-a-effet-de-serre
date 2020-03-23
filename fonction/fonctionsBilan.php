<?php

		//voirBC
		function affichage_bilan($connexion){
			$tables="liaison";
			if($_SESSION['id']=='admin'){
				$requete="SELECT Etablissement FROM $tables";
			}
			else{
				$requete="SELECT Etablissement FROM $tables where Utilisateur='{$_SESSION['id']}'";
			}
			
			$resultat=mysqli_query($connexion,$requete);
			while(!is_null($ligne=mysqli_fetch_row($resultat))){
				echo "
					<div class = 'titre'>
						<h2 class = 'etablissement'>$ligne[0]</h2>
						<a class = 'creer' href = 'creerBC.php'>
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
								<h3 class = 'titreBilan'>
									$mesBilans[1] $mesBilans[2]
								</h3>
							</a>
							
					
							<div class = 'actions'>
								<a class = 'action' href = 'modifierBC.php?bilan=$mesBilans[0]' alt = 'Modifier le bilan' id = 'modifier' title = 'Modifier le bilan'>
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
		//creerbilan
		function choix_etablissement($connexion){
			$tables="liaison";
			$requete="SELECT etablissement FROM $tables WHERE Utilisateur='{$_SESSION['id']}'";
			$resultat=mysqli_query($connexion,$requete);
			return mysqli_fetch_row($resultat);
		}
		function insertion_bilan($connexion){
			if(isset($_POST['nom']) && $_POST['nom']!="" ){
				$tables="bilan_carbone";
				$etablissement=choix_etablissement($connexion)[0];
				$nom=$_POST['nom'];
				$periode=$_POST['periode'];
				$requete="INSERT INTO $tables (Nom,Etablissement,Periode) VALUES ('{$nom}','{$etablissement}','{$periode}') ";
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
				$requete="UPDATE $tables SET nom='{$_POST['nom']}',Periode='{$_POST['periode']}'where Id='{$_GET['bilan']}' ";
				$resultat=mysqli_query($connexion,$requete);
				header("Location:voirBC.php");
			}
		}
		
		
		

?>
