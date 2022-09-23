<?php
	$pi = 3.14;
	$altura= $_POST ['altura'];
	$raio = $_POST ['raio'];
	$volume = $pi * pow ($raio, 2) * $altura;
	echo "A area do retângulo é $volume <br>";
?>