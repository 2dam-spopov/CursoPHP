<!doctype html>
<html>
<head>
<meta charset="UTF-8">
<title>Documento sin título</title>
	<style>
		table,td{
			border-collapse: collapse;
			border: green 1px solid;
			padding: 20px;
		}
		
	</style>
</head>

<body>
<?php
	
echo "<table>";
$variable=1;
for ($variable1=1; $variable1<=10; $variable1++){
	echo "<tr>";
	for ($variable2=1; $variable2<=10; $variable2++){
		echo "<td>$variable</td>";
		$variable+=1;
	}
	echo "</tr>";
}
echo "</table>";
?>	
</body>
</html>

