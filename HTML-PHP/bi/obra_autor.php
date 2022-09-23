<?php 
    require("conexao.php");
    if(isset($_POST['inserir'])) {
        $autor = $_POST['autor'];
        $livro = $_POST['livro'];
        $test = "SELECT * FROM obra_autor WHERE autor_codigo = $autor AND livro_codigo = $livro;";
        $test_query = mysql_num_rows(mysql_query($test));
        if($test_query == 0) {
            $inserir = "INSERT INTO obra_autor (autor_codigo, livro_codigo)
            VALUES ('$autor', '$livro');";
            mysql_query($inserir);
            unset($_POST['inserir']);
        }
        header("Refresh:0");
    }
    else if(isset($_POST['deletar'])) {
        $del_livro = $_POST['deletar'];
        $deletar = "DELETE FROM obra_autor WHERE codigo = $del_livro;";
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
			<t><center> Alterações com as Obras dos Autores</center></t>
			<br><br><br><br>
			
			<form method="POST">
				<p class= "formulariocat"> <br>
					<label for="autor">Autor: </label>
					<select name="autor">
						<?php
							$fk = "SELECT autor_codigo, autor_nome FROM autor ORDER BY autor_nome ASC;";
							$consulta = mysql_query($fk);
							while ($dados = mysql_fetch_array($consulta))
								echo "<option value='".$dados['autor_codigo']."'>".$dados['autor_nome']."</option>";
						?>
					</select><br>
					<label for="livro">Livro: </label>
					<select name="livro">
						<?php
							$fk = "SELECT livro_codigo, livro_nome FROM livro ORDER BY livro_codigo;";
							$consulta = mysql_query($fk);
							while ($dados = mysql_fetch_array($consulta))
								echo "<option value='".$dados['livro_codigo']."'>".$dados['livro_codigo']." - ".$dados['livro_nome']."</option>";
						?>
					</select><br><br>
					
					<input type="submit" value="Inserir" name="inserir">
					<a href="coisaslivro.php"><input type="button" value="Voltar"></a><br><br>
					
					<l> Será necessário ter dados do <a href="autor.php"> Autor </a> </l> <br>
					<l> Será necessário ter dados do <a href="livro.php"> Livro </a> </l> <br>
				</p>
				
				<ul>
				<?php
					$contar = "SELECT COUNT(*) FROM obra_autor;";
					$pedido = mysql_fetch_row(mysql_query($contar));
					$autores = array();
					if($pedido[0] != 0) {
						$selecionar = "SELECT obra_autor.codigo, autor.autor_nome, obra_autor.autor_codigo,
						obra_autor.livro_codigo, livro.livro_nome FROM obra_autor 
						INNER JOIN autor ON obra_autor.autor_codigo = autor.autor_codigo 
						INNER JOIN livro ON obra_autor.livro_codigo = livro.livro_codigo 
						ORDER BY autor.autor_nome ASC;";
						$query = mysql_query($selecionar);
						while($linha = mysql_fetch_row($query)) {
							if(!in_array($linha[1], $autores)) {
								echo "<h3>".$linha[1]."</h3>";
								array_push($autores, $linha[1]);
							}
							echo "<li>";
							echo $linha[3]." - ".$linha[4];
							echo "<br><button name='deletar' value='".$linha[0]."'>Deletar</button>";
						}
					}
					else
						echo "<tr><td colspan='4'>Não existem conjuntos cadastrados ainda.</td></tr>";
					mysql_close($conexao);
				?>
				</ul><br>
			</form>
		</div>
    </body>
</html>