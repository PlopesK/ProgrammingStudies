<html lang="pt-BR">
	<head>
		<title>Cadastro do Cliente</title>
		<style type="text/css">
			.card {
				   border: 4px solid #172778;
				   background-color:#7FCBFE;
				   border-radius: 10px;
				   height: 200px;
				   width: 70%;
				   text-align: center;
				   font-size: 30px;
				   }
					
			input[type="button"], form input[type="reset"], form input[type="submit"] 
			{
				   border: 2px solid #172778;
				   background-color: #6ACDFC;
				   border-radius: 10px;
				   height: 50px;
				   width: 200px;
				   text-align: center;
				   font-size: 20px;
				   color: #172778;
				   cursor: pointer;
			}

		</style>
		<meta charset="utf-8">
	</head>
	<body>
		<?php

		$nome =$_POST["nome"];
		$cpf =$_POST["cpf"];
		require("conexao.php");
		mysql_select_db ("mercado_gp");

		$cadastro = "INSERT INTO cliente ( cli_nome, cli_cpf) VALUES ('$nome', '$cpf')";

		mysql_query($cadastro) or die ("NÃO FOI POSSÍVEL REALIZAR O SEU CADASTRO! TENTE NOVAMENTE!");
		mysql_close($conexao);
		
		?>
		
		<!--De volta ao html -->
		<br><br><br>
		<center> <p class="card">
			<TR>
				<br><br>
				<TH> <u>Cadastro Concluído!</u> </H1> </TH>
				<br><br>
				
				<TH> <a href="cliente.php">
					<input type="button" value="Voltar">
				</a> </TH>
			</TR>
		</p> </center>
	</body>
</html>