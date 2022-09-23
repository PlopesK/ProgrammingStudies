<html lang="pt-BR">
	<head>
		<title>Lista de Clientes</title>
		<style type="text/css">
					
			input[type="button"] {
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
			
		</style>
		<meta charset="utf-8">
	</head>
	<body>
		<font size= "5" face= "Sans Serif" color= "#172778">
			<H1><center> Lista de Clientes</center></H1>
		</font>
		
		<div align="center">
		<table border="1" cellpadding="0" cellspacing="0" width="90%">
			<tr>
				<td width="10%" bgcolor="#EEEEEE" align="center">
				<p align="center"><b>
				<a href="lista_cli.php?ordem=cli_cpf">CPF</a></b></td>
				
				<td width="25%" bgcolor="#EEEEEE" align="center"><b>
				<a href="lista_cli.php?ordem=cli_nome">Nome</a></b></td>
				
				<td width="40%" bgcolor="#EEEEEE" align="center"><b>
				</td>
			</tr>
			
			<?php
				require_once "conexao.php";
				mysql_select_db("mercado_gp");
				if (isset($_GET["ordem"]))
					$ordem=$_GET["ordem"];
				else
					$ordem="cli_cpf";
					$sql1="SELECT * FROM cliente ORDER BY $ordem";
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
		<a href="cliente.php">
			<center><input type="button" value="Voltar"></center>
		</a>
	</body>
</html>