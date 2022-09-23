<html lang="pt-BR">
	<head>
		<title>Cadastro do Funcionario</title>
		<style type="text/css">
			.card {
				   border: 4px solid #137113;
				   background-color:#92F792;
				   border-radius: 10px;
				   height: 200px;
				   width: 70%;
				   text-align: center;
				   font-size: 30px;
				   }
					
			input[type="button"]
			{
				   border: 2px solid #137113;
				   background-color: #6CF96C;
				   border-radius: 10px;
				   height: 50px;
				   width: 300px;
				   text-align: center;
				   font-size: 20px;
				   color: #137113;
				   cursor: pointer;
			}

		</style>
		<meta charset="utf-8">
	</head>
	<body>
		<?php

		$nome = $_POST["nome"];
		$cpf = $_POST["cpf"];
		require("conexao.php");
		mysql_select_db ("mercado_gp");

		$cadastro = "INSERT INTO funcionario ( fun_nome, fun_cpf) VALUES ('$nome', '$cpf')";

		mysql_query($cadastro) or die ("NÃO FOI POSSÍVEL REALIZAR O SEU CADASTRO! TENTE NOVAMENTE!");
		mysql_close($conexao);
		
		?>
		
		<!--De volta ao html -->
		<br><br><br>
		<center> <p class="card">
			<TR>
				<br><br>
				<font size= "5" face= "Sans Serif" color= "#137113">
					<TH> <u>Cadastro Concluído!</u> </H1> </TH>
				</font>
				<br><br>
				
				<TH> <a href="cadas_fun.php">
					<input type="button" value="Voltar">
				</a> </TH>
			</TR>
		</p> </center>
	</body>
</html>