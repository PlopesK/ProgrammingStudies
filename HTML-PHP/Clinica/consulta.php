<html lang="pt-BR">
	<head>
		<title>Consulta</title>
		<style type="text/css">
			.card {
				   border: 4px solid #2F19D5;
				   background-color: #A094F6;
				   border-radius: 10px;
				   height: 300px;
				   text-align: center;
				   font-size: 30px;
				   }
					
			input[type="button"] 
			{
				   border: 2px solid #2F19D5;
				   background-color: #A094F6;
				   border-radius: 10px;
				   height: 50px;
				   width: 300px;
				   text-align: center;
				   font-size: 20px;
				   color: #2F19D5;
				   cursor: pointer;
			}
			
		</style>
		<meta charset="utf-8">
	</head>
	<body>
    <font size= "5" face= "Sans Serif" color= "#2F19D5">
		<H1><center> Selecione qual ação você deseja realizar</center></H1>
	</font>
    <br><br><br>
	
	<font face= "Sans Serif" color= "#2F19D5">
		<p class ="card">
			<TR>
				<br>
				<TH>Ações com a <u>Consulta</u><br><br><br> </TH>
					
				<TH><a href="cadas_con.php">
					<input type="button" value="Cadastrar Consulta">
				</a>
				
				<TH> &nbsp;&nbsp;&nbsp; &nbsp;&nbsp;&nbsp;&nbsp;</TH> <!--Linha pra separação dos botões -->
				
				<TH> <a href="exclu_con.php">
					<input type="button" value=" Excluir Consulta">
				</a> <br><br> </TH>

				<TH> <a href="lista_con.php">
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