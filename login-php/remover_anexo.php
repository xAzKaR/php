<?php
require 'banco.php';

$anexo = buscar_anexo($conexao, $_GET['matricula']);

remover_anexo($conexao, $anexo['id']);

unlink('anexos/' . $anexo['arquivo']);

#header('Location: sistema.php?id=' . $anexo['tarefa_id']);

header('Location: tarefa.php?matricula=' . $anexo['tarefa_id']);

 ?>