<?php
    $dbHost = 'localhost';
    $dbUsername = 'root';
    $dbSenha = '';
    $dbName = 'cadastro';

    $conexao = new mysqli($dbHost, $dbUsername, $dbSenha, $dbName);

    if($conexao->connect_errno)
    {
        echo "Erro";
    }
    else
    {
        echo "Conectado com sucesso";
    }

?>