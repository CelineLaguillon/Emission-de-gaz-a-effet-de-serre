<html>
<?php
	require("parametres.php");
	function sanitizeString($var) {
		if(get_magic_quotes_gpc())   //si activée magic ajoute des apostrophes avec des barres obliques
		  $var = stripslashes($var); //enlève les barres obliques indésirables     
		$var = htmlentities($var);   // enlève toute balise html
		return $var;
	}
	if(isset($_POST["login"])){
		if($connexion=mysqli_connect($serveur,$login,$mdp)){
			mysqli_select_db($connexion,$bd)
			or die("Impossible d'accèder à la base de données");
			$tables="UTILISATEUR";
			$login=$_POST["login"];
			$mdp=$_POST["mdp"];
			$requete="SELECT login FROM $tables where login='$login'";
			$resultat1=mysqli_query($connexion,$requete);
			$requete="SELECT login,mdp FROM $tables where login='$login' and mdp='$mdp'";
			$resultat2=mysqli_query($connexion,$requete);

			if(mysqli_num_rows($resultat1)>0){
				$verification=mysqli_fetch_row($resultat2);
				if($_POST["login"]==$verification[1]){
					session_start();
					$_SESSION["id"]=$_POST['login'];
					header("Location: accueil.php");
				}
			}



			
		}

	}
	print_r($_POST);
	//header("Location: formulaire.php?id=1");
?>