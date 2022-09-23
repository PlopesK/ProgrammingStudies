<?php
	$valor = $_POST ['valor'];
	if($valor >= 0 && $valor <= 100)
	{
		$resultado = round($valor - ($valor * 0.05), 2);
		echo "5% de desconto<br>Valor final: R$ $resultado";
	}
	else if($valor >= 101 && $valor <= 200)
	{
		$resultado = round($valor - ($valor * 0.1), 2);
		echo "10% de desconto<br>Valor final: R$ $resultado";
	}
	else if($valor >= 201 && $valor <= 500)
	{
		$resultado = round($valor - ($valor * 0.15), 2);
		echo "15% de desconto<br>Valor final: R$ $resultado";
	}
	else if($valor >= 501)
	{
		$resultado = round($valor - ($valor * 0.2), 2);
		echo "20% de desconto<br>Valor final: R$ $resultado";
	}
?>