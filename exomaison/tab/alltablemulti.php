<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
<table align="center" border='1' width="100%">
<?php
$num = 12;
for($i = 1; $i <= 10; $i++)
{	
    echo "<tr>";
	for($j =1; $j <= $num; $j++){
		$tablecomplet = ($i * $j);
		echo "<td>$j x $i = $tablecomplet </td>";
	}
	echo "<tr/>";
}
?>
</table>
</body>
</html>
