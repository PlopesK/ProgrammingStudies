<html lang="pt-BR">
	<head>
		<title>Exclusão do Cliente</title>
		<style type="text/css">
			.card {
				   border: 4px solid #172778;
				   background-color:#7FCBFE;
				   border-radius: 10px;
				   height: 250px;
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
					width: 500px;
					height: 40px;
			}
			
		</style>
		<meta charset="utf-8">
	</head>
	<body>
    <font size= "5" face= "Sans Serif" color= "#172778">
		<H1><center> Exclusão da conta de um Cliente</center></H1>
	</font>
    <br><br>
	
	<form action="ScriptExcluCliente.php" method="POST">
		<p class="card">
			<br><br>
            <input type="text" name="cpf" placeholder="Insira o CPF do Cliente que terá sua Conta apagada">
			<br><br>

            <input type="submit" value="Excluir">
			&nbsp;&nbsp;&nbsp; &nbsp;&nbsp; <!--Linha pra separação dos botões -->
            <input type="reset" value="Limpar">
		</p>
    </form>
		
		<a href="cliente.php">
			<center><input type="button" value="Voltar"></center>
		</a>
	</body>
</html>