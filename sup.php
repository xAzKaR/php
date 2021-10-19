<?php

session_start();
include_once("banco.php");

$nome = $_POST['nome'];
$cpf = $_POST['cpf'];
$data_nasc = $_POST['nascimento'];
$sexo = $_POST['sexo'];
$email = $_POST['email'];
$tel_cli = $_POST['telefone'];
$end_cli = $_POST['endereco'];
$end_numero = $_POST['end_numero'];
$b_cli = $_POST['bairro'];
$cid_cli = $_POST['cidade'];
$estado = $_POST['estado'];
$cep = $_POST['cep'];
$termos = $_POST['termos'];



$resultado = mysqli_query($conexao, "INSERT INTO cadastro (nome, cpf, data_nasc, sexo, email, tel_cli, end_cli, end_numero, b_cli, cid_cli, estado, cep)
VALUES ('$nome', '$cpf', '$data_nasc', '$sexo', '$email', '$tel_cli', '$end_cli', '$end_numero', '$b_cli', '$cid_cli', '$estado', '$cep', '$termos')");
    
    /*
    if(mysqli_query($conexao, $resultado)){
        echo "Usuário cadastrado com sucesso";
    }
    else{
        echo "Erro".mysqli_connect_error($conexao);
    }
        mysqli_close($conexao);
*/
//echo "Seu cadastro foi realizado com sucesso! Agradecemos a atenção.";
//mensagem que é escrita quando os dados são inseridos normalmente.

?> 