<?php

function verifica_prioridade($numPrioridade){
    $tipotreino = '';
    switch ($numPrioridade) {
        case 1:
            $tipotreino = 'Musculação';
            break;
        case 2:
            $tipotreino = 'CrossFit';
            break;
        default:
            $tipotreino = 'Natação/Hidroginástica';
            break;
    }

    return $tipotreino;

}

function traduz_data_para_banco($data){
    if($data == ''){
        return '';
    }
/*
    $objeto_data = DateTime::createFromFormat('d/m/Y',$data);

    return $objeto_data->format('Y-m-d');
*/
  
    $dados = explode("/", $data);

    if(count($dados) != 3){
        return $data;
    }

    $data_banco = "{$dados[2]}-{$dados[1]}-{$dados[0]}";

    return $data_banco;
    

}

function traduz_data_para_exibir($data){
    if($data == '' OR $data == '0000-00-00'){
        return '';
    }
/*
    $objeto_data = DateTime::createFromFormat('Y-m-d', $data);

    return $objeto_data->format('d/m/Y');
*/
    
    $dados = explode("-",$data);

    if(count($dados) != 3){
        return $data;
    }

    $data_exibir = "{$dados[2]}/{$dados[1]}/{$dados[0]}";

    return $data_exibir;
    
}

function verifica_concluida($situacao){

    if($situacao == 0 OR $situacao == ''){

        return 'Vencido';
    }

    return 'Aprovado';
}

function tem_post(){
    if(count($_POST) > 0){
        return true;
    }

    return false;
}

function validar_data($data){
    $expressao = '/^[0-9]{1,2}\/[0-9]{1,2}\/[0-9]{4}$/';
    $resultado = preg_match($expressao, $data);

    if($resultado == 0){
        return false;
    }

    $dados = explode('/', $data);
    $dia = $dados[0];
    $mes = $dados[1];
    $ano = $dados[2];

    return checkdate($mes,$dia,$ano);
}


/*
function validar_cpf($cpf){
    $expressao = '^\d{3}.\d{3}.\d{3}-\d{2}$';
    $resultado = preg_match($expressao, $cpf);

    if($resultado = ' ' OR ''){
        return false;
    }

    $dados = explode('.', $cpf);
    $c1 = $dados[0];
    $c2 = $dados[1];
    $c3 = $dados[2];

    return $cpf($c1,$c2,$c3);
}
*/

function traduz_concluida($tarefa){
    if($tarefa == 1){
        return 'Sim';
    }

    return 'Não';
}

function exibe_descricao($tarefa){
    return $tarefa;
}

function traduz_prioridade($tarefa){
    switch ($tarefa) {
        case 1:
            return 'Musculação';
            break;
        
        case 2:
            return 'CrossFit';
            break;
        case 3:
            return 'Natação/Hidroginástica';
            break;
    }
}

function tratar_anexo($anexo){
    $padrao = '/^.+(\.pdf|\.zip)$/'; //Lembra das Regex?
    $resultado = preg_match($padrao, $anexo['name']);
    if ($resultado == 0) {
        return false;
    }

    move_uploaded_file($anexo['tmp_name'], "anexos/{$anexo['name']}");
    return true;
}
    


?>