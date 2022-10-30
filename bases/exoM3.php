<?php
/*
exo3: ecrire un algo qui permet d'afficher les valeurs entre 100 et 1.
    Sachant que chaque ligne doit contenir 5 nombres
*/

$notes = 100;
$i = 0;
while ($i < $notes) {
    $i = 0;
    if ($i < 5){
        $i++;
        echo("<br>");
    }$notes--;
    echo($notes." ");
}

echo($notes);
?>