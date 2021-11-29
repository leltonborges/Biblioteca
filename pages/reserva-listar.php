<section class="list-library">
    <h1>Todos as Reservas</h1>
    <hr/>
    <table class="table table-hover">
        <thead>
        <tr>
            <th>#</th>
            <th>Aluno</th>
            <th>Livro</th>
            <th>Ano (Livro)</th>
            <th>Autor (Livro)</th>
            <th>Biblioteca</th>
            <th>Data emprestimo</th>
            <th>Data Devolucão</th>
            <th>Editar</th>
            <th>Remover</th>
        </tr>
        </thead>
        <tbody>
        <?php
        $querySelect = "select r.id_reserva id, r.data_devolucao devolucao, r.data_emprestimo emprestimo,
                a.nome_aluno aluno, l.titulo_livro livro, l.autor_livro autor_livro, l.ano_livro ano_livro,
                b.name biblioteca from reserva r
                left join aluno a on r.aluno_id_aluno = a.id_aluno
                left join biblioteca b on r.biblioteca_id = b.id
                left join livro l on l.id_livro = r.livro_id_livro";

        $result = $conn->query($querySelect);
        while ($obj = $result->fetch_object()) {
            print "<tr>";
            print "<td>$obj->id</td>";
            print "<td>$obj->aluno</td>";
            print "<td>$obj->livro</td>";
            print "<td>$obj->ano_livro</td>";
            print "<td>$obj->autor_livro</td>";
            print "<td>$obj->biblioteca</td>";
            print "<td>$obj->emprestimo</td>";
            print "<td>$obj->devolucao</td>";
            ?>

            <td>
                <button type="button" class="editar-library" data-bs-toggle="modal"
                        data-bs-target="#modalremove-<?php echo $obj->id ?>">
                    <a href="?page=reserva-cadastrar&id=<?php echo $obj->id ?>" id="editar-library">editar</a>
                </button>
            </td>
            <td>
                <button type="button" class="btn_remove" data-bs-toggle="modal"
                        data-bs-target="#modalremove-<?php echo $obj->id ?>">
                    remover
                </button>

                <div class="modal fade" id="modalremove-<?php echo $obj->id ?>" data-bs-backdrop="static"
                     data-bs-keyboard="false" tabindex="-1" aria-labelledby="staticBackdropLabel" aria-hidden="true">
                    <div class="modal-dialog modal-dialog-centered">
                        <div class="modal-content">
                            <div class="modal-header">
                                <h5 class="modal-title" id="staticBackdropLabel">Exclusão permanente</h5>
                                <button type="button" class="btn-close" data-bs-dismiss="modal"
                                        aria-label="Close"></button>
                            </div>
                            <div class="card">
                                <div class="card-header">
                                    Reserva
                                </div>
                                <ul class="list-group list-group-flush">
                                    <li class="list-group-item">Aluno: <?php echo $obj->aluno ?></li>
                                    <li class="list-group-item">Livro: <?php echo $obj->livro ?></li>
                                    <li class="list-group-item">Biblioteca: <?php echo $obj->biblioteca ?></li>
                                </ul>
                            </div>
                            <div class="modal-footer">
                                <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Voltar</button>
                                <form action="?page=livro-salvar" method="post">
                                    <input type="hidden" name="acao" value="excluir">
                                    <input type="hidden" name="id" value="<?php print $obj->id ?>">

                                    <button type="submit" class="btn btn-danger"
                                            id="editar-library">Remover
                                    </button>
                                </form>

                            </div>
                        </div>
                    </div>
                </div>
            </td>
            <?php
            print "</tr>";
        }
        ?>
        </tbody>
    </table>
</section>
