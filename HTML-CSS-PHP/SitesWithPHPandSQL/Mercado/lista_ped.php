<html lang="pt-BR">
	<head>
		<title>Lista de Pedidos</title>
		<style type="text/css">
					
			input[type="button"]
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
			
		</style>
		<meta charset="utf-8">
	</head>
	<body>
		<font size= "5" face= "Sans Serif" color= "#F7003B">
			<H1><center> Lista de Pedidos</center></H1>
		</font>
		
		<div align="center">
		<table border="1" cellpadding="0" cellspacing="0" width="90%">
			<tr>
				<td width="10%" bgcolor="#EEEEEE" align="center">
				<p align="center"><b>
				<a href="lista_ped.php?ordem=ped_cod">Código</a></b></td>
				
				<td width="15%" bgcolor="#EEEEEE" align="center"><b>
				<a href="lista_ped.php?ordem=cli_cpf">Cliente</a></b></td>
				
				<td width="25%" bgcolor="#EEEEEE" align="center"><b>
				<a href="lista_ped.php?ordem=pro_cod">Produto</a></b></td>
				
				<td width="35%" bgcolor="#EEEEEE" align="center"><b>
				<a href="lista_ped.php?ordem=fun_cpf">Funcionário</a></b></td>
				
			</tr>
			
			<?php
				require_once "conexao.php";
				mysql_select_db("mercado_gp");
				if (isset($_GET["ordem"]))
					$ordem=$_GET["ordem"];
				else
					$ordem="ped_cod";
					$sql1="SELECT * FROM pedido ORDER BY $ordem";
					$res=mysql_query($sql1);
						
				while($registro=mysql_fetch_row($res))
					{
						$codigo=$registro[0];
						$cliente=$registro[1];
						$produto=$registro[3];
						$funcionario=$registro[2];
						echo"<tr>";
						echo"<td align='center width'10%'>$codigo</td>";
						echo"<td align='center width'25%'>$cliente</td>";
						echo"<td align='center width'25%'>$produto</td>";
						echo"<td align='center width'40%'>$funcionario</td>";
						echo"</tr>";
					}
				mysql_close($conexao);
			?>
		</table></center></div>
		
		<br><br>
		<a href="pedido.php">
			<center><input type="button" value="Voltar"></center>
		</a>
	</body>
</html>