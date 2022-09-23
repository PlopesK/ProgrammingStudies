<?php 
    require("conexao.php");
    if(isset($_POST['inserir'])) {
        $nome = $_POST['nome'];
        $isbn = $_POST['isbn'];
        $descricao = $_POST['descricao'];
        $num_paginas = $_POST['num-paginas'];
		$quantidade = $_POST['quantidade'];
        $editora = $_POST['editora'];
        $categoria = $_POST['categoria'];
        $inserir = "INSERT INTO livro 
        (livro_isbn, livro_nome, livro_descricao, livro_num_paginas,
        livro_quantidade, editora_codigo, categoria_codigo)
        VALUES ('$isbn', '$nome', '$descricao', '$num_paginas', 0,
        '$editora', '$categoria');";
        mysql_query($inserir);
        unset($_POST['inserir']);
        header("Refresh:0");
    }
    else if(isset($_POST['deletar'])) {
        $selecionado = $_POST['deletar'];
        $deletar = "DELETE FROM livro WHERE livro_codigo = $selecionado;";
        mysql_query($deletar);
        header("Refresh:0");
    }

    $livro = mysql_query("SELECT livro_codigo FROM livro;");
    while($l = mysql_fetch_row($livro)) {
        $qtd = mysql_query("SELECT COUNT(*) FROM exemplar WHERE livro_codigo = ".$l[0].";");
        $q = mysql_fetch_row($qtd);
        mysql_query("UPDATE livro SET livro_quantidade = ".$q[0]." WHERE livro_codigo = ".$l[0].";");
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
			<t><center> Alterações com os Livros</center></t>
			<br><br><br><br>
			
			<form method="POST">
				<p class= "formulariolivro"> <br>
					<label for="isbn">ISBN: </label>
					<input type="text" name="isbn" oninput="mascara(this)"><br>
					<label for="nome">Nome: </label>
					<input type="text" name="nome"><br><br>
					<label for="descricao">Descrição: </label>
					<textarea name="descricao" rows="4" cols="25" placeholder="Escreva aqui"></textarea><br><br>
					<label for="num-paginas">Número de Páginas: </label>
					<input type="number" name="num-paginas"><br>
					<label for="num-paginas">Quantidade: </label>
					<input type="number" name="quantidade"><br>
					<label for="editora">Editora: </label>
					<select name="editora">
						<?php
							$fk = "SELECT editora_codigo, editora_nome FROM editora ORDER BY editora_nome ASC;";
							$consulta = mysql_query($fk);
							while ($dados = mysql_fetch_array($consulta))
								echo "<option value='".$dados['editora_codigo']."'>".$dados['editora_nome']."</option>";
						?>
					</select><br>
					<label for="categoria">Categoria: </label>
					<select name="categoria">
						<?php
							$fk = "SELECT categoria_codigo, categoria_descricao FROM categoria ORDER BY categoria_descricao ASC;";
							$consulta = mysql_query($fk);
							while ($dados = mysql_fetch_array($consulta))
								echo "<option value='".$dados['categoria_codigo']."'>".$dados['categoria_descricao']."</option>";
						?>
					</select><br><br>
					<input type="submit" value="Inserir" name="inserir">
					<input type="reset" value="Redefinir">
					<a href="coisaslivro.php"><input type="button" value="Voltar"></a><br><br>
					
					<l> Será necessário ter dados da <a href="categoria.php"> Categoria </a> </l> <br>
					<l> Será necessário ter dados da <a href="editora.php"> Editora </a> </l> <br>
				</p>
				
				<br><br>
				<div class="lista">
					<table>
						<tr>
							<th>Código</th>
							<th>ISBN</th>
							<th>Nome</th>
							<th>Descrição</th>
							<th>Número de Páginas</th>
							<th>Quantidade</th>
							<th>Editora</th>
							<th>Categoria</th>
							<th>Deletar</th>
						</tr>
						<?php
							$contar = "SELECT COUNT(*) FROM livro;";
							$pedido = mysql_fetch_row(mysql_query($contar));
							if($pedido[0] != 0) {
								$selecionar = "SELECT * FROM livro;";
								$query = mysql_query($selecionar);
								while($linha = mysql_fetch_row($query)) {
									echo "<tr>";
									echo "<td>".$linha[0]."</td>";
									echo "<td>".$linha[1]."</td>";
									echo "<td>".$linha[2]."</td>";
									echo "<td>".$linha[3]."</td>";
									echo "<td>".$linha[4]."</td>";
									echo "<td>".$linha[5]."</td>";
									echo "<td>".$linha[6]."</td>";
									echo "<td>".$linha[7]."</td>";
									echo "<td><button name='deletar' value='".$linha[0]."'>Deletar</button>";
									echo "</tr>";
								}
							}
							else
								echo "<tr><td colspan='10'>Não existem livros cadastrados ainda.</td></tr>";
							mysql_close($conexao);
						?>
					</table>
				</div>
			</form>
		</div>
    </body>
</html>