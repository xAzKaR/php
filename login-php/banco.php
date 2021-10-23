<?php

$bdServidor = '127.0.0.1'; //Pode ser localhost
$bdUsuario = 'Azk'; //Usuário criado no BD
$bdSenha = 'azk123'; //Senha totalmente exposta do BD
$bdBanco = 'academia'; //Nome do BD dentro do Servidor

$conexao = mysqli_connect($bdServidor,$bdUsuario,$bdSenha,$bdBanco);

if(mysqli_connect_errno()){ //Função retorna se houve algum erro, caso sim, exibe o erro e encerra a execução do sistema
    echo 'Problemas para conectar no banco. Erro:';
    echo mysqli_connect_error(); //Exibe qual foi o erro
    die(); //Encerra a execução do sistema
}

function buscar_tarefas($conexao){
    $sqlBusca = 'SELECT * FROM aluno'; //Consulta SQL
    $resultado = mysqli_query($conexao,$sqlBusca); // Função que executa a requisição 

    $tarefas = []; //Array vazio para receber os resultados

    while($tarefa = mysqli_fetch_assoc($resultado)){ //Função que vai passar os resultados para o Array
        $tarefas[] = $tarefa; 
    }

    return $tarefas; //Retorna o Array com os resultados
}

function inserir_tarefa($conexao, $tarefa){
    if($tarefa['pagamento'] == ''){
        $pagamento = 'null';
    }else{
        $pagamento = "'{$tarefa['pagamento']}'";
    }

    $sqlInserir = "INSERT INTO aluno
        (nome, cpf, tipotreino, pagamento, situacao)
        VALUES
        (
            '{$tarefa['nome']}',
            '{$tarefa['cpf']}',
            {$tarefa['tipotreino']},
            {$pagamento},
            {$tarefa['situacao']}
        )
    ";
    
    mysqli_query($conexao,$sqlInserir);
}

function buscar_tarefa_para_editar($conexao,$matricula){

    $sqlBusca = 'SELECT * FROM aluno WHERE matricula = ' .$matricula;

    $resultado = mysqli_query($conexao,$sqlBusca);

    return mysqli_fetch_assoc($resultado);    
}

function editar_tarefa($conexao, $tarefa){
    if($tarefa['pagamento'] == ''){
        $pagamento = 'null';
    }else{
        $pagamento = "'{$tarefa['pagamento']}'";
    }

    $sqlBusca = "UPDATE aluno SET
                    nome = '{$tarefa['nome']}',
                    cpf = '{$tarefa['cpf']}',
                    tipotreino = {$tarefa['tipotreino']},
                    pagamento = {$pagamento},
                    situacao = {$tarefa['situacao']}
                    WHERE matricula = {$tarefa['matricula']}";

    mysqli_query($conexao,$sqlBusca);

}

function remover_tarefa($conexao, $matricula){
    $sqlDelete = "DELETE FROM aluno WHERE matricula = {$matricula}";

    mysqli_query($conexao,$sqlDelete);
}

function buscar_tarefa($conexao, $matricula){

    $sqlBusca = "SELECT * FROM aluno WHERE matricula = {$matricula}";
    
    $busca = mysqli_query($conexao,$sqlBusca);

    return mysqli_fetch_assoc($busca);
}

function gravar_anexo($conexao, $anexo)
{
    $sqlGravar =
        "INSERT INTO anexos VALUES
    (null,
    {$anexo['tarefa_id']},
    '{$anexo['nome']}',
    '{$anexo['arquivo']}')";
    mysqli_query($conexao, $sqlGravar);
}


/*
function buscar_anexos($conexao, $id)
{
    $sqlBusca =
        'SELECT * FROM anexos WHERE tarefa_id =
' . $id;
    $resultado = mysqli_query($conexao, $sqlBusca);
    $anexos = [];
    while ($anexo = mysqli_fetch_assoc($resultado)) {
        $anexos[] = $anexo;
    }
    return $anexos;
}
*/

function buscar_anexos($conexao, $id)
{
    $sqlBusca =
        'SELECT * FROM anexos WHERE tarefa_id =
' . $id;
    $resultado = mysqli_query($conexao, $sqlBusca);
    $anexos = [];
    while ($anexo = mysqli_fetch_assoc($resultado)
    ) {
        $anexos[] = $anexo;
    }
    return $anexos;
}


function buscar_anexo($conexao, $id)
{
    $sqlBusca = 'SELECT * FROM anexos WHERE id = ' . $id;
    $resultado = mysqli_query($conexao, $sqlBusca);
    return mysqli_fetch_assoc($resultado);
}

function remover_anexo($conexao, $id)
{
    $sqlBusca =
        "DELETE FROM anexos WHERE id = {$id}";
    mysqli_query($conexao, $sqlBusca);
}

?>