<?php 
include_once("banco.php");
    
    $nome = $_POST['nome'];
    $CPF = $_POST['cpf'];
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
    
    
    
    $resultado = mysqli_query($conexao, "INSERT INTO cadastro (nome, CPF, data_nasc, sexo, email, tel_cli, end_cli, end_numero, b_cli, cid_cli, estado, cep, termos)
    VALUES ('$nome', '$CPF', '$data_nasc', '$sexo', '$email', '$tel_cli', '$end_cli', $end_numero, '$b_cli', '$cid_cli', '$estado', '$cep', '$termos')");
    

    

        if ($resultado) {
            echo "<script>alert('Cadastro realizado com sucesso');</script>";
        } else {
            echo "<script>alert('Ocorreu algum erro no cadastro');</script>";
        }
    
            echo "<script>window.location.href = 'cadastro.html';</script>";



?>
    