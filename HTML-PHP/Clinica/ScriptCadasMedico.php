<html lang="pt-BR">
	<head>
		<title>Cadastro do Medico</title>
		<style type="text/css">
			.card {
				   border: 4px solid #2C7DC0;
				   background-color: #94C5EF;
				   border-radius: 10px;
				   height: 250px;
				   width: 800px;
				   text-align: center;
				   font-size: 30px;
				   }
					
			input[type="button"] 
			{
				   border: 2px solid #2C7DC0;
				   background-color: #94C5EF;
				   border-radius: 10px;
				   height: 50px;
				   width: 200px;
				   text-align: center;
				   font-size: 20px;
				   color: #2C7DC0;
				   cursor: pointer;
			}

		</style>
		<meta charset="utf-8">
	</head>
	<body>
		<?php

		$nome =$_POST["nome"];
		$crm =$_POST["crm"];
		require("conexao.php");
		mysql_select_db ("clinica_gp");

		$cadastro = "INSERT INTO medico ( med_nome, med_crm) VALUES ('$nome', '$crm')";

		mysql_query($cadastro) or die ("NÃO FOI POSSÍVEL REALIZAR O SEU CADASTRO! TENTE NOVAMENTE!");
		mysql_close($conexao);
		
		?>
		
		<!--De volta ao html -->
		<br><br><br>
		<center> <p class="card">
			<TR>
				<br><br>
				<font size= "5" face= "Sans Serif" color= "#2C7DC0">
					<TH> <u>Cadastro Concluído!</u> </H1> </TH>
				</font>
				<br><br>
				
				<TH> <a href="cadas_med.php">
					<input type="button" value="Voltar">
				</a> </TH>
			</TR>
		</p> </center>
	</body>
</html>