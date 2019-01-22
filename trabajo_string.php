<!doctype html>
<html>
<head>
<meta charset="UTF-8">
<title>Documento sin título</title>
	<style>
		.resaltar{
			color:red;
			font-weight: bold;
			
		}
	</style>
</head>

	
<body>
	<?php
		$nombre="Jose";
		echo "<p class =\"resaltar\">Texto de ejemplo $nombre</p>";
		$variable1="Casa";
		$variable2="CASa ";
		$resultado=strcasecmp($variable1,$variable2);
		echo "resultado: " . $resultado;
	
	?>
</body>
</html>