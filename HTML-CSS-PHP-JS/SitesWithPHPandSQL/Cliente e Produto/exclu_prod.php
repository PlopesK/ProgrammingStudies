<html lang="pt-BR">
	<head>
		<title>Exclusão do Produto</title>
		<style type="text/css">
			.card {
				   border: 4px solid #1E0543;
				   background-color:#B689FC;
				   border-radius: 10px;
				   height: 200px;
				   text-align: center;
				   font-size: 30px;
				   }
					
			input[type="button"], form input[type="reset"], form input[type="submit"] 
			{
				   border: 2px solid #1E0543;
				   background-color: #D1A9F8;
				   border-radius: 10px;
				   height: 50px;
				   width: 200px;
				   text-align: center;
				   font-size: 20px;
				   color: #1E0543;
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
    <font size= "5" face= "Sans Serif" color= "#1E0543">
		<H1><center> Exclusão de um Produto</center></H1>
		<H5><center> Insira as informações abaixo para que o cadastro seja bem sucedido</center></H5>
	</font>
    <br><br>
	
	<form action="ScriptExcluProduto.php" method="POST">
		<p class="card">
			<br><br>
            <input type="text" name="cod" placeholder="Insira o Código do Produto que será apagado">
			<br><br>

            <input type="submit" value="Excluir">
			&nbsp;&nbsp;&nbsp; &nbsp;&nbsp; <!--Linha pra separação dos botões -->
            <input type="reset" value="Limpar">
		</p>
    </form>
		
		<a href="produto.php">
			<center><input type="button" value="Voltar"></center>
		</a>
	</body>
</html>