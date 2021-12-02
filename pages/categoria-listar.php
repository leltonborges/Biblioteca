<section class="list-library">
    <h1>Todas as categorias</h1>
    <hr/>
    <table class="table table-hover">
        <thead>
        <tr>
            <th>#</th>
            <th>Nome</th>
            <th>Editar</th>
            <th>Remover</th>
        </tr>
        </thead>
        <tbody>
        <?php
        $sql = "SELECT * FROM categoria";

        $result = $conn->query($sql);
        while ($row = mysqli_fetch_array($result, MYSQLI_ASSOC)) {
            print "<tr>";
            print "<td>" . $row['id'] . "</td>";
            print "<td>" . $row['name'] . "</td>";
            ?>

            <td>
                <button type="button" class="editar-library">
                    <a href="?page=categoria-editar&id=<?php print $row['id'] ?>" id="editar-library">editar</a>
                </button>
            </td>
            <td>
                <button type="button" class="btn_remove" data-bs-toggle="modal"
                        data-bs-target="#modalremove-<?php echo $row['id'] ?>">
                    remover
                </button>

                <div class="modal fade" id="modalremove-<?php echo $row['id'] ?>" data-bs-backdrop="static"
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
                                    <?php echo $row['name'] ?>
                                </div>
                            </div>
                            <div class="modal-footer">
                                <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Voltar</button>
                                <form action="?page=categoria-salvar" method="post">
                                    <input type="hidden" name="acao" value="excluir">
                                    <input type="hidden" name="id" value="<?php print $row['id'] ?>">

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