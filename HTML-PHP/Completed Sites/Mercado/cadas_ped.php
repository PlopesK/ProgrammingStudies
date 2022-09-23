<html lang="pt-BR">
	<head>
		<title>Cadastro do Pedido</title>
		<style type="text/css">
			.card {
				   border: 4px solid #F7003B;
				   background-color:#F6D0D9;
				   border-radius: 10px;
				   height: 400px;
				   text-align: center;
				   font-size: 30px;
				   }
					
			input[type="button"], form input[type="submit"]
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
			
			select
			{
				font-size: 20px;
				width: 200px;
				height: 40px;
			}
			
		</style>
		<meta charset="utf-8">
	</head>
	<body>
    <font size= "5" face= "Sans Serif" color= "#F7003B">
		<H1><center> Cadastro de Pedidos </center></H1>
	</font>
		<form method="post" action="ScriptCadasPedido.php">
			<font size= "5" face= "Sans Serif" color= "#F7003B">
				<p class ="card">
					<br>
					<input type="text" name="codigo" placeholder="Insira o Código do Pedido">
					<br><br>
					
					<label for="cliente">Selecione o <u>Cliente:</u></label>
					<select name="cliente" id="select">
						<?php require("conexao.php");
							mysql_select_db("mercado_gp");
							$consulta=mysql_query("SELECT cli_cpf, cli_nome  FROM cliente");
							while ($dados = mysql_fetch_array($consulta))
							{
								echo("<option value='".$dados['cli_cpf']."'>".$dados['cli_nome']."</option>");
							}
						?>
					</select>
					<br /><br />
					
					<label for="produto">Selecione o <u>Produto:</u></label>
					<select name="produto" id="select">
						<?php require("conexao.php");
							mysql_select_db("mercado_gp");
							$consulta=mysql_query("SELECT pro_cod, pro_nome FROM produto");
							while ($dados = mysql_fetch_array($consulta))
							{
								echo("<option value='".$dados['pro_cod']."'>".$dados['pro_nome']."</option>");
							}
						?>	
					</select>
					
					<br /><br />
					<label for="funcionario">Selecione o <u>Funcionario:</u></label>
					<select name="funcionario" id="select">
						<?php require("conexao.php");
							mysql_select_db("mercado_gp");
							$consulta=mysql_query("SELECT fun_cpf, fun_nome  FROM funcionario");
							while ($dados = mysql_fetch_array($consulta))
							{
								echo("<option value='".$dados['fun_cpf']."'>".$dados['fun_nome']."</option>");
							}
						?>
					</select> 
					<br /><br />
					
					<input type="submit" value="Cadastrar">
				</p>
			</font>
		</form>
		
		<a href="pedido.php">
			<center><input type="button" value="Voltar"></center>
		</a>
	</body>
</html>
		