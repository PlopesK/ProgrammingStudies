<html lang="pt-BR">
	<head>
		<title>Cliente</title>
		<style type="text/css">
			.card {
				   border: 4px solid #093366;
				   background-color:#7FCBFE;
				   border-radius: 10px;
				   height: 250px;
				   text-align: center;
				   font-size: 30px;
				   }
					
			input[type="button"] {
				   border: 2px solid #093366;
				   background-color: #6ACDFC;
				   border-radius: 10px;
				   height: 50px;
				   width: 300px;
				   text-align: center;
				   font-size: 20px;
				   color: #093366;
				   cursor: pointer;
			}
			
		</style>
		<meta charset="utf-8">
	</head>
	<body>
    <font size= "5" face= "Sans Serif" color= "#172778">
		<H1><center> Selecione qual ação você deseja realizar</center></H1>
	</font>
    <br><br><br>
	
	<font face= "Sans Serif" color= "#172778">
		<p class ="card">
			<TR>
				<br>
				<TH>Ações com o <u>Cliente</u><br><br><br> </TH>
					
				<TH><a href="cadas_cli.php">
					<input type="button" value="Cadastrar Cliente">
				</a>
				
				<TH> &nbsp;&nbsp;&nbsp; &nbsp;&nbsp;&nbsp;&nbsp;</TH> <!--Linha pra separação dos botões -->
				
				<TH> <a href="exclu_cli.php">
					<input type="button" value=" Excluir Cliente">
				</a> <br><br> </TH>
			</TR>
		</p>
	<br>
		
		<a href="index.html">
			<center><input type="button" value="Voltar"></center>
		</a>
	</font>
	</body>
</html>