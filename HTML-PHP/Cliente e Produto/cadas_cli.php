<html lang="pt-BR">
	<head>
		<title>Cadastro do Cliente</title>
		<style type="text/css">
			.card {
				   border: 4px solid #172778;
				   background-color:#7FCBFE;
				   border-radius: 10px;
				   height: 300px;
				   text-align: center;
				   font-size: 30px;
				   }
					
			input[type="button"], form input[type="reset"], form input[type="submit"] 
			{
				   border: 2px solid #172778;
				   background-color: #6ACDFC;
				   border-radius: 10px;
				   height: 50px;
				   width: 200px;
				   text-align: center;
				   font-size: 20px;
				   color: #172778;
				   cursor: pointer;
			}
			
			input[type="text"] 
			{
					font-size: 20px;
					width: 400px;
					height: 40px;
			}
			
		</style>
		<meta charset="utf-8">
	</head>
	<body>
    <font size= "5" face= "Sans Serif" color= "#172778">
		<H1><center> Cadastro do Cliente</center></H1>
		<H5><center> Insira as informações abaixo para que o cadastro seja bem sucedido</center></H5>
	</font>
    <br><br>
	
	<form action="ScriptCadasCliente.php" method="POST">
		<p class="card">
			<br><br>
            <input type="text" name="nome" placeholder="Insira o Nome do Cliente">
			<br>
            <input type="text" name="cpf" placeholder="Insira o CPF do Cliente">
			<br><br><br>

            <input type="submit" value="Cadastrar">
			&nbsp;&nbsp;&nbsp; &nbsp;&nbsp; <!--Linha pra separação dos botões -->
            <input type="reset" value="Limpar">
		</p>
    </form>
		
		<a href="cliente.php">
			<center><input type="button" value="Voltar"></center>
		</a>
	</font>
	</body>
</html>