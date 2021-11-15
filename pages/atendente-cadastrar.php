<?php
$sql = "SELECT * FROM biblioteca";
$result = $conn->query($sql);

?>

<section class="context">
    <h1>Cadastrar atendentes</h1>
    <hr/>
    <form class="row g-3" method="POST" action="?page=atendente-salvar">
        <input type="hidden" name="acao" value="cadastrar">
        <div class="col-md-6">
            <label for="nome" class="form-label">Nome da atendente</label>
            <input type="text" class="form-control" id="nome" name="nome" required>
        </div>
        <div class="col-md-6">
            <label for="biblioteca" class="form-label">Biblioteca</label>
            <select id="biblioteca" name="biblioteca" class="form-select" required>
                <option selected>Selecione...</option>
                <?php
                while ($obj = $result->fetch_object()) {
                    print "<option value=$obj->id>$obj->name</option>";
                }
                ?>
            </select>
        </div>
        <div class="col-12">
            <button class="btn btn-primary" type="submit">Salvar</button>
        </div>
    </form>
</section>