<?php

    $host = 'localhost';
    $usuario = 'root';
    $senha = '';
    $banco = 'loja_almodas';

    $conexao = new MYSQLI($host, $usuario, $senha, $banco);

    if($conexao -> connect_errno){
        echo "Erro de conexão com o banco de dados";
    }
    
    else {
        echo "Conexão efetuado com sucesso!";
    }

?>