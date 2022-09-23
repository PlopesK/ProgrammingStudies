<?php

	$conexao = mysql_connect("localhost","root","");
	if (!$conexao) {
		die('Nao foi possivel conectar ao banco de dados.
		Erro detectado:' . mysql_error());
	}
	mysql_set_charset('utf8',$conexao);

?>
