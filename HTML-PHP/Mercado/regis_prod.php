<html lang="pt-BR">
	<head>
		<title>Registro do Produto</title>
		<style type="text/css">
			.card {
				   border: 4px solid #1E0543;
				   background-color:#B689FC;
				   border-radius: 10px;
				   height: 350px;
				   text-align: center;
				   font-size: 30px;
				   }
					
			input[type="button"], form input[type="reset"], form input[type="submit"]
			{
				   border: 2px solid #1E0543;
				   background-color: #D1A9F8;
				   border-radius: 10px;
				   height: 50px;
				   width: 300px;
				   text-align: center;
				   font-size: 20px;
				   color: #1E0543;
				   cursor: pointer;
			}
			
			input[type="text"], form input[type="number"]
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
		<H1><center> Registro do Produto</center></H1>
		<H5><center> Insira as informações abaixo para que o registro seja bem sucedido</center></H5>
	</font>
    <br><br>
	
	<form action="ScriptRegisProduto.php" method="POST">
		<p class="card">
			<br>
            <input type="text" name="cod" placeholder="Insira o Código do Produto">
			<br>
            <input type="text" name="nome" placeholder="Insira o Nome do Produto">
			<br>
			<input type="text" name="desc" placeholder="Insira a Descrição do Produto">
			<br>
			<input type="text" name="preco" placeholder="Insira o Preço do Produto">
			<br>
			<input type="number" name="quantidade" placeholder="Insira a Quantidade desse Produto">
			<br><br>

            <input type="submit" value="Registrar">
			&nbsp;&nbsp;&nbsp; &nbsp;&nbsp; <!--Linha pra separação dos botões -->
            <input type="reset" value="Limpar">
		</p>
    </form>
		
		<a href="produto.php">
			<center><input type="button" value="Voltar"></center>
		</a>
	</body>
</html>