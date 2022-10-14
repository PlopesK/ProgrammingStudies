<html lang="pt-BR">
	<head>
		<title>Paciente</title>
		<style type="text/css">
			.card {
				   border: 4px solid #199E81;
				   background-color: #8EF4DE;
				   border-radius: 10px;
				   height: 300px;
				   text-align: center;
				   font-size: 30px;
				   }
					
			input[type="button"] {
				   border: 2px solid #199E81;
				   background-color: #8EF4DE;
				   border-radius: 10px;
				   height: 50px;
				   width: 300px;
				   text-align: center;
				   font-size: 20px;
				   color: #199E81;
				   cursor: pointer;
			}
			
		</style>
		<meta charset="utf-8">
	</head>
	<body>
    <font size= "5" face= "Sans Serif" color= "#199E81">
		<H1><center> Selecione qual ação você deseja realizar</center></H1>
	</font>
    <br><br><br>
	
	<font face= "Sans Serif" color= "#199E81">
		<p class ="card">
			<TR>
				<br>
				<TH>Ações com o <u>Paciente</u><br><br><br> </TH>
					
				<TH><a href="cadas_pac.php">
					<input type="button" value="Cadastrar Paciente">
				</a>
				
				<TH> &nbsp;&nbsp;&nbsp; &nbsp;&nbsp;&nbsp;&nbsp;</TH> <!--Linha pra separação dos botões -->
				
				<TH> <a href="exclu_pac.php">
					<input type="button" value=" Excluir Paciente">
				</a> <br><br> </TH>

				<TH> <a href="lista_pac.php">
					<input type="button" value=" Ver a Lista de Pacientes">
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