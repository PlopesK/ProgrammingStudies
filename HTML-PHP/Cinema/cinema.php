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
	<h1><center>Reserva da sala</center></h1><br>
	<br><br><br>
	
	<?php

	  $nome = $_POST['nome'];
	  $cpf = $_POST['cpf'];
	  $data = $_POST['data'];
	  $hora = $_POST['horario'];
	  $ingreInt = $_POST['ingressoint'];
	  $ingreMeio = $_POST['ingressomeio'];
	  $filme = $_POST['filme'];
	  $combo = $_POST['combo'];
	  
	  if ($combo = "C1") {
		$valorcombo = 15; }
	  else if ($combo = "C2") {
		$valorcombo = 25; }
	  else if ($combo = "C3") {
		$valorcombo = 40; }
	  else if ($combo = "CF") {
		$valorcombo = 50; }
	  else if ($combo = "CV1") {
		$valorcombo = 30; }
	  else if ($combo = "CV2") {
		$valorcombo = 50; }
	  else if ($combo = "CV3") {
		$valorcombo = 80; }
	  else { $valorcombo = 100; }
	  
	  $totalIngreInt =  20*$ingreInt;
	  $totalIngreMeio = 15*$ingreMeio;
	  
	  $totaldeingresso = $totalIngreInt + $totalIngreMeio + $valorcombo;
	  
	  
	  require("conexao.php");
	  mysql_select_db("cinema");

	  $cadastro = "INSERT INTO cliente (cli_nome, cli_cpf, fil_nome, fil_data, fil_hora, cli_total) 
	  VALUES ('$nome', '$cpf', '$filme', '$data', '$hora', '$total')";

	  mysql_query($cadastro);
	  mysql_close($conexao);
	?>
	
	<p class="card"> Compra Conluída! </p>
	<img src="patinho.gif" alt="Pato"><br><br><br>
	
	<a href="index.html">
		<input type="button" value="Voltar"> 
	</a>
</div>
</body>
</html>
