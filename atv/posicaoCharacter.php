<?php

$texto = 'Te';
$quantidadeLetras = strlen($texto);
$posicaoCharacter = strpos('Meu nome', 'n');
$nome = "Leandro Gomides Lima";
$resultado = explode(' ',$nome);
$senhaArmazenada

switch ($quantidadeLetras) {
    case 0:
        echo 'Não há texto';
        break;
    case 1:
        echo 'Só tem uma letra';
        break;
    case 2:
        echo 'Tem duas letras';
        break;

    default:
        echo 'Tem 3 letras ou mais';
        break;
}

echo '<br> ' .$posicaoCharacter;

echo '<br> ' .$resultado[0];
echo '<br> ' .$resultado[1];
echo '<br> ' .$resultado[2];

echo '<br> '.strchr($nome, ' ');

if(md5('654321') === $senhaArmaeznada){
    echo "Senha Correta";
}else{
    echo "Senha Incorreta";
}


?>