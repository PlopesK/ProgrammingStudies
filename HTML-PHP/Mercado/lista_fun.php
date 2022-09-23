<html lang="pt-BR">
	<head>
		<title>Lista de Funcionarios</title>
		<style type="text/css">
					
			input[type="button"] {
				   border: 2px solid #137113;
				   background-color: #6CF96C;
				   border-radius: 10px;
				   height: 50px;
				   width: 300px;
				   text-align: center;
				   font-size: 20px;
				   color: #137113;
				   cursor: pointer;
			}
			
		</style>
		<meta charset="utf-8">
	</head>
	<body>
		<font size= "5" face= "Sans Serif" color= "#137113">
			<H1><center> Lista de Funcionários</center></H1>
		</font>
		
		<div align="center">
		<table border="1" cellpadding="0" cellspacing="0" width="90%">
			<tr>
				<td width="10%" bgcolor="#EEEEEE" align="center">
				<p align="center"><b>
				<a href="lista_fun.php?ordem=fun_cpf">CPF</a></b></td>
				
				<td width="25%" bgcolor="#EEEEEE" align="center"><b>
				<a href="lista_fun.php?ordem=fun_nome">Nome</a></b></td>
				
				<td width="40%" bgcolor="#EEEEEE" align="center"><b>
				</td>
			</tr>
			
			<?php
				require_once "conexao.php";
				mysql_select_db("mercado_gp");
				if (isset($_GET["ordem"]))
					$ordem=$_GET["ordem"];
				else
					$ordem="fun_cpf";
					$sql1="SELECT * FROM funcionario ORDER BY $ordem";
					$res=mysql_query($sql1);
						
				while($registro=mysql_fetch_row($res))
					{
						$cpf=$registro[0];
						$nome=$registro[1];
						echo"<tr>";
						echo"<td width='10%'>";
						echo"<p align='center'>$cpf</td>";
						echo"<td align='center width'25%'>$nome</td>";
						echo"</tr>";
					}
				mysql_close($conexao);
			?>
		</table></center></div>
		
		<br><br>
		<a href="funcionario.php">
			<center><input type="button" value="Voltar"></center>
		</a>
	</body>
</html>