<?php

    $conexao = mysql_connect("localhost","root","");
    
    if (!$conexao) {
        die('Não foi possível conectar ao Banco de Dados.
        Erro detectado:' . mysql_error());
    }

    mysql_set_charset('utf8', $conexao);

?>