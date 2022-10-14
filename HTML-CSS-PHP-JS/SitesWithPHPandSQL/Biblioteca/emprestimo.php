<?php 
    require("conexao.php");
    if(isset($_POST['inserir'])) {
        $descricao = $_POST['descricao'];
        $valor_diario = $_POST['valor_diario'];
        $data_devolucao = $_POST['data_devolucao'];
        $exemplar = $_POST['exemplar'];
        $bibliotecario = $_POST['bibliotecario'];
        $cliente = $_POST['cliente'];
        $inserir = "INSERT INTO emprestimo
        (emprestimo_descricao, emprestimo_valor_diario_multa, emprestimo_data_devolucao,
        emprestimo_valor_multa_total, exemplar_codigo, biblio_codigo, cliente_codigo)
        VALUES ('$descricao', $valor_diario, '$data_devolucao', 0,
        $exemplar, $bibliotecario, $cliente);";
        mysql_query($inserir);
        unset($_POST['inserir']);
        header("Refresh:0");
    }
    else if(isset($_POST['deletar'])) {
        $selecionado = $_POST['deletar'];
        $deletar = "DELETE FROM emprestimo WHERE emprestimo_codigo = $selecionado;";
        mysql_query($deletar);
        header("Refresh:0");
    }

    $datas_devolucao = mysql_query("SELECT emprestimo_codigo, emprestimo_data_devolucao, emprestimo_valor_diario_multa FROM emprestimo;");
    while($r = mysql_fetch_row($datas_devolucao)) {
        $d = mysql_query("SELECT DATEDIFF(NOW(), '".$r[1]."');");
        $diff = mysql_fetch_row($d);
        //echo "SELECT DATEDIFF(NOW(), '".$r[0]".');";
        if($diff[0] > 0) {
            $result = $r[2] * $diff[0];
            mysql_query("UPDATE emprestimo SET emprestimo_valor_multa_total = ".$result." WHERE emprestimo_codigo = ".$r[0].";");
        }
    }
?>

<!DOCTYPE html>
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
			<t><center> <img src="compra.png" width="90" alt="" loading="lazy">  Alterações com os Empréstimos
			<img src="compra.png" width="90" alt="" loading="lazy"> </center></t> 
			<br><br><br><br>
			
			<form method="POST">
				<p class= "formularioemp"> <br>
					<label for="descricao">Descrição: </label>
					<input type="text" name="descricao"><br>
					<label for="valor_diario">Valor diário da multa: </label>
					<input type="number" name="valor_diario"><br>
					<label for="data_devolucao">Data de devolução: </label>
					<input type="date" name="data_devolucao"><br>
					<label for="exemplar">Exemplar: </label>
					
					<select name="exemplar">
						<?php
							$fk = "SELECT exemplar_codigo, exemplar_descricao, livro_codigo FROM exemplar ORDER BY exemplar_codigo;";
							$consulta = mysql_query($fk);
							while ($dados = mysql_fetch_array($consulta))
								echo "<option value='".$dados['exemplar_codigo']."'>".$dados['exemplar_codigo']." - ".$dados['livro_codigo']." - ".$dados['exemplar_descricao']."</option>";
						?>
					</select><br>
					
					<label for="bibliotecario">Bibliotecário: </label>
					
					<select name="bibliotecario">
						<?php
							$fk = "SELECT biblio_codigo, biblio_nome FROM bibliotecario ORDER BY biblio_codigo;";
							$consulta = mysql_query($fk);
							while ($dados = mysql_fetch_array($consulta))
								echo "<option value='".$dados['biblio_codigo']."'>".$dados['biblio_codigo']." - ".$dados['biblio_nome']."</option>";
						?>
					</select><br>
					<label for="cliente">Cliente: </label>
					
					<select name="cliente">
						<?php
							$fk = "SELECT cliente_codigo, cliente_nome FROM cliente ORDER BY cliente_codigo;";
							$consulta = mysql_query($fk);
							while ($dados = mysql_fetch_array($consulta))
								echo "<option value='".$dados['cliente_codigo']."'>".$dados['cliente_codigo']." - ".$dados['cliente_nome']."</option>";
						?>
					</select><br><br>       
					<input type="submit" value="Inserir" name="inserir">
					<input type="reset" value="Redefinir">
					<a href="index.html"><input type="button" value="Voltar"></a><br><br>
					
					<l> Será necessário ter dados do <a href="cliente.php"> Cliente </a> </l> <br>
					<l> Será necessário ter dados do <a href="bibliotecario.php"> Bibliotecário </a> </l> <br>
					<l> Será necessário ter dados do <a href="exemplar.php"> Exemplar </a><br> </l>
				</p>
				
				<br><br>
				<div class="lista">
				<table>
					<tr>
						<th>Código</th>
						<th>Descrição </th>
						<th>Valor diário da multa </th>
						<th>Data de devolução </th>
						<th>Valor total da multa </th>
						<th>Exemplar </th>
						<th>Bibliotecário </th>
						<th>Cliente </th>
						<th>Deletar</th>
					</tr>
					<?php
						$contar = "SELECT COUNT(*) FROM emprestimo;";
						$pedido = mysql_fetch_row(mysql_query($contar));
						if($pedido[0] != 0) {
							$selecionar = "SELECT * FROM emprestimo;";
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
							echo "<tr><td colspan='9'>Não existem emprestimos cadastrados ainda.</td></tr>";
						mysql_close($conexao);
					?>
				</table>
				</div>
			</form>
		</div>
    </body>
</html>