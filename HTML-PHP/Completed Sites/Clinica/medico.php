<html lang="pt-BR">
	<head>
		<title>Medico</title>
		<style type="text/css">
			.card {
				   border: 4px solid #2C7DC0;
				   background-color: #94C5EF;
				   border-radius: 10px;
				   height: 300px;
				   text-align: center;
				   font-size: 30px;
				   }
					
			input[type="button"] 
			{
				   border: 2px solid #2C7DC0;
				   background-color: #94C5EF;
				   border-radius: 10px;
				   height: 50px;
				   width: 300px;
				   text-align: center;
				   font-size: 20px;
				   color: #2C7DC0;
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
	
	<font face= "Sans Serif" color= "#2C7DC0">
		<p class ="card">
			<TR>
				<br>
				<TH>Ações com o <u>Médico</u><br><br><br> </TH>
					
				<TH><a href="cadas_med.php">
					<input type="button" value="Cadastrar Médico">
				</a>
				
				<TH> &nbsp;&nbsp;&nbsp; &nbsp;&nbsp;&nbsp;&nbsp;</TH> <!--Linha pra separação dos botões -->
				
				<TH> <a href="exclu_med.php">
					<input type="button" value=" Excluir Médico">
				</a> <br><br> </TH>

				<TH> <a href="lista_med.php">
					<input type="button" value=" Ver a Lista de Médicos">
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