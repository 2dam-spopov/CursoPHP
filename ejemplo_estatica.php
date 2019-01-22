<!doctype html>
<html>
<head>
<meta charset="UTF-8">
<title>Documento sin título</title>
</head>
<?php
	
	
	function incrementaVariable(){
		static $contador=0;

		$contador++;
		echo $contador . "<br>";
	}
	incrementaVariable();
	incrementaVariable();
	echo "Hello"
?>	
<body>
</body>
</html>