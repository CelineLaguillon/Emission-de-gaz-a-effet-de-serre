<?php
require("fonction/fonctionsSuppression.php");
	function suppression_CompteAdmin($connexion,$compte){
		$table="liaison";
		$requete="SELECT Etablissement FROM $table WHERE utilisateur='{$compte}'";

		$resultat=mysqli_query($connexion,$requete);
		$Etablissement=mysqli_fetch_row($resultat)[0];

		$table="bilan_carbone";
		$requete="SELECT id FROM $table WHERE Etablissement='{$Etablissement}'";

		$bilans=mysqli_query($connexion,$requete);
		while(!is_null($bilan=mysqli_fetch_row($bilans))) {
			suppression_Bilan($connexion,$bilan[0]);
		}
		suppression_EtablissementAdmin($connexion,$Etablissement,$compte);
		$table="utilisateur";
		$requete="DELETE FROM $table WHERE login='{$compte}' ";

		$resultat=mysqli_query($connexion,$requete);

	}
	function suppression_EtablissementAdmin($connexion,$Etablissement,$compte){
		$table="liaison";
		$requete="DELETE FROM $table WHERE utilisateur='{$compte}'";
		$resultat=mysqli_query($connexion,$requete);
		
		$table="Etablissement";
		$requete="DELETE FROM $table WHERE nom='{$Etablissement}'";
		$resultat=mysqli_query($connexion,$requete);
	}

	function modification_compteAdmin($connexion,$compte){
		if(isset($_POST['mdp'],$_POST['envoyer'])){
			$tables="utilisateur";
			$requete="UPDATE $tables SET mdp='{$_POST['mdp']}'where login='{$compte}' ";
			$resultat=mysqli_query($connexion,$requete);
			header("Location:voirBC.php");
		}
		
		//si echec de la modification	
		else{
			if(isset($_POST['modifier'])){
				echo "Echec de la mise à jour du compte";
			}
		}

	}
	function navigationAdmin(){
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
							<a href = 'voirBC.php' class = 'texte'>
								Mes bilans
							</a>
						</li>

						<li class = 'droite'>
							<a href = 'ListeCompteAdmin.php' class = 'texte'>
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