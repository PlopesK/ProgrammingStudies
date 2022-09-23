<html lang="pt-BR">
	<head>
		<title>Aluno</title>
		<style type="text/css">
			.card {
				   border: 4px solid #A51201;
				   background-color: #FB8050;
				   border-radius: 10px;
				   height: 300px;
				   text-align: center;
				   font-size: 30px;
				   }
					
			input[type="button"] 
			{
				   border: 2px solid #A51201;
				   background-color: #FB8050;
				   border-radius: 10px;
				   height: 50px;
				   width: 300px;
				   text-align: center;
				   font-size: 20px;
				   color: #A51201;
				   cursor: pointer;
			}
			
		</style>
		<meta charset="utf-8">
	</head>
	<body>
    <font size= "5" face= "Sans Serif" color= "#A51201">
		<H1><center> Selecione qual ação você deseja realizar</center></H1>
	</font>
    <br><br><br>
	
	<font face= "Sans Serif" color= "#A51201">
		<p class ="card">
			<TR>
				<br>
				<TH>Ações com o <u>Aluno</u><br><br><br> </TH>
					
				<TH><a href="cadas_alu.php">
					<input type="button" value="Cadastrar Aluno">
				</a>
				
				<TH> &nbsp;&nbsp;&nbsp; &nbsp;&nbsp;&nbsp;&nbsp;</TH> <!--Linha pra separação dos botões -->
				
				<TH> <a href="exclu_alu.php">
					<input type="button" value=" Excluir Aluno">
				</a> <br><br> </TH>

				<TH> <a href="lista_alu.php">
					<input type="button" value=" Ver a Lista de Alunos">
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