<html lang="pt-BR">
	<head>
		<title>Exclusão do Pedido</title>
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
			
			input[type="text"] 
			{
					font-size: 20px;
					width: 400px;
					height: 40px;
			}
		</style>
		<meta charset="utf-8">
	</head>
	<body>
		<?php

		require("conexao.php");
		mysql_select_db("mercado_gp");

        if (isset($_POST["codigo"] ) ) 
		{
            $delete = "DELETE FROM pedido WHERE ped_cod = " . $_POST["codigo"];
		}
		
            mysql_query($delete) or die("NÃO FOI POSSÍVEL DELETAR ESSE PEDIDO! TENTE NOVAMENTE!");
            mysql_close($conexao);
			
		?>
		
		<!--De volta ao html -->
		<br><br><br>
		<center> <p class="card">
			<TR>
				<br><br>
				<font size= "5" face= "Sans Serif" color= "#F7003B">
					<TH> <u>Exclusão Concluída!</u> </H1> </TH>
				</font>
				<br><br>
				
				<TH> <a href="exclu_ped.php">
					<input type="button" value="Voltar">
				</a> </TH>
			</TR>
		</p> </center>
	</body>
</html>