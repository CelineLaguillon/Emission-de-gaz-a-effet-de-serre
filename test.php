<?php
require('fonction.php');
$log=connexion();
$tables="liaison";
$requete="SELECT etablissement FROM liaison WHERE Utilisateur='user' ";
$resultat=mysqli_query($log,$requete);
$resulat=mysqli_fetch_row($resultat);
echo $resulat[0];
?>


