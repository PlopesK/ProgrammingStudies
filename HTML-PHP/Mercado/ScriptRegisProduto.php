<html lang="pt-BR">
	<head>
		<title>Registro do Produto</title>
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

		$cod = $_POST['cod'];
		$nome = $_POST['nome'];
		$desc = $_POST['desc'];
		$preco = $_POST['preco'];
		$quantid = $_POST['quantidade'];
		
		require("conexao.php");
		mysql_select_db ("mercado_gp");

		$registro = "INSERT INTO produto ( pro_cod, pro_nome, pro_desc, pro_preco, pro_quantid) VALUES ('$cod', '$nome', '$desc', '$preco', '$quantid')";

		mysql_query($registro) or die("NÃO FOI POSSÍVEL REGISTRAR ESSE PRODUTO! TENTE NOVAMENTE!");
		mysql_close($conexao);
		
		?>
		
		<!--De volta ao html -->
		<br><br><br>
		<center> <p class="card">
			<TR>
				<br><br>
				<font size= "5" face= "Sans Serif" color= "#1E0543">
					<TH> <u>Produto Registrado!</u> </H1> </TH>
				</font>
				<br><br>
				
				<TH> <a href="regis_prod.php">
					<input type="button" value="Voltar">
				</a> </TH>
			</TR>
		</p> </center>
	</body>
</html>