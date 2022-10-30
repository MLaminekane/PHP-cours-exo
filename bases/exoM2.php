<?php
/*
exo2: ecrire un algo qui permet de generer une date puis determine et affiche si elle est valide ou pas.
 Une date est caracterise par son jour, son mois et son annee qui sont des entiers 
*/
$j = (rand(1,31));
$m = (rand(1,12));
$a = (rand(1, 2999));

if ($j < 1 || $j > 31){
	echo(" invalide");
}elseif($m < 1 || $m > 12){
	echo(" invalide");
}elseif($a < 1 ){
		echo(" invalide");
}elseif
echo("la date est: ".$j."/".$m."/".$a)



?>
