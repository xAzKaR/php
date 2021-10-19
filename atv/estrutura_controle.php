<?php

$idade = 16;
$estado = "RJ";

//Estrutura IF
if($idade >=18){
    //código a ser executado
    echo "Você está liberado!";
}else{
    echo "Você precisa ter 18 anos.";
}

if($estado == "RJ"){
    echo "Garota de Ipanema";
}elseif($estado == "SP"){
    echo "Terra da Garoa";
}else{
    echo "Brasileiro com muito orgulho";
}

/* Questão 1 - Crie um algorítimo que receba um número e verifique se esse número é positivo,
negativo ou igual a zero. Exiba a mensagem correspondente. */

if($numero > 0){
    echo "Numero Positivo.";
}elseif($numero <0){
    echo "Numero Negativo.";
}else{
    echo "O numero é zero.";
}


if($A > $B){
    echo "A é maior que B.";
}else{
    echo "B é maior que A.";
}

?>