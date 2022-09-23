<html lang="pt-BR">
	<head>
		<title>Exclusão do Cliente</title>
		<style type="text/css">
			.card {
				   border: 4px solid #1E0543;
				   background-color:#B689FC;
				   border-radius: 10px;
				   height: 200px;
				   width: 70%;
				   text-align: center;
				   font-size: 30px;
				   }
					
			input[type="button"] 
			{
				   border: 2px solid #1E0543;
				   background-color: #D1A9F8;
				   border-radius: 10px;
				   height: 50px;
				   width: 300px;
				   text-align: center;
				   font-size: 20px;
				   color: #1E0543;
				   cursor: pointer;
			}
			
		</style>
		<meta charset="utf-8">
	</head>
	<body>
		<?php

		require("conexao.php");
		mysql_select_db("mercado_gp");

        if (isset($_POST["cod"] ) ) 
		{
            $delete = "DELETE FROM produto WHERE pro_cod = " . $_POST["cod"];
		}
		
            mysql_query($delete) or die("NÃO FOI POSSÍVEL DELETAR ESSE PRODUTO! TENTE NOVAMENTE!");
            mysql_close($conexao);
			
		?>
		
		<!--De volta ao html -->
		<br><br><br>
		<center> <p class="card">
			<TR>
				<br><br>
				<font size= "5" face= "Sans Serif" color= "#1E0543">
					<TH> <u>Exclusão Concluída!</u> </H1> </TH>
				</font>
				
				<TH> <a href="exclu_prod.php">
					<input type="button" value="Voltar">
				</a> </TH>
			</TR>
		</p> </center>
	</body>
</html>