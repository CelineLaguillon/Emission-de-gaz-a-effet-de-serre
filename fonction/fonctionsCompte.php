<?php
/*
Permet de creer un compte pour acceder aux bilans avec un login et un mot de passe
@param $connexion connexion au serveur
*/
function creation_compte($connexion){
	if(isset($_POST['login'],$_POST['mdp'])){
		$tables="utilisateur";
		$requete="INSERT INTO $tables VALUES ('{$_POST['login']}','{$_POST['mdp']}')";
		$resultat=mysqli_query($connexion,$requete);
		ajout_etablissement($connexion);
	}
	//si echec de la creation
	else{
		if(isset($_POST['enregistrer'])){
			echo "Echec de la création du compte";
		}
	}
}

//creerEtablissement
		function ajout_etablissement($connexion){
			$tables="etablissement";
			$requete="INSERT INTO $tables VALUES ('{$_POST['lieu']}')";
			$resultat=mysqli_query($connexion,$requete);
			$tables="liaison";
			$requete="INSERT INTO $tables VALUES('{$_POST['login']}','{$_POST['lieu']}')"; 
			$resultat=mysqli_query($connexion,$requete);
		}

/*
Permet de modifier le mot de passe d'un compte deja existant. Il faut entrer le nouveau mot de passe et le confirmer
@param  $connexion connexion au serveur
*/
function modification_compte($connexion){
	if(isset($_POST['mdp'],$_POST['envoyer'])){
		$tables="utilisateur";
		$requete="UPDATE $tables SET mdp='{$_POST['mdp']}'where login='{$_SESSION['id']}' ";
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


?>
