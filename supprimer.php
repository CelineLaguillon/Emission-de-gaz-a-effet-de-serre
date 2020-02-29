<?php
	require("fonction/fonction.php");
	suppression_bilan(connexion());
	header("Location:voirBC.php");
?>