<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
<body>
    <form method="POST">
        Entrer un nomber: 
        <input type="text" name="nombre">
    </form>
</body>
</html>
  
<?php
if($_POST) {
    $num = $_POST["nombre"];
    echo ("<p>table de $num: </p>");
    for ($i = 1; $i <= 10; $i++) {
        echo ("<p>$num". " X " . "$i" . " = " . $num * $i . "</p>");
    }
}
?>
