<?php

/*
#Teste ultimo 
session_start();
// print_r($_SESSION);
if((!isset($_SESSION['email']) == true) and (!isset($_SESSION['senha']) == true))
{
    #unset($_SESSION['email']);
    #unset($_SESSION['senha']);
    session_destroy();
    header('Location: login.php');
}
$logado = $_SESSION['email'];
# fim teste
*/

//session_start();

// Requer que o arquivo funcione corretamente ou esteja presenta para execução do programa
require 'banco.php'; //Arquivo de conexão com o Banco
require 'ajudantes.php'; //Arquivo de ferramentas

$exibir_tabela = true;
$tem_erros = false;
$erros_validacao = [];

$lista_tarefas = buscar_tarefas($conexao);//Recebe e guarda os resultados de consulta no Banco

if (tem_post()) {
    $tarefa = [
        'nome' => $_POST['nome'],
        'cpf' => 'null',
        'pagamento' => 'null',
        'tipotreino' => $_POST['tipotreino'],
        'situacao' => 0,
    ];

    if(strlen($tarefa['nome']) == 0){
        $tem_erros = true;
        $erros_validacao['nome'] = 'O nome da tarefa é obrigatório!';
    }

    if (array_key_exists('cpf', $_POST)) {
        $tarefa['cpf'] = $_POST['cpf'];
    }

    if (array_key_exists('pagamento', $_POST) && strlen($_POST['pagamento']) > 0){
        if(validar_data($_POST['pagamento'])){
            $tarefa['pagamento'] = traduz_data_para_banco($_POST['pagamento']);
        }else{
            $tem_erros = true;
            $erros_validacao['pagamento'] = 'A data precisa ser dd/mm/aaa';
        }
    }

    if (array_key_exists('situacao', $_POST)) {
        $tarefa['situacao'] = 1;
    }

    if(!$tem_erros){
        inserir_tarefa($conexao, $tarefa);
        #header('Location: tarefas.php');
        header('Location: sistema.php');
        die();
    }
}

$tarefa = [
    'matricula'        => 0,
    'nome'      => $_POST['nome'] ?? '',
    'cpf' => $_POST['cpf'] ?? '',
    'pagamento'     => (isset($_POST['pagamento'])) ? traduz_data_para_banco($_POST['pagamento']) : '',
    'tipotreino'=> $_POST['tipotreino'] ?? 1,
    'situacao' => $_POST['situacao'] ?? ''
];

// Include pode avisar sobre ausência ou erro mas não impede a execução do programa
include 'template.php';







?>