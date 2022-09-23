<?php 
    require("conexao.php");
    if(isset($_POST['inserir'])) {
        $descricao = $_POST['descricao'];
        $estante = $_POST['estante'];
        $inserir = "INSERT INTO categoria (categoria_descricao, estante_codigo)
        VALUES ('$descricao', '$estante');";
        mysql_query($inserir);
        unset($_POST['inserir']);
        header("Refresh:0");
    }
    else if(isset($_POST['deletar'])) {
        $selecionado = $_POST['deletar'];
        $deletar = "DELETE FROM categoria WHERE categoria_codigo = $selecionado;";
        mysql_query($deletar);
        header("Refresh:0");
    }
?>
<html lang="pt-br">
	<head>
		 <meta charset="UTF-8">
		 <meta http-equiv="X-UA-Compatible" content="IE=edge">
		 <meta name="viewport" content="width=device-width, initial-scale=1.0">
		 <link rel="stylesheet" type="text/css" href="estilo.css" /> 
		 <link rel="shortcut icon" href="imagens/icone.ico" />	
		 <title>Biblioteca</title>	
		 
		<script type="text/javascript">
            function mascara(i){
                var v = i.value;
                if(isNaN(v[v.length-1])){
                    i.value = v.substring(0, v.length-1);
                    return;
                }

                i.setAttribute("maxlength", "17");
                if (v.length == 3 || v.length == 5 || v.length == 8 || v.length == 15) i.value += "-";
            }
		</script>
	</head>
	<body link="#81ECC5" style="background-color:#7ed6df;">
		<!-- Cabeçalho -->
		<div class="header">
			<img src="icone.png" width="90" alt="" loading="lazy"> 
		</div>
		
		<div class="heletras">
			&nbsp;&nbsp;&nbsp; &nbsp;&nbsp;
			<a href="index.html">
				<b><u>Home</u></b>
			</a> &nbsp;&nbsp; &nbsp;&nbsp; / &nbsp;&nbsp; &nbsp;&nbsp;
					
			<a href="cliente.php">
				<b><u>Cliente</u></b>
			</a> &nbsp;&nbsp; &nbsp;&nbsp; / &nbsp;&nbsp; &nbsp;&nbsp;
			
			<a href="coisaslivro.php">
				<b><u>Livro</u></b>
			</a> &nbsp;&nbsp; &nbsp;&nbsp; / &nbsp;&nbsp; &nbsp;&nbsp;
					
			<a href="coisasbiblioteca.php">
				<b><u>Biblioteca</u></b>
			</a> &nbsp;&nbsp; &nbsp;&nbsp; / &nbsp;&nbsp; &nbsp;&nbsp;
					
			<a href="emprestimo.php">
				<b><u>Empréstimo</u></b>
			</a>
		</div>
			
		<!-- Início -->
		<div class= "alinhamento">
			<br><br><br><br><br>
			<t><center> Alterações com as Categorias</center></t>
			<br><br><br><br>
			
        <form method="POST">
			<p class= "formulariocat"> <br>
				<label for="descricao">Descrição: </label>
				<input type="text" name="descricao"><br>
				<label for="estante">Estante: </label>
				<select name="estante">
					<?php
						$fk = "SELECT estante_codigo, estante_descricao FROM estante ORDER BY estante_codigo;";
						$consulta = mysql_query($fk);
						while ($dados = mysql_fetch_array($consulta))
							echo "<option value='".$dados['estante_codigo']."'>".$dados['estante_codigo']." - ".$dados['estante_descricao']."</option>";
					?>
				</select><br><br>
				
				<input type="submit" value="Inserir" name="inserir">
				<input type="reset" value="Redefinir">
				<a href="coisaslivro.php"><input type="button" value="Voltar"></a> <br><br>
				
				<l> Será necessário ter dados da <a href="estante.php"> Estante </a> </l> <br>
			</p>
			
            <br><br>
			<div class="lista">
				<table>
					<tr>
						<th>Código</th>
						<th>Descrição</th>
						<th>Estante</th>
						<th>Deletar</th>
					</tr>
					<?php
						$contar = "SELECT COUNT(*) FROM categoria;";
						$pedido = mysql_fetch_row(mysql_query($contar));
						if($pedido[0] != 0) {
							$selecionar = "SELECT categoria.categoria_codigo, categoria.categoria_descricao, 
							categoria.estante_codigo, estante.estante_descricao 
							FROM categoria INNER JOIN estante ON categoria.estante_codigo = estante.estante_codigo 
							ORDER BY categoria.categoria_codigo;";
							$query = mysql_query($selecionar);
							while($linha = mysql_fetch_row($query)) {
								echo "<tr>";
								echo "<td>".$linha[0]."</td>";
								echo "<td>".$linha[1]."</td>";
								echo "<td>".$linha[2]." - ".$linha[3]."</td>";
								echo "<td><button name='deletar' value='".$linha[0]."'>Deletar</button>";
								echo "</tr>";
							}
						}
						else
							echo "<tr><td colspan='4'>Não existem categorias cadastradas ainda.</td></tr>";
						mysql_close($conexao);
					?>
				</table>
			</div>
        </form>
    </body>
</html>