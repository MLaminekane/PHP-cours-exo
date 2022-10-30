<?php
$etoile = rand(2,10);
for ($i=1; $i<$etoile;$i++){
    for ($j=1;$j<=$etoile-$i;$j++){
        echo("&nbsp;&nbsp;");
    }for ($k=1;$k<=$i;$k++){
        echo("*&nbsp;&nbsp;");
    }
    echo("<br>");
}
?>