<html lang="pt-br">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1"> 
	<link rel="stylesheet" type="text/css" href="estilo.css" /> 
	<link rel="shortcut icon" href="imagens/icone.ico" />	
	<title>Exclusão</title>	 
		 
	<meta charset="utf-8">
</head>
<body>
<!-- Cabeçalho -->
<div class="header">
	<img src="Icone.jpg" width="100" alt="" loading="lazy">
</div>
	
<div class="componentes2">
	<h1><center>Cancelamento da compra do Ingresso</center></h1><br>
	
<?php

	require("conexao.php");
        mysql_select_db("Cinema");
	if (isset($_POST['nome']) && ($_POST['cpf']){
		$del="DELETE FROM cliente WHERE cli_cpf= $_POST['cpf'], cli_nome= $_POST['nome']";}
				
	mysql_query($del);
    mysql_close($conexao);
?>
	
	<p class="card"> Compra cancelada com Sucesso! </p>
	<img src="cachorrinho.gif" alt="Cachorro">	<br><br><br>
	
	<a href="index.html">
		<input type="button" value="Voltar"> 
	</a>
</div>
</body>
</html>
