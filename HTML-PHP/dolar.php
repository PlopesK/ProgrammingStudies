<?php
	$taxa= $_POST ['taxa'];
	
	$real = $_POST ['real'];
	
	$dolar = $real/$taxa;
	
	echo "$real equivale a $dolar <br>";
?>