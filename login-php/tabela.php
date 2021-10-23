<table>
    <tr>
        <th>Cliente</th>
        <th>CPF</th>
        <th>Vencimento</th>
        <th>Modalidade</th>
        <th>Situação</th>
        <th>Opções</th>
    </tr>
    <?php foreach ($lista_tarefas as $tarefas) : ?>
        <tr>
            <td>
                <!-- <a href="tarefa.php?matricula=<?php echo $tarefas['matricula']; ?>">  -->
                    <?php echo $tarefas['nome'] ?>
                </a>
            </td>
            <td><?php echo $tarefas['cpf'] ?></td>
            <td><?php echo traduz_data_para_exibir($tarefas['pagamento']); ?></td>
            <td><?php echo verifica_prioridade($tarefas['tipotreino']); ?></td>
            <td><?php echo verifica_concluida($tarefas['situacao']); ?></td>
            <!-- ultimo adicionado
           <td><a href="tarefa.php?id=<?php echo $tarefas['matricula']; ?>"><?php echo $tarefas['nome'] ?></a></td>
            ultimo adicionado -->
            <td>

                <a href="editar.php?matricula=<?php echo $tarefas['matricula']; ?>">&#9989 Editar</a>
                <a href="remover.php?matricula=<?php echo $tarefas['matricula']; ?>">&#10060 Apagar</a>
                <a href="tarefa.php?matricula=<?php echo $tarefas['matricula']; ?>">  &#9985  Anexo  </a>
            </td>
        </tr>
    <?php endforeach ?>
</table>