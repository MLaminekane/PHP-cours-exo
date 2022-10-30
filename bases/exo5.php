<?php
/*ecrire un algo qui affiche toutes les valeurs pairs comprises entre 1 et N 
N est genere et est positif
*/
    define("Min", -10);
    define("Max", 10);
    do { 
        $nombre = rand(Min, Max);
    }while($nombre <= 0);
    $i = 1;
    echo($nombre."<br>");
    while ($i <= $nombre){
        if ($i % 2 ==0 ){
            echo($i. " ");
        }
        $i++;
    }

?>
