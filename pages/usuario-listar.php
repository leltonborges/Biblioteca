<section class="list-library">
    <h1>Todos os Usuários</h1>
    <hr/>
    <table class="table table-hover">
        <thead>
        <tr>
            <th>#</th>
            <th>Nome</th>
            <th>Email</th>
            <th>Ano de Nascimento</th>
            <th>Gênero</th>
            <th>Endereço</th>
            <th>Telefone</th>
            <th>Editar</th>
            <th>Remover</th>
        </tr>
        </thead>
        <tbody>
        <?php
        $sql = "select id_aluno as id, nome_aluno as nome, end_aluno as endereco, 
                    email_aluno as email, fone_aluno as fone, 
                    data_nasc_aluno as data, genero_aluno as genero 
                from aluno";
        $result = $conn->query($sql);
        while ($obj = $result->fetch_object()) {
            print "<tr>";
            print "<td>$obj->id</td>";
            print "<td>$obj->nome</td>";
            print "<td>$obj->email</td>";
            print "<td>$obj->data</td>";
            print "<td>$obj->genero</td>";
            print "<td>$obj->endereco</td>";
            print "<td>$obj->fone</td>";
            ?>

            <td>
                <button type="button" class="editar-library" data-bs-toggle="modal"
                        data-bs-target="#modalremove-<?php echo $obj->id ?>">
                    <a href="?page=usuario-editar&id=<?php echo $obj->id ?>" id="editar-library">editar</a>
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
                                    Usuário
                                </div>
                                <ul class="list-group list-group-flush">
                                    <li class="list-group-item"><?php echo $obj->nome ?></li>
                                    <li class="list-group-item"><?php echo $obj->genero ?></li>
                                    <li class="list-group-item"><?php echo $obj->fone ?></li>
                                </ul>
                            </div>
                            <div class="modal-footer">
                                <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Voltar</button>
                                <form action="?page=usuario-salvar" method="post">
                                    <input type="hidden" name="acao" value="excluir">
                                    <input type="hidden" name="id" value="<?php echo $obj->id ?>">

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