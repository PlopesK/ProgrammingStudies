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
		
		<div class= "componentes">
			<H1>Exclusão do Ingresso</H1>
			<br><br><br><br><br>
			<p class= "deletar">
				<form action="excluir_cadastro.php" method="post">
					<input type="text" name="nome" placeholder="Insirá o seu Nome para cancelar a reserva de seu acento"><br>
					<input type="text" name="cpf" placeholder="Insirá o seu CPF"><br><br>
					
					<a href="excluir_cadastro.php">
						<center><input type="submit" value="Excluir"></center><br>
					</a>
				</form>    
			</p>
			
			<a href="index.html">
				<input type="button" value="Voltar"> 
			</a>
		</div>
	</body>
</html>