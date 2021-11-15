<section class="list-library">
    <h1>Todos os livros</h1>
    <hr/>
    <table class="table table-hover">
        <thead>
        <tr>
            <th>#</th>
            <th>Titulo</th>
            <th>Autor</th>
            <th>Editora</th>
            <th>Edição</th>
            <th>Ano</th>
            <th>Localidade</th>
            <th>Categoria</th>
            <th>Editar</th>
            <th>Remover</th>
        </tr>
        </thead>
        <tbody>
        <?php
        $sql = "select l.id_livro as id, l.titulo_livro as titulo, l.autor_livro as autor,
                   l.editora_livro as editora, l.edicao_livro as edicao, l.ano_livro as ano,
                   l.localidade_livro as localidade, c.name as categoria
                from livro l
                    left join categoria c
                        on l.categoria_id = c.id";
        $result = $conn->query($sql);
        while ($obj = $result->fetch_object()) {
            print "<tr>";
            print "<td>$obj->id</td>";
            print "<td>$obj->titulo</td>";
            print "<td>$obj->autor</td>";
            print "<td>$obj->editora</td>";
            print "<td>$obj->edicao</td>";
            print "<td>$obj->ano</td>";
            print "<td>$obj->localidade</td>";
            print "<td>$obj->categoria</td>";
            ?>

            <td>
                <button type="button" class="editar-library" data-bs-toggle="modal"
                        data-bs-target="#modalremove-<?php echo $obj->id ?>">
                    <a href="?page=livro-editar&id=<?php echo $obj->id ?>" id="editar-library">editar</a>
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
                                    Livro
                                </div>
                                <ul class="list-group list-group-flush">
                                    <li class="list-group-item"><?php echo $obj->titulo ?></li>
                                    <li class="list-group-item"><?php echo $obj->editora ?></li>
                                    <li class="list-group-item"><?php echo $obj->ano ?></li>
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