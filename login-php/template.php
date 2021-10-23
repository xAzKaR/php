<html>

<head>
    <title>Controle de Aluno</title>
    <link rel="stylesheet" href="css/style.css">
</head>

<body>
    <h1>Controle de Aluno</h1>

    <?php require 'formulario.php'; ?>

    <?php if ($exibir_tabela) : ?>
        <?php require 'tabela.php' ?>
    <?php endif; ?>

</body>

</html>