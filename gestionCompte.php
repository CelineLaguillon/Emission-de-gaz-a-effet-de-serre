<?php
/*
Permet de creer un compte pour acceder aux bilans avec un login et un mot de passe
@param $connexion connexion au serveur
@return $resultat le nouveau compte avec son login et son mot de passe
*/
function creation_compte($connexion){
	if(isset($_POST['login'],$_POST['mdp'])){
		$tables="utilisateur";
		$requete="INSERT INTO $tables VALUES ('{$_POST['login']}','{$_POST['mdp']}') ";
		$resultat=mysqli_query($connexion,$requete);
		return mysqli_fetch_row($resultat);
	}
	//si echec de la creation
	else{
		if(isset($_POST['enregistrer'])){
			echo "Echec de la création du compte";
		}
	}
}

/*
Permet de modifier le mot de passe d'un compte deja existant. Il faut entrer le nouveau mot de passe et le confirmer
@param  $connexion connexion au serveur
*/
function modification_compte($connexion){
	if(isset($_POST['login'],$_POST['mdp'])){
		$tables="utilisateur";
		$requete="UPDATE $tables SET mdp='{$_POST['mdp']}'where login='{$_POST['login']}' ";
		$resultat=mysqli_query($connexion,$requete);
	}
	
	//si echec de la modification	
	else{
		if(isset($_POST['modifier'])){
			echo "Echec de la mise à jour du compte";
		}
	}

}

/*
Permet de supprimer un compte deja existant.
@param  $connexion connexion au serveur
*/
function supression_compte($connexion){
	if(isset($_POST['login'],$_POST['mdp'])){
		$tables="utilisateur";
		$requete="DELETE FROM $tables WHERE login='{$_POST['login']}',mdp='{$_POST['mdp']}' ";
		$resultat=mysqli_query($connexion,$requete);
	}
	
	//si echec de la suppression
	else{
		if(isset($_POST['supprimer'])){
			echo "Echec de la suppression du compte";
		}
	}
}


?>