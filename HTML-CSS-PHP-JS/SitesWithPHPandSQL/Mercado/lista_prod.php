<html lang="pt-BR">
	<head>
		<title>Lista de Produtos</title>
		<style type="text/css">
					
			input[type="button"] {
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
			
		</style>
		<meta charset="utf-8">
	</head>
	<body>
		<font size= "5" face= "Sans Serif" color= "#172778">
			<H1><center> Lista de Produtos</center></H1>
		</font>
		
		<div align="center">
		<table border="1" cellpadding="0" cellspacing="0" width="90%">
			<tr>
				<td width="10%" bgcolor="#EEEEEE" align="center">
				<p align="center"><b>
				<a href="lista_prod.php?ordem=pro_cod">Código</a></b></td>
				
				<td width="25%" bgcolor="#EEEEEE" align="center"><b>
				<a href="lista_prod.php?ordem=pro_nome">Nome</a></b></td>
				
				<td width="25%" bgcolor="#EEEEEE" align="center"><b>
				<a href="lista_prod.php?ordem=pro_desc">Descrição</a></b></td>
				
				<td width="25%" bgcolor="#EEEEEE" align="center"><b>
				<a href="lista_prod.php?ordem=pro_preco">Preço</a></b></td>
				
				<td width="25%" bgcolor="#EEEEEE" align="center"><b>
				<a href="lista_prod.php?ordem=pro_quantid">Quantidade</a></b></td>
				</td>
			</tr>
			
			<?php
				require_once "conexao.php";
				mysql_select_db("mercado_gp");
				if (isset($_GET["ordem"]))
					$ordem=$_GET["ordem"];
				else
					$ordem="pro_cod";
					$sql1="SELECT * FROM produto ORDER BY $ordem";
					$res=mysql_query($sql1);
						
				while($registro=mysql_fetch_row($res))
					{
						$cod=$registro[0];
						$nome=$registro[1];
						$desc=$registro[2];
						$preco=$registro[3];
						$quantid=$registro[4];
						echo"<tr>";
						echo"<td width='10%'>";
						echo"<p align='center'>$cod</td>";
						echo"<td align='center width'25%'>$nome</td>";
						echo"<td align='center width'25%'>$desc</td>";
						echo"<td align='center width'25%'>$preco</td>";
						echo"<td align='center width'25%'>$quantid</td>";
						echo"</tr>";
					}
				mysql_close($conexao);
			?>
		</table></center></div>
		
		<br><br>
		<a href="index.html">
			<center><input type="button" value="Voltar"></center>
		</a>
	</body>
</html>