<?php
/*Ecrire un algo qui permet de generer deux nombres entier entre -10 et 10 puis range ces deux nombres dans l'ordre croissant*/
    define("Min", -10);
    define("Max", 10);
    $x = rand(Min, Max);
    $y = rand(Min, Max);
    if ($x < $y){
        $min = $x;
        $max = $y;
    }else{
        $min = $y;
        $max = $x;
    }
    echo("ordre croissant: ".$min. " ".$max);


?>