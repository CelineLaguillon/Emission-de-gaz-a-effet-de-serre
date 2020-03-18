<?php
	function suppression_Bilan($connexion,$bilan){
		$table="poste";
		$requete="DELETE FROM $table WHERE bilan='{$bilan}'";
		$resultat=mysqli_query($connexion,$requete);
		$table="bilan_carbone";
		$requete="DELETE FROM $table WHERE id='{$bilan}'";
		$resultat=mysqli_query($connexion,$requete);
	}

	function suppression_Compte($connexion){
		$table="liaison";
		$requete="SELECT Etablissement FROM $table WHERE utilisateur='{$_SESSION['id']}'";
		$resultat=mysqli_query($connexion,$requete);
		$Etablissement=mysqli_fetch_row($resultat)[0];

		$table="bilan_carbone";
		$requete="SELECT id FROM $table WHERE Etablissement='{$Etablissement}'";
		$bilans=mysqli_query($connexion,$requete);
		while(!is_null($bilan=mysqli_fetch_row($bilans))) {
			suppression_Bilan($connexion,$bilan[0]);
		}
		suppression_Etablissement($connexion,$Etablissement);
		$table="utilisateur";
		$requete="DELETE FROM $table WHERE login='{$_SESSION['id']}' ";
		$resultat=mysqli_query($connexion,$requete);

	}

	function suppression_Etablissement($connexion,$Etablissement){
		$table="liaison";
		$requete="DELETE FROM $table WHERE utilisateur='{$_SESSION['id']}'";
		$resultat=mysqli_query($connexion,$requete);
		
		$table="Etablissement";
		$requete="DELETE FROM $table WHERE nom='{$Etablissement}'";
		$resultat=mysqli_query($connexion,$requete);
	}

?>