<?php
	
	require("fonction/fonction.php");
	
	session_check();
	if(!$connexion=connexion()){
		die();
	}
	$table="poste";
	if(isset($_POST['ajout'])){
		$choix=$_POST['ajout_Poste'];
		$requete="INSERT INTO $table(Nom,Bilan) VALUES('{$choix}','{$_GET['bilan']}')";
		$resultat=mysqli_query($connexion,$requete);
		
	}

	if(isset($_POST['valider'])){
		foreach ($_POST as $key => $value) {
			if($value==$_POST['valider']){
				continue;
			}
			$requete="UPDATE $table SET Quantite='{$value}' where nom='{$key}' and bilan='{$_GET['bilan']}'";
			$resultat=mysqli_query($connexion,$requete);
		}

	}
	header("Location:voirPoste.php?bilan=".$_GET['bilan']);



?>
