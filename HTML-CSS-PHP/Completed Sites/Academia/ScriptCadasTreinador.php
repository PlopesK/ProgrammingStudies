<html lang="pt-BR">
	<head>
		<title>Cadastro do Paciente</title>
		<style type="text/css">
			.card {
				   border: 4px solid #FD6E00;
				   background-color: #F8D85C;
				   border-radius: 10px;
				   height: 250px;
				   width: 800px;
				   text-align: center;
				   font-size: 30px;
				   }
					
			input[type="button"] 
			{
				   border: 2px solid #FD6E00;
				   background-color: #F8D85C;
				   border-radius: 10px;
				   height: 50px;
				   width: 200px;
				   text-align: center;
				   font-size: 20px;
				   color: #FD6E00;
				   cursor: pointer;
			}

		</style>
		<meta charset="utf-8">
	</head>
	<body>
		<?php

		$nome =$_POST["nome"];
		$rg =$_POST["rg"];
		require("conexao.php");
		mysql_select_db ("academia_gp");

		$cadastro = "INSERT INTO treinador ( tre_nome, tre_rg) VALUES ('$nome', '$rg')";

		mysql_query($cadastro) or die ("NÃO FOI POSSÍVEL REALIZAR O SEU CADASTRO! TENTE NOVAMENTE!");
		mysql_close($conexao);
		
		?>
		
		<!--De volta ao html -->
		<br><br><br>
		<center> <p class="card">
			<TR>
				<br><br>
				<font size= "5" face= "Sans Serif" color= "#FD6E00">
					<TH> <u>Cadastro Concluído!</u> </H1> </TH>
				</font>
				<br><br>
				
				<TH> <a href="cadas_tre.php">
					<input type="button" value="Voltar">
				</a> </TH>
			</TR>
		</p> </center>
	</body>
</html>