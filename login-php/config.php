<?php

    $dbHost = '127.0.0.1';
    $dbUsername = 'Azk';
    $dbPassword = 'azk123';
    $dbName = 'academia';
    
    $conexao = new mysqli($dbHost,$dbUsername,$dbPassword,$dbName);
/*
if ($conexao->connect_errno) {
    echo "Erro";
} else {
    echo "Conexão efetuada com sucesso";
}
*/
?>