<?php
/*
$peso = 1;
$altura = 0;
$imc = 0;





$peso = $_GET['peso'];
$altura = $_GET['altura'];
$imc = $peso / ($altura * $altura);
*/
if(array_key_exists('peso', $_GET)){
    $peso = $_GET['peso'];
}

if(array_key_exists('altura', $_GET)){
    $altura = $_GET['altura'];
}
if($peso > 0 && $altura > 0) {
    $imc = $peso / ($altura * $altura);
}

if($imc > 0){
echo "Seu IMC é: ".floor($imc)."<br>";
    if($imc < 18.5){
        echo 'Abaixo do Peso';
    }elseif($imc < 24.9){
        echo 'Peso Normal';
    }elseif($imc < 29.9){
        echo 'Sobrepeso';
    }elseif($imc < 34.9){
        echo 'Obesidade Grau I';
    }elseif($imc < 39.9){
        echo 'Obesidade Grau II';
    }else{
        echo 'Obesidade Grau III ou Mórbida';
    }
}

?>
<html>
    <head>
        <meta charset="utf-8">
        <title> Cálculo de IMC </title>
    </head>
    <body>
        <form method="GET" action="#">
        <fieldset>
            <legend> Cálculo IMC</legend>
            <label> Altura
            <input type="text" name="altura" required>
            </label>
            <label> Peso
            <input type="text" name="peso" required>
            </label>
            <input type="submit" value="calcular">

        </fieldset>

        </form>
        <?php
            echo "Seu IMC é: " .floor($imc);
        ?>
    </body>
</html>