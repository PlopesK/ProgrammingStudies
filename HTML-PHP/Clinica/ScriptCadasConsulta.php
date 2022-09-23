<html lang="pt-BR">
	<head>
		<title>Cadastro da Consulta</title>
		<style type="text/css">
			.card {
				   border: 4px solid #2F19D5;
				   background-color: #A094F6;
				   border-radius: 10px;
				   height: 250px;
				   width: 800px;
				   text-align: center;
				   font-size: 30px;
				   }
					
			input[type="button"] 
			{
				   border: 2px solid #2F19D5;
				   background-color: #A094F6;
				   border-radius: 10px;
				   height: 50px;
				   width: 300px;
				   text-align: center;
				   font-size: 20px;
				   color: #2F19D5;
				   cursor: pointer;
			}

		</style>
		<meta charset="utf-8">
	</head>
	<body>
		<?php

		$cod =$_POST["cod"];
		$data =$_POST["data"];
		require("conexao.php");
		mysql_select_db ("clinica_gp");

		$cadastro = "INSERT INTO consulta ( con_cod, con_data) VALUES ('$cod', '$data')";

		mysql_query($cadastro) or die ("NÃO FOI POSSÍVEL REALIZAR O SEU CADASTRO! TENTE NOVAMENTE!");
		mysql_close($conexao);
		
		?>
		
		<!--De volta ao html -->
		<br><br><br>
		<center> <p class="card">
			<TR>
				<br><br>
				<font size= "5" face= "Sans Serif" color= "#2F19D5">
					<TH> <u>Cadastro Concluído!</u> </H1> </TH>
				</font>
				<br><br>
				
				<TH> <a href="cadas_con.php">
					<input type="button" value="Voltar">
				</a> </TH>
			</TR>
		</p> </center>
	</body>
</html>