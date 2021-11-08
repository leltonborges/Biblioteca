<section class="list-library">
    <table class="table table-hover">
        <thead>
            <tr>
                <th>Nome</th>
                <th>Endereço</th>
                <th>Cidade</th>
                <th>Estado</th>
                <th>CEP</th>
                <th>Editar</th>
                <th>Remover</th>
            </tr>
        </thead>
        <tbody>
            <?php
            $sql = "SELECT * FROM web.biblioteca";
            $result = $conn->query($sql);
            while ($row = mysqli_fetch_array($result, MYSQLI_ASSOC)) {
                print "<tr>";
                print "<td>" . $row['name'] . "</td>";
                print "<td>" . $row['address'] . "</td>";
                print "<td>" . $row['city'] . "</td>";
                print "<td>" . $row['state'] . "</td>";
                print "<td>" . $row['cep'] . "</td>";
            ?>
                <td>
                    <button type="button" class="editar-library" data-bs-toggle="modal" data-bs-target="#modalremove-<?php echo $row['id'] ?>">
                        <a href="?page=biblioteca-editar&id=<?php print $row['id'] ?>" id="editar-library">editar</a>
                    </button>
                </td>
                <td>
                    <button type="button" class="btn_remove" data-bs-toggle="modal" data-bs-target="#modalremove-<?php echo $row['id'] ?>">
                        remover
                    </button>
                    <div class="modal fade" id="modalremove-<?php echo $row['id'] ?>" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1" aria-labelledby="staticBackdropLabel" aria-hidden="true">
                        <div class="modal-dialog modal-dialog-centered">
                            <div class="modal-content">
                                <div class="modal-header">
                                    <h5 class="modal-title" id="staticBackdropLabel">Exclusão permanente</h5>
                                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                                </div>
                                <div class="card">
                                    <div class="card-header">
                                        <?php echo $row['name'] ?>
                                    </div>
                                    <ul class="list-group list-group-flush">
                                        <li class="list-group-item"><?php echo $row['address'] ?></li>
                                        <li class="list-group-item"><?php echo $row['city'] ?></li>
                                        <li class="list-group-item"><?php echo $row['state'] ?></li>
                                    </ul>
                                </div>
                                <div class="modal-footer">
                                    <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                                    <button type="button" class="btn btn-danger">Remover</button>
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