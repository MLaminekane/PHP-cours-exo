<?php
/*
    ecrire un algo qui permet de generer un nombre entre -10 et 10 puis determine et affiche son signe
*/
    define("Min", -10);
    define("Max", 10);
    $nombre = rand(Min, Max);
    if ($nombre > 0){
        echo($nombre." est positif(+)");
    }elseif($nombre == 0){
        echo($nombre."est num");
    }else{
        echo($nombre." est negatif(-)");
    }
?>