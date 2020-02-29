<?php
	require("fonction/fonction.php");
	require("fonction/fonctionsSuppression.php");
	suppression_bilan(connexion(),$_GET['bilan']);
	header("Location:voirBC.php");
?>