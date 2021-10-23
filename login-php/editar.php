<?php

//session_start();

// Requer que o arquivo funcione corretamente ou esteja presenta para execução do programa
require 'banco.php'; //Arquivo de conexão com o Banco
require 'ajudantes.php'; //Arquivo de ferramentas

$exibir_tabela = false;
$tem_erros = false;
$erros_validacao = [];

if (tem_post()) {
    $tarefa = [
        'matricula' => $_POST['matricula'],
        'nome' => $_POST['nome'],
        'cpf' => 'null',
        'pagamento' => 'null',
        'tipotreino' => $_POST['tipotreino'],
        'situacao' => 0,
    ];

    if (strlen($tarefa['nome']) == 0){
        $tem_erros = true;
        $erros_validacao['nome'] = 'O nome da tarefa é obrigatório!';
    }

    if (array_key_exists('cpf', $_POST)) {
        $tarefa['cpf'] = $_POST['cpf'];
    }

    if (array_key_exists('pagamento', $_POST) && strlen($_POST['pagamento']) > 0) {
        if(validar_data($_POST['pagamento'])){
            $tarefa['pagamento'] = traduz_data_para_banco($_POST['pagamento']);
        }else{
            $tem_erros = true;
            $erros_validacao['pagamento'] = 'A data precisa ser dd/mm/aaaa';
        }
        
    }

    if (array_key_exists('situacao', $_POST)) {
        $tarefa['situacao'] = 1;
    }

    if(!$tem_erros){
        editar_tarefa($conexao, $tarefa);
        #header('Location: tarefas.php');
        header('Location: sistema.php');        
        die();
    }  
}

$tarefa = buscar_tarefa_para_editar($conexao, $_GET['matricula']);

$tarefa['nome'] = (array_key_exists('nome',$_POST)) ? $_POST['nome'] : $tarefa['nome'];

$tarefa['cpf'] = (array_key_exists('cpf',$_POST)) ? $_POST['cpf'] : $tarefa['cpf'];

$tarefa['pagamento'] = (array_key_exists('pagamento',$_POST)) ? $_POST['pagamento'] : $tarefa['pagamento'];

$tarefa['tipotreino'] = (array_key_exists('tipotreino',$_POST)) ? $_POST['tipotreino'] : $tarefa['tipotreino'];

$tarefa['situacao'] = (array_key_exists('situacao',$_POST)) ? $_POST['situacao'] : $tarefa['situacao'];

// Include pode avisar sobre ausência ou erro mas não impede a execução do programa
include 'template.php';


?>