<html>

<head>
    <meta charset="utf-8">
    <title>Gerenciador de Tarefas</title>
    <link rel="stylesheet" href="css/style.css" type="text/css">
</head>

<body>
    <div>
        <h1>Controle do aluno: <?php echo $tarefa['nome']; ?></h1>
        <p>
            <a href="sistema.php">
                Voltar para a lista de tarefas
            </a>
        </p>
        <p>
            <strong>Situação:</strong>
            <?php echo traduz_concluida($tarefa['situacao']); ?>
        </p>
        <p>
            <strong>CPF:</strong>
            <?php echo exibe_descricao($tarefa['cpf']); ?>
        </p>
        <p>
            <strong>Vencimento:</strong>
            <?php echo traduz_data_para_exibir($tarefa['pagamento']); ?>
        </p>
        <p>
            <strong>Tipo de plano:</strong>
            <?php echo traduz_prioridade($tarefa['tipotreino']); ?>
        </p>
        <h2>Anexos</h2>
        <?php if (count($anexos) > 0) : ?>
            <table>
                <tr>
                    <th>Arquivo</th>
                    <th>Opções</th>
                </tr>
                <?php foreach ($anexos as $anexo) : ?>
                    <tr>
                        <td><?php echo $anexo['nome']; ?></td>
                        <td>
                            <a href="anexos/<?php echo $anexo['arquivo']; ?>">Download</a>
                            <a href="remover_anexo.php?matricula=<?php echo $anexo['id']; ?>" >Remover</a>
                        </td>
                    </tr>
                <?php endforeach; ?>
            </table>
        <?php else : ?><p>Não há anexos para esta tarefa.</p><?php endif; ?>
        <form method="post" enctype="multipart/form-data">
            <fieldset>
                <legend>Novo Anexo</legend>
                <input type="hidden" name="tarefa_id" value="<?php echo $tarefa['matricula']; ?>">
                <label>
                    <?php if ($tem_erros && array_key_exists('anexo', $erros_validacao)) : ?>
                        <span class="erro">
                            <?php echo $erros_validacao['anexo']; ?>
                        </span>
                    <?php endif; ?>
                    <input type="file" name="anexo">
                </label>
                <input type="submit" value="Cadastrar">
            </fieldset>
        </form>

    </div>
</body>

</html>