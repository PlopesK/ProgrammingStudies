<html lang="pt-BR">
	<head>
		<title>Pedido</title>
		<style type="text/css">
			.card {
				   border: 4px solid #F7003B;
				   background-color:#F6D0D9;
				   border-radius: 10px;
				   height: 300px;
				   text-align: center;
				   font-size: 30px;
				   }
					
			input[type="button"] {
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
		<H1><center> Selecione qual ação você deseja realizar </center></H1>
	</font>
    <br><br><br>
	
	<font face= "Sans Serif" color= "#F7003B">
		<p class ="card">
			<TR>
				<br>
				<TH>Ações com o <u>Pedido</u><br><br><br> </TH>
					
				<TH><a href="cadas_ped.php">
					<input type="button" value="Cadastrar Pedido">
				</a>
				
				<TH> &nbsp;&nbsp;&nbsp; &nbsp;&nbsp;&nbsp;&nbsp;</TH> <!--Linha pra separação dos botões -->
				
				<TH> <a href="exclu_ped.php">
					<input type="button" value=" Excluir Pedido">
				</a> <br><br> </TH>

				<TH> <a href="lista_ped.php">
					<input type="button" value=" Ver a Lista de Pedidos">
				</a> <br><br> </TH>
			</TR>
		</p>
	<br>
		
		<a href="index.html">
			<center><input type="button" value="Voltar"></center>
		</a>
	</font>
	</body>
</html>