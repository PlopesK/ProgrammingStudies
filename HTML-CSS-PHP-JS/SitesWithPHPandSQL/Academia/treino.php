<html lang="pt-BR">
	<head>
		<title>Treino</title>
		<style type="text/css">
			.card {
				   border: 4px solid #A0012E;
				   background-color: #DF5078;
				   border-radius: 10px;
				   height: 300px;
				   text-align: center;
				   font-size: 30px;
				   }
					
			input[type="button"] 
			{
				   border: 2px solid #A0012E;
				   background-color: #DF5078;
				   border-radius: 10px;
				   height: 50px;
				   width: 300px;
				   text-align: center;
				   font-size: 20px;
				   color: #A0012E;
				   cursor: pointer;
			}
			
		</style>
		<meta charset="utf-8">
	</head>
	<body>
    <font size= "5" face= "Sans Serif" color= "#A0012E">
		<H1><center> Selecione qual ação você deseja realizar</center></H1>
	</font>
    <br><br><br>
	
	<font face= "Sans Serif" color= "#A0012E">
		<p class ="card">
			<TR>
				<br>
				<TH>Ações com o <u>Treino</u><br><br><br> </TH>
					
				<TH><a href="cadas_tno.php">
					<input type="button" value="Cadastrar Treino">
				</a>
				
				<TH> &nbsp;&nbsp;&nbsp; &nbsp;&nbsp;&nbsp;&nbsp;</TH> <!--Linha pra separação dos botões -->
				
				<TH> <a href="exclu_tno.php">
					<input type="button" value=" Excluir Treino">
				</a> <br><br> </TH>

				<TH> <a href="lista_tno.php">
					<input type="button" value=" Ver a Lista de Treinos">
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