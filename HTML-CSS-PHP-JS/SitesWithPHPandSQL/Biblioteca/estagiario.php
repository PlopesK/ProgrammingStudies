<?php 
    require("conexao.php");
    if(isset($_POST['inserir'])) {
        $nome = $_POST['nome'];
        $cpf = $_POST['cpf'];
        $rg = $_POST['rg'];
        $email = $_POST['email'];
        $telefone = $_POST['telefone'];
        $turno = $_POST['turno'];
        $salario = $_POST['salario'];
        $dias_trabalho = $_POST['dias-trabalho'];
        $bibliotecario = $_POST['bibliotecario'];
        $instituicao = $_POST['instituicao'];
        $inserir = "INSERT INTO estagiario 
        (estagiario_nome, estagiario_cpf, estagiario_rg, estagiario_email,
        estagiario_telefone, estagiario_turno, estagiario_salario,
        estagiario_dias_trabalho, biblio_codigo, instituicao_codigo)
        VALUES ('$nome', '$cpf', '$rg', '$email', '$telefone', '$turno', 
        '$salario', '$dias_trabalho', '$bibliotecario', '$instituicao');";
        mysql_query($inserir);
        unset($_POST['inserir']);
        header("Refresh:0");
    }
    else if(isset($_POST['deletar'])) {
        $selecionado = $_POST['deletar'];
        $deletar = "DELETE FROM estagiario WHERE estagiario_codigo = $selecionado;";
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
            function mascara(i, tipo){
                var v = i.value;
                if(isNaN(v[v.length-1])){
                    i.value = v.substring(0, v.length-1);
                    return;
                }
                switch(tipo) {
                    case 'cpf':
                        i.setAttribute("maxlength", "14");
                        if (v.length == 3 || v.length == 7) i.value += ".";
                        if (v.length == 11) i.value += "-";
                        break;
                    case 'rg':
                        i.setAttribute("maxlength", "12");
                        if (v.length == 2 || v.length == 6) i.value += ".";
                        if (v.length == 10) i.value += "-";
                        break;
                    case 'tel':
                        i.setAttribute("maxlength", "15");
                        if (v.length == 1) {
                            let char = i.value;
                            i.value = '';
                            let ops = "(" + char;
                            i.value += ops;
                        }
                        if (v.length == 3) i.value += ") ";
                        if (v.length == 10) i.value += "-";
                        break;
                    default:
                        break;                
                }
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
			<t><center> Alterações com os Estagiários</center></t>
			<br><br><br><br>
			
			<form method="POST">
				<p class= "formularioesta"> <br> 
					<label for="nome">Nome: </label>
					<input type="text" name="nome"><br>
					<label for="cpf">CPF: </label>
					<input type="text" name="cpf" oninput="mascara(this, 'cpf')"><br>
					<label for="rg">RG: </label>
					<input type="text" name="rg" oninput="mascara(this, 'rg')"><br>
					<label for="email">E-mail: </label>
					<input type="email" name="email"><br>
					<label for="telefone">Telefone: </label>
					<input type="text" name="telefone" oninput="mascara(this, 'tel')"><br>
					<label for="turno">Turno: </label>
					<select name="turno">
						<option value="Manhã">Manhã</option>
						<option value="Tarde">Tarde</option>
						<option value="Noite">Noite</option>
					</select><br>
					<label for="salario">Salário: </label>
					<input type="number" name="salario" min="0"><br>
					<label for="dias-trabalho">Dias de trabalho: </label>
					<select name="dias-trabalho">
						<option value="Segunda à Sexta">Segunda à Sexta</option>
						<option value="Segunda à Sábado">Segunda à Sábado</option>
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
					<label for="instituicao">Instituição: </label>
					<select name="instituicao">
						<?php
							$fk = "SELECT instituicao_codigo, instituicao_nome FROM instituicao ORDER BY instituicao_codigo;";
							$consulta = mysql_query($fk);
							while ($dados = mysql_fetch_array($consulta))
								echo "<option value='".$dados['instituicao_codigo']."'>".$dados['instituicao_codigo']." - ".$dados['instituicao_nome']."</option>";
						?>
					</select><br><br>
					<input type="submit" value="Inserir" name="inserir">
					<input type="reset" value="Redefinir">
					<a href="coisasbiblioteca.php"><input type="button" value="Voltar"></a><br><br>
					
					<l> Será necessário ter dados do <a href="bibliotecario.php"> Bibliotecário </a> </l> <br>
					<l> Será necessário ter dados da <a href="instituicao.php"> Instituição </a> </l> <br>
				</p>
					
				<br><br>
				<div class="lista">
					<table>
						<tr>
							<th>Código</th>
							<th>Nome</th>
							<th>CPF</th>
							<th>RG</th>
							<th>E-mail</th>
							<th>Telefone</th>
							<th>Turno</th>
							<th>Salário</th>
							<th>Dias de Trabalho</th>
							<th>Bibliotecário</th>
							<th>Instituição</th>
							<th>Deletar</th>
						</tr>
						<?php
							$contar = "SELECT COUNT(*) FROM estagiario;";
							$pedido = mysql_fetch_row(mysql_query($contar));
							if($pedido[0] != 0) {
								$selecionar = "SELECT * FROM estagiario;";
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
									echo "<td>R$ ".$linha[7]."</td>";
									echo "<td>".$linha[8]."</td>";
									echo "<td>".$linha[9]."</td>";
									echo "<td>".$linha[10]."</td>";
									echo "<td><button name='deletar' value='".$linha[0]."'>Deletar</button>";
									echo "</tr>";
								}
							}
							else
								echo "<tr><td colspan='12'>Não existem estágiarios cadastrados ainda.</td></tr>";
							mysql_close($conexao);
						?>
					</table>
				</div>
			</form>
		</div>
    </body>
</html>