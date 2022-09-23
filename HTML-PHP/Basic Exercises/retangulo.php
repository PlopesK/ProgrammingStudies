<?php
	$base= $_POST ['base'];
	$altura = $_POST ['altura'];
	
	if ($base == $altura)
	    {
		    echo "Esses valores se enquadram em um QUADRADO e nao em um RETANGULO! <br>";
		}
	else
	    {
			$perimetro =($base + $altura) *2;
			$area =($base * $altura);
			
		    echo "Seus valores se enquadram em um Retangulo! <br>";
			echo "---------------------------------------------------------<br>";
			echo "Seu perimetro sera: ", $perimetro, "<br>";
			echo "---------------------------------------------------------<br>";
			echo "Enquanto sua area sera: ", $area, "<br>";
		} 	
?>