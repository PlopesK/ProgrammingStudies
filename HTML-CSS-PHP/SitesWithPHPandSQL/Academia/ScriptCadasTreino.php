<html lang="pt-BR">
	<head>
		<title>Cadastro da Consulta</title>
		<style type="text/css">
			.card {
				   border: 4px solid #A0012E;
				   background-color: #DF5078;
				   border-radius: 10px;
				   height: 250px;
				   width: 800px;
				   text-align: center;
				   font-size: 30px;
				   }
					
			input[type="button"] 
			{
				   border: 2px solid #A0012E;
				   background-color: #DF5078;
				   border-radius: 10px;
				   height: 50px;
				   width: 300px;
				   text-align: center;
				   font-size: 20px;
				   color: #A0012E;
				   cursor: pointer;
			}

		</style>
		<meta charset="utf-8">
	</head>
	<body>
		<?php

		$aluno = $_POST["aluno"];
		$treinador = $_POST["treinador"];
		$tipo = $_POST["tipo"];
		$hora = $_POST["hora"];
		$data = $_POST["data"];
		require("conexao.php");
		mysql_select_db ("academia_gp");

		$cadastro = "INSERT INTO treino ( alu_rg, tre_rg, tip_cod, tno_horario, tno_data) VALUES ('$aluno', '$treinador', '$tipo', '$hora', '$data')";

		mysql_query($cadastro) or die ("NÃO FOI POSSÍVEL REALIZAR O CADASTRO DO PEDIDO! TENTE NOVAMENTE!");
		mysql_close($conexao);
		
		?>
		
		<!--De volta ao html -->
		<br><br><br>
		<center> <p class="card">
			<TR>
				<br><br>
				<font size= "5" face= "Sans Serif" color= "#A0012E">
					<TH> <u>Cadastro Concluído!</u> </H1> </TH>
				</font>
				<br><br>
				
				<TH> <a href="cadas_tno.php">
					<input type="button" value="Voltar">
				</a> </TH>
			</TR>
		</p> </center>
	</body>
</html>