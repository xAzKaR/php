<?php

$bdServidor = '127.0.0.1'; //Pode ser localhost
$bdUsuario = 'Azk'; //Usuário criado no BD
$bdSenha = 'azk123'; //Senha totalmente exposta do BD
$bdBanco = 'academia'; //Nome do BD dentro do Servidor

$conexao = mysqli_connect($bdServidor,$bdUsuario,$bdSenha,$bdBanco);

/*
if ($conexao->connect_errno) {
    echo "Erro";
} else {
    echo "Conexão efetuada com sucesso";
}
*/
?>