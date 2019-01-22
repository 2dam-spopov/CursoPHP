<!doctype html>
<html>
<head>
<meta charset="UTF-8">
<title>Documento sin título</title>
</head>
<?php
	
	$nombre="Sergio";
	function dameNombre(){
		global $nombre;
		$nombre = "María";
	}
	dameNombre();
	echo $nombre;
	
?>	
<body>
</body>
</html>