<!doctype html>
<html>
<head>
<meta charset="UTF-8">
<title>Documento sin título</title>
	<style>
		table, td{
			border-collapse: collapse;
			border: green 2px solid;
			padding: 20px;
		}
		tr:nth-child(odd){
			background-color:lightgrey;
		}
	</style>
</head>

<body>
<?php
define("TAM",10);
echo "<table>";
$variable=1;
for ($variable1=1; $variable1<=TAM; $variable1++){
	echo "<tr>";
	for ($variable2=1; $variable2<=TAM; $variable2++){
		echo "<td>$variable</td>";
		$variable+=1;
	}
	echo "</tr>";
}
echo "</table>";
?>	
</body>
</html>

