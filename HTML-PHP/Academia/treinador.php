<html lang="pt-BR">
	<head>
		<title>Treinador</title>
		<style type="text/css">
			.card {
				   border: 4px solid #FD6E00;
				   background-color: #F8D85C;
				   border-radius: 10px;
				   height: 300px;
				   text-align: center;
				   font-size: 30px;
				   }
					
			input[type="button"] {
				   border: 2px solid #FD6E00;
				   background-color: #F8D85C;
				   border-radius: 10px;
				   height: 50px;
				   width: 300px;
				   text-align: center;
				   font-size: 20px;
				   color: #FD6E00;
				   cursor: pointer;
			}
			
		</style>
		<meta charset="utf-8">
	</head>
	<body>
    <font size= "5" face= "Sans Serif" color= "#FD6E00">
		<H1><center> Selecione qual ação você deseja realizar</center></H1>
	</font>
    <br><br><br>
	
	<font face= "Sans Serif" color= "#FD6E00">
		<p class ="card">
			<TR>
				<br>
				<TH>Ações com o <u>Paciente</u><br><br><br> </TH>
					
				<TH><a href="cadas_tre.php">
					<input type="button" value="Cadastrar Treinador">
				</a>
				
				<TH> &nbsp;&nbsp;&nbsp; &nbsp;&nbsp;&nbsp;&nbsp;</TH> <!--Linha pra separação dos botões -->
				
				<TH> <a href="exclu_tre.php">
					<input type="button" value=" Excluir Treinador">
				</a> <br><br> </TH>

				<TH> <a href="lista_tre.php">
					<input type="button" value=" Ver a Lista de Treinadores">
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