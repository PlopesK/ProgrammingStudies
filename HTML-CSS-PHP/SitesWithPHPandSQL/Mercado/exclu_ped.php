<html lang="pt-BR">
	<head>
		<title>Exclusão do Pedido</title>
		<style type="text/css">
			.card {
				   border: 4px solid #F7003B;
				   background-color:#F6BFCC;
				   border-radius: 10px;
				   height: 300px;
				   text-align: center;
				   font-size: 30px;
				   }
					
			input[type="button"], form input[type="reset"], form input[type="submit"] 
			{
				   border: 2px solid #F7003B;
				   background-color: #F6BFCC;
				   border-radius: 10px;
				   height: 50px;
				   width: 300px;
				   text-align: center;
				   font-size: 20px;
				   color: #F7003B;
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
    <font size= "5" face= "Sans Serif" color= "#F7003B">
		<H1><center> Exclusão de um Pedido</center></H1>
	</font>
    <br><br>
	
	<form action="ScriptExcluPedido.php" method="POST">
		<p class="card">
			<br><br>
            <input type="text" name="codigo" placeholder="Insira o Código do Pedido">
			<br><br>

            <input type="submit" value="Excluir">
			&nbsp;&nbsp;&nbsp; &nbsp;&nbsp; <!--Linha pra separação dos botões -->
            <input type="reset" value="Limpar">
		</p>
    </form>
		
		<a href="pedido.php">
			<center><input type="button" value="Voltar"></center>
		</a>
	</body>
</html>