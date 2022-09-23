<?php
	// lembrar que a diferente de 0
  header('Content-Type: text/html; charset=ISO-8859-1');

  $A = $_POST ['A'];
  $B = $_POST ['B'];
  $C = $_POST ['C'];

	$A_Fracao = $_POST ['A_Fracao'];
  $B_Fracao = $_POST ['B_Fracao'];
  $C_Fracao = $_POST ['C_Fracao'];

	if($A_Fracao == null) $A_Fracao = 1;
	if($B_Fracao == null) $B_Fracao = 1;
	if($C_Fracao == null) $C_Fracao = 1;

	$Conta_A = $A/$A_Fracao;
	$Conta_B = $B/$B_Fracao;
	$Conta_C = $C/$C_Fracao;

	if ($Conta_A != 0)
	{
		$D = pow($Conta_B, 2) - 4 * $Conta_A * $Conta_C;

		echo "x =<u>-b ± √Δ</u><br>";
		echo "&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;2a<br>";
    if($D > 0)
    {
      $R_1 = (-$Conta_B + sqrt($D))/(2*$Conta_A);
      $R_2 = (-$Conta_B - sqrt($D))/(2*$Conta_A);
  		echo "Raiz 1 = $R_1<br>";
  		echo "Raiz 2 = $R_2<br>";
    }
    else if($D == 0)
    {
      $R = (-$Conta_B + sqrt($D))/(2*$Conta_A);
      echo "Raiz = $R<br>";
    }
    else
    {
      echo "A raiz nao pertence ao conjunto dos numeros reais. <br>";
    }
	}
	else
	{
		echo 'Impossível realizar conta do segundo grau, pois A está igual a 0.';
	}
?>
