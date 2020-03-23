<?php
	require("fonction/fonction.php");
	require("fonction/fonctionsCompte.php");
	require("fonction/fonctionsAdmin.php");
	session_check();
	if(!$connexion=connexion()){
		die();	
	}
	
	suppression_CompteAdmin($connexion,$_GET['compte']);
	header("location: ListeCompteAdmin.php");
?>