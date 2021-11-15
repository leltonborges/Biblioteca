<section class="list-library">
    <table class="table table-hover">
        <thead>
        <tr>
            <th>#</th>
            <th>Nome</th>
            <th>Biblioteca</th>
            <th>Editar</th>
            <th>Remover</th>
        </tr>
        </thead>
        <tbody>
        <?php
        $sql = "select a.id_atendente as id, a.nome_atendente as name, b.name as biblioteca  from atendente as a left join biblioteca b on a.biblioteca_id = b.id";
        $result = $conn->query($sql);
        while ($obj = $result->fetch_object()) {
            print "<tr>";
            print "<td>$obj->id</td>";
            print "<td>$obj->name</td>";
            print "<td>$obj->biblioteca</td>";
            ?>

            <td>
                <button type="button" class="editar-library" data-bs-toggle="modal"
                        data-bs-target="#modalremove-<?php echo $obj->id ?>">
                    <a href="?page=atendente-editar&id=<?php echo $obj->id ?>" id="editar-library">editar</a>
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
                                    Atendente
                                </div>
                                <ul class="list-group list-group-flush">
                                    <li class="list-group-item"><?php echo $obj->name ?></li>
                                </ul>
                            </div>
                            <div class="modal-footer">
                                <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Voltar</button>
                                <form action="?page=atendente-salvar" method="post">
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