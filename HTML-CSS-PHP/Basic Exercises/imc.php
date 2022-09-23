<?php
	$peso = $_POST ['peso'];
	$altura = $_POST ['alt'];
	$imc = round($peso/pow($altura, 2),2);
	echo "IMC: $imc <br>";
	if ($imc < 18.5)
	{
		echo "Abaixo do peso. <br>";
	}
	else if ($imc >= 18.5 && $imc < 25)
	{
		echo "Peso normal. <br>";	
	}
	else if ($imc >= 25 && $imc < 30)
	{
		echo "Acima do peso. <br>";	
	}
	else
	{
		echo "Obeso. <br>";	
	}
?>