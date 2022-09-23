<html lang="pt-BR">
	<head>
		<title>Produto</title>
		<style type="text/css">
			.card {
				   border: 4px solid #1E0543;
				   background-color:#B689FC;
				   border-radius: 10px;
				   height: 300px;
				   text-align: center;
				   font-size: 30px;
				   }
					
			input[type="button"] {
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
    <font size= "5" face= "Sans Serif" color= "#1E0543">
		<H1><center> Selecione qual ação você deseja realizar</center></H1>
	</font>
    <br><br><br>
	
	<font face= "Sans Serif" color= "#1E0543">
		<p class ="card">
			<TR>
				<br>
				<TH>Ações com o <u>Produto</u><br><br><br> </TH>
					
				<TH><a href="regis_prod.php">
					<input type="button" value="Registrar Produto">
				</a>
				
				<TH> &nbsp;&nbsp;&nbsp; &nbsp;&nbsp;&nbsp;&nbsp;</TH> <!--Linha pra separação dos botões -->
				
				<TH> <a href="exclu_prod.php">
					<input type="button" value=" Excluir Produto">
				</a> <br><br> </TH>
				
				<TH> <a href="lista_prod.php">
					<input type="button" value=" Ver a Lista de Produtos">
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