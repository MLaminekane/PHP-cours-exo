<?php
/*
exo4: ecrire un algo qui permet de generer N notes puis determine et affiche:
    -la note la pluss petite
    -la note la plus grande 
    -la moyenne des notes
    NB: N doit etre generer et est positif 
*/
define("Min", 0);
define("Max", 20);
$x = (rand(0, 10));
$y = (rand(10, 20));
$min = $x;
$max = $y;
$sum = 0;

if ($x < $Min){
}elseif($y < $Max){
}else{
    $sum = ($x + $y) / 2;
}
echo("faible note: ".$x);
echo("<br>");
echo("grande note: ".$y);
echo("<br>");
echo("moyenne: ".$sum)

?>

