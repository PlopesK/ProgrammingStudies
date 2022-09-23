<html lang="pt-BR">
	<head>
		<title>Cadastro do Pedido</title>
		<style type="text/css">
			.card {
				   border: 4px solid #F7003B;
				   background-color:#F6D0D9;
				   border-radius: 10px;
				   height: 200px;
				   width: 70%;
				   font-size: 30px;
				   }
					
			input[type="button"]
			{
				   border: 2px solid #F7003B;
				   background-color: #F6BFCC;
				   border-radius: 10px;
				   height: 50px;
				   width: 300px;
				   text-align: center;
				   font-size: 20px;
				   color: #F7003B;
				   cursor: pointer;
			}
			
		</style>
		<meta charset="utf-8">
	</head>
	<body>
		<?php

		$codigo = $_POST["codigo"];
		$cliente = $_POST["cliente"];
		$produto = $_POST["produto"];
		$funcionario = $_POST["funcionario"];
		require("conexao.php");
		mysql_select_db ("mercado_gp");

		$cadastro = "INSERT INTO pedido ( ped_cod, cli_cpf, fun_cpf, pro_cod) VALUES ('$codigo', '$cliente', '$funcionario', '$produto')";

		mysql_query($cadastro) or die ("NÃO FOI POSSÍVEL REALIZAR O CADASTRO DO PEDIDO! TENTE NOVAMENTE!");
		mysql_close($conexao);
		
		?>
		
		<!--De volta ao html -->
		<br><br><br>
		<center> <p class="card">
			<TR>
				<br><br>
				<font size= "5" face= "Sans Serif" color= "#F7003B">
					<TH><u>Cadastro Concluído!</u> </H1> </TH>
				</font>
				<br><br>
				
				<TH> <a href="cadas_ped.php">
					<input type="button" value="Voltar">
				</a> </TH>
			</TR>
		</p> </center>
	</body>
</html>