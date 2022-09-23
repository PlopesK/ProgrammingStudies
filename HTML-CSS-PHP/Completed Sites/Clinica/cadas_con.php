<html lang="pt-BR">
	<head>
		<title>Cadastro da Consulta</title>
		<style type="text/css">
			.card {
				   border: 4px solid #2F19D5;
				   background-color: #A094F6;
				   border-radius: 10px;
				   height: 300px;
				   text-align: center;
				   font-size: 30px;
				   }
					
			input[type="button"], form input[type="reset"], form input[type="submit"] 
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
			
			input[type="text"], form input[type="date"]
			{
					font-size: 20px;
					width: 400px;
					height: 40px;
			}
			
		</style>
		<meta charset="utf-8">
	</head>
	<body>
    <font size= "5" face= "Sans Serif" color= "#2F19D5">
		<H1><center> Cadastro da Consulta</center></H1>
		<H5><center> Insira as informações abaixo para que o cadastro seja bem sucedido</center></H5>
	</font>
    <br><br>
	
	<form action="ScriptCadasConsulta.php" method="POST">
		<p class="card">
			<br><br>
            <input type="text" name="cod" placeholder="Insira o Código da Consulta">
			<br>
            <input type="date" name="data" min="2000-28-31" max="2045-12-31">
			<br><br><br>

            <input type="submit" value="Cadastrar">
			&nbsp;&nbsp;&nbsp; &nbsp;&nbsp; <!--Linha pra separação dos botões -->
            <input type="reset" value="Limpar">
		</p>
    </form>
		
		<a href="consulta.php">
			<center><input type="button" value="Voltar"></center>
		</a>
	</font>
	</body>
</html>