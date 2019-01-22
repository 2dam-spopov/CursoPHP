<style>
	.resultado{
		color:blue;
		font-weight: bold;
		font-size: 48px;
	}
</style>


<?php
if(isset($_POST["button"])){
	$numero1=$_POST["num1"];
	$numero2=$_POST["num2"];
	$operacion=$_POST["operacion"];
	
	calcular($operacion,$numero1,$numero2);
	
}
function calcular($operacion,$numero1,$numero2){
	if(!strcmp("Suma",$operacion)){
		$resultado=$numero1+$numero2;
		echo "<p class='resultado'>El resultado es: $resultado </p>";
	}
}

	
?>	