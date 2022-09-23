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
		<h1><center>Reserva da sala</center></h1>
		<br><br><br>
		<fieldset>
		<form name="form1" method="POST" action="cinema.php">
			<p class="card2">
				<br><br>
				Insira os dados de sua reserva :
				<br><br>
				<input type="text" name="nome" placeholder="Digite o seu Nome..."><br><br>
				<input type="text" name="cpf" placeholder="Digite o seu CPF..."><br><br>
						
				<br>Escolha o dia da sua reserva:<br><br>
				<input type="date" name="data" min="2000-28-31" max="2045-12-31"><br><br><br><br>
						
				Escolha o Horário da sessão:<br><br>
				<input type="time" name="horario"><br><br><br>
				
				Ingressos inteiros (R$20 cada um):<br><br>
				<input type="text" name="IngressoInt" placeholder="Digite o seu número de ingressos inteiros ..."><br><br><br>
					
				Ingressos de meia entrada (R$15 cada um):<br><br>
				<input type="text" name="IngreMeio" placeholder="Digite o seu número de ingressos(meia) ..."><br><br><br><br>
				
				Escolha o filme que você deseja ver : <br><br>
				<input type="radio" name="Filme" value="Vingadores Ultimato">Vingadores Ultimato<br>
				<input type="radio" name="Filme" value="Pantera Negra">Pantera Negra<br>
				<input type="radio" name="Filme" value="Homem de Ferro">Homem de Ferro<br>
				<input type="radio" name="Filme" value="No limite do amanhã">No limite do amanhã<br>
				<input type="radio" name="Filme" value="Como Treinar o seu Dragão">Como Treinar o seu Dragão<br><br><br><br>
					
				Escolha o seu combo:<br><br><br>
				<input type="radio" name="combo" value="Combo para 1 pessoa (R$15)"> Combo para 1 pessoa (R$15) <br><br>
				<input type="radio" name="combo" value="Combo para 2 pessoas (R$25)"> Combo para 2 pessoas (R$25) <br><br>
				<input type="radio" name="combo" value="Combo para 3 pessoas (R$40)"> Combo para 3 pessoas (R$40) <br><br>
				<input type="radio" name="combo" value="Combo Família (R$50)"> Combo Família (R$50) <br><br>
				<input type="radio" name="combo" value="Combo VIP para 1 pessoas (R$30)"> Combo VIP para 1 pessoas (R$30) <br><br>
				<input type="radio" name="combo" value="Combo VIP para 2 pessoas (R$50)"> Combo VIP para 2 pessoas (R$50) <br><br>
				<input type="radio" name="combo" value="Combo VIP para 3 pessoas (R$80)"> Combo VIP para 3 pessoas (R$80) <br><br>
				<input type="radio" name="combo" value="Combo VIP Família  (R$100)"> Combo VIP Família  (R$100) <br><br><br><br>
				
				<a href="cinema.php">
					<input type="button" value="Enviar">
				</a>
				&nbsp;&nbsp;&nbsp; &nbsp;&nbsp;&nbsp;  &nbsp;&nbsp;&nbsp;
				<input type="reset" value="Limpar"><br><br><br>
			</p>
		</form>
		</fieldset>
	</div>
  </body>
</html>
