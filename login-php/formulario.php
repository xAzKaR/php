<form method="post">
    <input type="hidden" name="matricula" value="<?php echo $tarefa['matricula']; ?>">
    <fieldset>
        <legend><?php echo ($tarefa['matricula'] > 0) ? '&#9989 Atualizar aluno' : '&#9200 Adicionar novo aluno' ?></legend>
        <label>
            Cliente:
            <?php if($tem_erros && array_key_exists('nome',$erros_validacao)) : ?>
                <span class="erro">
                    <?php echo $erros_validacao['nome']; ?>
                </span>
            <?php endif; ?>
            <input type="text" name="nome" value="<?php echo $tarefa['nome']; ?>">
        </label>
        <label>
            CPF (Obrigatório):
            <input type="text" name="cpf" maxlength="11" value="<?php echo $tarefa['cpf']; ?>" required>
        </label>
        <fieldset>
            <legend>Modalidade:</legend>
            <label>
                <input type="radio" name="tipotreino" value="1" <?php echo ($tarefa['tipotreino'] == 1) ? 'checked' : ''; ?>>Musculação
                <input type="radio" name="tipotreino" value="2" <?php echo ($tarefa['tipotreino'] == 2) ? 'checked' : ''; ?>>CrossFit
                <input type="radio" name="tipotreino" value="3" <?php echo ($tarefa['tipotreino'] == 3) ? 'checked' : ''; ?>>Natação/Hidroginástica
            </label>
        </fieldset>
        <label>
            Vencimento (Opcional):
            <?php if($tem_erros && array_key_exists('pagamento',$erros_validacao)) : ?>
                <span class="erro">
                    <?php echo $erros_validacao['pagamento']; ?>
                </span>
            <?php endif; ?>
            <input type="text" name="pagamento" value="<?php echo traduz_data_para_exibir($tarefa['pagamento']); ?>">
        </label>

        <label>
            Situação Cliente:
            <input type="checkbox" name="situacao" value="1" <?php echo ($tarefa['situacao'] == 1) ? 'checked' : ''; ?>>
        </label>
        <input type="submit" value="<?php echo ($tarefa['matricula'] > 0) ? 'Atualizar' : 'Cadastrar' ?>">
    </fieldset>
</form>