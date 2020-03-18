<?php
	require("fonction/fonction.php");
	require("fonction/fonctionsSuppression.php");
	require("fonction/fonctionsCompte.php");
	
	session_check();
	if(!$connexion=connexion()){
		die();	
	}
	
	suppression_Compte($connexion);
	header("location: deconnexion.php");
?>