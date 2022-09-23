<html lang="pt-BR">
	<head>
		<title>Papelaria</title>
		<style type="text/css">
			.card {
				   border: 4px solid #172778;
				   background-color:#A9CEF2;
				   border-radius: 10px;
				   height: 350px;
				   text-align: center;
				   font-size: 30px;
				   }
				   
			input[type="text"] {
					font-size: 20px;
					width: 400px;
					height: 40px;
					}
					
			input[type="button"]{
				   border: 2px solid #172778;
				   background-color: #A9CEF2;
				   border-radius: 10px;
				   height: 50px;
				   width: 100px;
				   text-align: center;
				   font-size: 20px;
				   color: #172778;
				   cursor: pointer;
			}
		</style>
		<meta charset ="utf-8">
	</head>
	<body>
	<br><br><br><br><br><br>
		<p class ="card">
			<font face= "Sans Serif" color= "#172778">
				<TR>
					<font face= "Sans Serif" color= "#671A91">
						<br><br><br>
						<TH><b>Registrado!</b><br><br> </TH>
					</font>
					<font face= "Sans Serif" color= "#172778">
						<TH>Se deseja registrar outro produto, clique no botão abaixo!</TH> <br>
						<a href="papelaria.html">
							<TH><input type ="button" value ="Voltar"><br><br></TH>
						</a>
					</font>
				</TR>
				
		<?php 
			$nome =$_POST["nome"];
			$preco =$_POST["preco"];
			$codigo =$_POST["codigo"];

			require('conexao.php');
			mysql_select_db ("papelaria_gp");

			$inserir ="INSERT INTO produto(pro_codigo, pro_nome, pro_preco)
			VALUES('$codigo', '$nome', '$preco')";

			mysql_query($inserir);
			mysql_close($conexao);        
			
		?>
		
	</body>
</html>