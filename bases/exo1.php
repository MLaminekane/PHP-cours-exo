<?php
/*
ecrire un algo qui genere un nombre entre 5 et 50
puis determine et affiche si le nombre est pair ou pas
*/ 
    define("Min", 5);
    define("Max", 50);
    $nombre = rand(Min, Max);
    if ($nombre % 2 == 0){
        echo($nombre." est pair");
    }else{
        echo($nombre." est impair");
    }
?>