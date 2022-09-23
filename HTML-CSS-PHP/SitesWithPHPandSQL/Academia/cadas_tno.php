<html lang="pt-BR">
	<head>
		<title>Cadastro do Treino</title>
		<style type="text/css">
			.card {
				   border: 4px solid #A0012E;
				   background-color: #DF5078;
				   border-radius: 10px;
				   height: 500px;
				   text-align: center;
				   color: #A0012E;
				   font-size: 30px;
				   }
					
			input[type="button"], form input[type="reset"], form input[type="submit"] 
			{
				   border: 2px solid #A0012E;
				   background-color: #DF5078;
				   border-radius: 10px;
				   height: 50px;
				   width: 300px;
				   text-align: center;
				   font-size: 20px;
				   color: #A0012E;
				   cursor: pointer;
			}
			
			input[type="text"], form input[type="date"]
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
    <font size= "5" face= "Sans Serif" color= "#A0012E">
		<H1><center> Cadastro do Treino</center></H1>
		<H5><center> Insira as informações abaixo para que o cadastro seja bem sucedido</center></H5>
	</font>
    <br>
	
	<form action="ScriptCadasTreino.php" method="POST">
		<p class="card">
			<br>
			
			<label for="aluno">Selecione o <u>Aluno:</u></label>
				<select name="aluno" id="select">
					<?php require("conexao.php");
						mysql_select_db("academia_gp");
						$consulta=mysql_query("SELECT alu_rg, alu_nome  FROM aluno");
						while ($dados = mysql_fetch_array($consulta))
						{
							echo("<option value='".$dados['alu_rg']."'>".$dados['alu_nome']."</option>");
						}
					?>
				</select>
			<br /><br />
			
			<label for="treinador">Selecione o <u>Treinador:</u></label>
				<select name="treinador" id="select">
					<?php require("conexao.php");
						mysql_select_db("academia_gp");
						$consulta=mysql_query("SELECT tre_rg, tre_nome  FROM treinador");
						while ($dados = mysql_fetch_array($consulta))
						{
							echo("<option value='".$dados['tre_rg']."'>".$dados['tre_nome']."</option>");
						}
					?>
				</select>
			<br /><br />
			
			<label for="tipo">Selecione o <u>Tipo:</u></label>
				<select name="tipo" id="select">
					<?php require("conexao.php");
						mysql_select_db("academia_gp");
						$consulta=mysql_query("SELECT tip_cod, tip_desc  FROM tipo");
						while ($dados = mysql_fetch_array($consulta))
						{
							echo("<option value='".$dados['tip_cod']."'>".$dados['tip_desc']."</option>");
						}
					?>
				</select>
			<br /><br />
			
			<input type="text" name="hora" placeholder="Insira o Horário do Treino (HH:MM:SS)">
			<br><br>
			
            <input type="date" name="data" min="2000-28-31" max="2045-12-31">
			<br><br>

            <input type="submit" value="Cadastrar">
			&nbsp;&nbsp;&nbsp; &nbsp;&nbsp; <!--Linha pra separação dos botões -->
            <input type="reset" value="Limpar">
		</p>
    </form>
		
		<a href="treino.php">
			<center><input type="button" value="Voltar"></center>
		</a>
	</font>
	</body>
</html>