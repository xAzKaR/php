<?php

    $variavel = "Texto de uma variável.";
    $verifica = "";

    if(isset($nome))
    $verifica = "A variável nome não foi setada.";

    $nome = "Clark Kent";
    $idade = 35;
    define("minhaConstante", "Valor Constante");
    $valor1 = 40;
    $valor2 = 25;
    $soma = $valor1 + $valor2;
    $multiplicacao = $valor1 * $valor2;
    $divisao = $valor1 / $valor2;
    $subtracao = $valor1 - $valor2;
    $modulo = $valor1 % $valor2;
?>

<body>
    <h1>Título sem PHP</h1>
    <h2><?php echo minhaConstante; ?></h2>

    <h3>
    <?php echo "Hellow Wourd, código php.";?>
    </h3>
    <br>
    <form>
        <input type="text" value="
        <?php
            echo $variavel;
        ?>

        ">
    </form>
    <table border="1">
        <tr>
            <td>Nome:</td>
            <td>Idade:</td>
        </tr>
        <tr>
            <td>
                <?php
                echo $nome;
                ?>
            </td>
            <td>
                <?php
                echo $idade;
                ?>
            </td>
        </tr>
    </table>
    <?php
     if(isset($nome)){
     echo "A variável nome agora é: " .$nome;
     }else{
         echo $verifica;
     }
    ?>

    <ul>
        <li><?php echo "Soma: " .$soma; ?></li>
        <li><?php echo "Subtração: " .$subtracao; ?></li>
        <li><?php echo "Multiplicação: " .$multiplicacao; ?></li>
        <li><?php echo "Divisão: " .$divisao; ?></li>
        <li><?php echo "Módulo: " .$modulo; ?></li>

    </ul>


</body>
</html>
