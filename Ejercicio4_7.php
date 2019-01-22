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
$abrir_fotos=opendir("fotos");
if($abrir_fotos){	
	echo "<table>";
	echo "<tr>";
	$i=0;
	while(false !== $foto=readdir($abrir_fotos)){
		if($foto!="." && $foto!=".."){
			if($i==4){
				$i=0;
				echo "</tr>";
				echo "<tr>";
					
			}
			$i++;
			echo "<td>";
			echo "<a href=fotos/&foto><img src=fotos/&foto></a>";
			echo "</td>";
		}
	}

	echo "</tr>";
	
	echo "</table>";
	closedir($abrir_fotos);

}
?>	
</body>
</html>

