<?php
	function ajout_Poste($connexion){
		echo "<form method='post' action='actionPoste.php?bilan=".$_GET['bilan']."'>";
		echo "<div class = 'select'>";
		echo "<select name='ajout_Poste'>";
		$tables="poste";
		$requete="SELECT Nom FROM $tables where bilan='{$_GET['bilan']}'";
		$posteExistantRequete=mysqli_query($connexion,$requete);
		$tables="poste_info";
		$requete="SELECT Nom FROM $tables ";
		$posteDispo=mysqli_query($connexion,$requete);
		$posteExistant=[];
		while(!is_null($ligne=mysqli_fetch_row($posteExistantRequete))){
			$posteExistant[]=$ligne[0];
		}
		while(!is_null($ligne=mysqli_fetch_row($posteDispo))){
			$existe=false;
			foreach ($posteExistant as $value) {
				if($value==$ligne[0]){
					$existe=true;
					break;
				}
			}
			if(!$existe){
				echo "<option value=$ligne[0]>$ligne[0]</option>";
			}
		}
	
		echo "</select>";
		echo "</div>";
		echo "
			<div class = 'ajout'>
				<input type='submit' name='ajout' value = 'Ajout du poste'>
			</div>";
		echo "</form>";
	}



	function affichage_Poste($connexion,$type){
		$requete="SELECT pi.Categorie,p.Nom,pi.Unite,pi.Facteur,p.Quantite FROM poste as p INNER JOIN poste_info as pi ON p.Nom=pi.Nom WHERE bilan='{$_GET['bilan']}'and pi.type='{$type}' ";
		$posteExistant=mysqli_query($connexion,$requete);
		$total=0;
		while(!is_null($ligne=mysqli_fetch_row($posteExistant))){
			
			echo "<tr>";
			echo "<td>$ligne[0]</td>";
			echo "<td>$ligne[1]</td>";
			echo "<td>$ligne[2]</td>";
			echo "<td>$ligne[3]kgCO2/$ligne[2]</td>";
			echo "<td><input type='number' value='$ligne[4]' name ='$ligne[1]'></td>";
			$emission=$ligne[3]*$ligne[4];
			$total=$total + $emission;
			echo "<td>$emission kgCO2</td>";
			echo "</tr>";						
		}
		echo "<tr>";
			echo "<td></td>";
			echo "<td></td>";
			echo "<td></td>";
			echo "<td></td>";
			echo "<td>Total : </td>";
			echo "<td>$total kgCO2</td>";
		return $total;
	}
?>