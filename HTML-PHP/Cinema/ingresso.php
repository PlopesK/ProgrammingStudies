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
	<h1><center>Compra dos Ingressos</center></h1>
	<br><br><br>
	<fieldset>
		<form name="form1" method="POST" action="cinema.php">
			<p class="card2">
				<br><br>	
				Ingressos inteiros (R$20 cada um):<br><br>
				<input type="text" name="ingressoint" placeholder="Digite o seu número de ingressos inteiros ..."><br><br><br>
					
				Ingressos de meia entrada (R$15 cada um):<br><br>
				<input type="text" name="ingressomeio" placeholder="Digite o seu número de ingressos(meia) ..."><br><br><br>
				
				Escolha o filme que você deseja ver : <br><br>
				<input type="radio" name="filme" value="Vu">Vingadores Ultimato<br>
				<input type="radio" name="filme" value="Pa">Pantera Negra<br>
				<input type="radio" name="filme" value="HF">Homem de Ferro<br>
				<input type="radio" name="filme" value="NM">No limite do amanhã<br>
				<input type="radio" name="filme" value="CM">Como Treinar o seu Dragão<br><br><br><br>
				
				<a href="combo.php">
					<input type="button" value="Próximo">
				</a>
				&nbsp;&nbsp;&nbsp; &nbsp;&nbsp;&nbsp;  &nbsp;&nbsp;&nbsp;
				<input type="reset" value="Limpar"><br><br><br>
			</p>
		</form>
	</fieldset>
	</div>
  </body>
</html>