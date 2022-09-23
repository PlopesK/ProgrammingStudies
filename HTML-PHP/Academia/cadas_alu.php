<html lang="pt-BR">
	<head>
		<title>Cadastro do Aluno</title>
		<style type="text/css">
			.card {
				   border: 4px solid #A51201;
				   background-color: #FB8050;
				   border-radius: 10px;
				   height: 300px;
				   text-align: center;
				   font-size: 30px;
				   }
					
			input[type="button"], form input[type="reset"], form input[type="submit"] 
			{
				   border: 2px solid #A51201;
				   background-color: #FB8050;
				   border-radius: 10px;
				   height: 50px;
				   width: 300px;
				   text-align: center;
				   font-size: 20px;
				   color: #A51201;
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
    <font size= "5" face= "Sans Serif" color= "#A51201">
		<H1><center> Cadastro do Aluno</center></H1>
		<H5><center> Insira as informações abaixo para que o cadastro seja bem sucedido</center></H5>
	</font>
    <br><br>
	
	<form action="ScriptCadasAluno.php" method="POST">
		<p class="card">
			<br><br>
            <input type="text" name="nome" placeholder="Insira o Nome do Aluno">
			<br>
            <input type="text" name="rg" placeholder="Insira o RG do Aluno">
			<br><br><br>

            <input type="submit" value="Cadastrar">
			&nbsp;&nbsp;&nbsp; &nbsp;&nbsp; <!--Linha pra separação dos botões -->
            <input type="reset" value="Limpar">
		</p>
    </form>
		
		<a href="aluno.php">
			<center><input type="button" value="Voltar"></center>
		</a>
	</font>
	</body>
</html>