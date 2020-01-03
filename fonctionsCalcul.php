
<?php
/*
On implemente ici des fonctions permettant de calculer le bilan d'émission de gaz à effet de serre
A utiliser dans voirPoste.php
*/


/*
On calcule le poste d'emission sachant que emission = consommation * facteur
@param $tab tableau contenant les valeurs du poste
@return $emission l'emission d'un poste
*/
function emission($tab){
	$emission= $tab[1]*$tab[3];
	echo $emission;
}

/*
On calcule le total d'emission par categorie
@param $tab tableau contenant les valeurs du poste
@return $cat le total d'emission pour chaque categorie
*/
function total_categories($tab){
	$cat=0;
	foreach($tab as $val){
		$emission = emission($val);
		$cat+=$emission;
	}
	echo $cat;
}

/*
On calcule le bilan global
@param $tab tableau contenant les valeurs du poste
@return $total le bilan
*/
function total_global($tab1,$tab2,$tab3){
	$categorie1 = total_categories($tab1);
	$categorie2 = total_categories($tab2);
	$categorie3 = total_categories($tab3);	
	$total = $categorie1 + $categorie2 + $categorie3;
	echo $total;
	
}
?>