x<?php
$file="donnees2020.csv";
$fp=fopen($file,"r");

$var[]= $_POST["gaz"];
$var[]= $_POST["fioul"];
$var[]= $_POST["electricite"];
$var[]= $_POST["chauffage"];
$var[]= $_POST["parking"];
$var[]= $_POST["bureaux"];
$var[]= $_POST["locaux"];
$var[]= $_POST["garage"];
$var[]= $_POST["imprimantes"];
$var[]= $_POST["ordinateurs"];
$var[]= $_POST["photocopieuses"];
$var[]= $_POST["bus"];
$var[]= $_POST["train"];
$var[]= $_POST["moto"];
$var[]= $_POST["avion"];
$var[]= $_POST["voiture"];
$var[]= $_POST["papier"];
$var[]= $_POST["carton"];
$var[]= $_POST["plastique"];
$var[]= $_POST["dechets"];
$var[]= $_POST["combu"];

fputcsv($fp,$var,",");
fclose($fp);
header('Location:voirPoste.php?id=7');
?>
