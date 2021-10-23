<?php

    require 'banco.php';

    remover_tarefa($conexao,$_GET['matricula']);

    #header('Location: tarefas.php');
    header('Location: sistema.php');

?>