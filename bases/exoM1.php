<?php
/*
exo1: ecrire un algo qui permet de generer 3 valeurs entiers entre -10 et 10
    puis les trie dans l'ordre croissant et dans l'ordre decroissant 
*/
define("Min", -10);
define("Max", 10);
$x = rand(Min, Max);
$y = rand(Min, Max);
$n = rand(Min, Max);

if ($x < $y){
    $max = $x;
    $min = $y;
    $n = $y - 1;
    echo("croissant: ".$max." ".$n." ".$min);
}else{
    $max = $y;
    $min = $x;
}
echo("decroissant: ".$min." ".$n." ".$max);

?>