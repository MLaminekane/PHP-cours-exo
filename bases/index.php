<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <style type="text/css">
        h1{
            color: red;
        }
    </style>
</head>
<body>

    <h1>Premiere Page</h1>
    <?php

        define ("pi", 3.14);
        $x = 2;
        var_dump($x);
        echo("<br>");

        $x = true;
        var_dump($x);
        echo("<br>");

        $x = "bonjour";
        var_dump($x);
        echo("<br>");

        $a = 2;
        $b = 5;
        echo ("la valeur de a est de: ".$a);
        echo("<br>");
        echo($b."est la valeur de b");
        echo("<br>");
        echo($a."+".$b. "=".($a+$b));
    ?>
</body>
</html>