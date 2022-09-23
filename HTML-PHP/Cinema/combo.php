<html lang="pt-br">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1"> 
	<link rel="stylesheet" type="text/css" href="estilo.css" /> 
	<link rel="shortcut icon" href="imagens/icone.ico" />	
	<title>Registro</title>	 
		 
	<meta charset="utf-8">
</head>
<body>
<!-- Cabeçalho -->
<div class="header">
	<img src="Icone.jpg" width="100" alt="" loading="lazy">
</div>
	
<div class="componentes2">
	<h1><center>Combos</center></h1>
	<br><br><br>
	<fieldset>
		<form name="form1" method="POST" action="cinema.php">
			<p class="card2">
				<br><br>	
				Escolha o seu combo:<br><br><br>
				<input type="checkbox" name="combo" value="C1"> Combo para 1 pessoa (R$15) <br><br>
				<input type="checkbox" name="combo" value="C2"> Combo para 2 pessoas (R$25) <br><br>
				<input type="checkbox" name="combo" value="C3"> Combo para 3 pessoas (R$40) <br><br>
				<input type="checkbox" name="combo" value="CF"> Combo Família (R$50) <br><br>
				<input type="checkbox" name="combo" value="CV1"> Combo VIP para 1 pessoas (R$30) <br><br>
				<input type="checkbox" name="combo" value="CV2"> Combo VIP para 2 pessoas (R$50) <br><br>
				<input type="checkbox" name="combo" value="CV3"> Combo VIP para 3 pessoas (R$80) <br><br>
				<input type="checkbox" name="combo" value="CVF"> Combo VIP Família  (R$100) <br><br><br><br>
				
				<a href="cinema.php">
					<input type="submit" value="Verificar">
				</a>
				&nbsp;&nbsp;&nbsp; &nbsp;&nbsp;&nbsp;  &nbsp;&nbsp;&nbsp;
				<input type="reset" value="Limpar"><br><br><br>
			</p>
		</form>
	</fieldset>
	</div>
  </body>
</html>