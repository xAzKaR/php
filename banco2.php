<?php

$bdServidor = '127.0.0.1'
$bdUsuario = 'sistema';
$bdSenha = '123456';
$bdBanco = 'tarefas';

$conexao = mysqli_connect($bdServidor, $bdUsuario, $bdSenha, $bdBanco);

if(mysqli_connect_errno($conexao)){
    echo 'Problemas para conectar no banco. Erro:';
    echo mysqli_connect_error();
    die();
}

function buscar_tarefas($conexao){
    $sqlbusca = 'SELECT * FROM tarefas';
    $resultado = mysqli_query($conexao,$sqlBusca);

    $tarefas = [];

    while($tarefa = mysql_fetch_assoc($resultado)){
        $tarefas[] = $tarefa;
    }
    
    return $tarefas;
}

?>