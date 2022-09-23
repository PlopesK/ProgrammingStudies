<html lang="pt-BR">
	<head>
		<title>Funcionario</title>
		<style type="text/css">
			.card {
				   border: 4px solid #137113;
				   background-color:#92F792;
				   border-radius: 10px;
				   height: 300px;
				   text-align: center;
				   font-size: 30px;
				   }
					
			input[type="button"] {
				   border: 2px solid #137113;
				   background-color: #6CF96C;
				   border-radius: 10px;
				   height: 50px;
				   width: 300px;
				   text-align: center;
				   font-size: 20px;
				   color: #137113;
				   cursor: pointer;
			}
			
		</style>
		<meta charset="utf-8">
	</head>
	<body>
    <font size= "5" face= "Sans Serif" color= "#137113">
		<H1><center> Selecione qual ação você deseja realizar</center></H1>
	</font>
    <br><br><br>
	
	<font face= "Sans Serif" color= "#137113">
		<p class ="card">
			<TR>
				<br>
				<TH>Ações com o <u>Funcionário</u><br><br><br> </TH>
					
				<TH><a href="cadas_fun.php">
					<input type="button" value="Cadastrar Funcionário">
				</a>
				
				<TH> &nbsp;&nbsp;&nbsp; &nbsp;&nbsp;&nbsp;&nbsp;</TH> <!--Linha pra separação dos botões -->
				
				<TH> <a href="exclu_fun.php">
					<input type="button" value=" Excluir Funcionário">
				</a> <br><br> </TH>

				<TH> <a href="lista_fun.php">
					<input type="button" value=" Ver a Lista de Funcionários">
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