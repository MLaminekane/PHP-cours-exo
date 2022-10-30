<?php
$etoile=rand(1,10);
for ($i=0;$i<$etoile;$i++) {
    for ($j=0;$j<$i;$j++) {
        echo("*");
    }
    echo("<br>");
}

?>