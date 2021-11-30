<?php
$id = $_REQUEST["id"];
$queryCategoria = "select id, name from categoria";
$queryLivro = "select l.id_livro as id, l.titulo_livro as titulo, l.autor_livro as autor,
                   l.editora_livro as editora, l.edicao_livro as edicao, l.ano_livro as ano,
                   l.localidade_livro as localidade, c.name as categoria
                from livro l
                    left join categoria c
                        on l.categoria_id = c.id
                where l.id_livro = $id";
$resultLivro = $conn->query($queryLivro);
$resultCategoria = $conn->query($queryCategoria);
$obj = $resultLivro->fetch_object();
$queryBiblioteca = "select id, name from biblioteca";
$resultBiblioteca = $conn->query($queryBiblioteca);
$rowB = mysqli_num_rows($resultBiblioteca);
?>
<section class="context">
    <h1>Editar livros</h1>
    <hr/>
    <form class="row g-3" method="POST" action="?page=livro-salvar">
        <input type="hidden" name="id" value="<?php echo $obj->id; ?>">
        <input type="hidden" name="acao" value="editar">
        <div class="col-md-6">
            <label for="titulo" class="form-label">Titulo do livro</label>
            <input type="text" class="form-control" id="titulo"
                   name="titulo" value="<?php echo $obj->titulo; ?>" required>
        </div>
        <div class="col-md-6">
            <label for="autor" class="form-label">Autor</label>
            <input type="text" class="form-control" id="autor"
                   name="autor" value="<?php echo $obj->autor; ?>" required>
        </div>
        <div class="col-md-6">
            <label for="editora" class="form-label">Editora</label>
            <input type="text" class="form-control" id="editora"
                   name="editora" value="<?php echo $obj->editora; ?>" required>
        </div>
        <div class="col-md-4">
            <label for="biblioteca" class="form-label">Biblioteca</label>
            <select id="biblioteca" name="biblioteca[]" class="form-select multSelect" multiple
                    size="<?php echo $rowB; ?>" required>
                <?php
                while ($objB = $resultBiblioteca->fetch_object()) {
                    print "<option value=$objB->id>$objB->name</option>";
                }
                ?>
            </select>
        </div>
        <div class="col-md-6">
            <label for="edicao" class="form-label">Edição</label>
            <input type="text" class="form-control" id="edicao" name="edicao"
                   maxlength="3" value="<?php echo $obj->edicao; ?>" required>
        </div>
        <div class="col-md-3">
            <label for="ano" class="form-label">Ano</label>
            <input type="number" class="form-control" id="ano" name="ano"
                   maxlength="4" placeholder="2001" value="<?php echo $obj->ano; ?>" required>
        </div>
        <div class="col-md-5">
            <label for="localidade" class="form-label">Localidade</label>
            <input type="text" class="form-control" id="localidade"
                   name="localidade" value="<?php echo $obj->localidade; ?>" required>
        </div>
        <div class="col-md-4">
            <label for="categoria" class="form-label">Categoria</label>
            <select id="categoria" name="categoria" class="form-select" required>
                <option>Choose...</option>
                <?php
                while ($cat = $resultCategoria->fetch_object()) {
                    if ($obj->categoria == $cat->name) {
                        echo "<option value='$cat->id' selected>$cat->name</option>";
                    } else {
                        echo "<option value='$cat->id'>$cat->name</option>";
                    }
                }
                ?>
            </select>
        </div>
        <div class="d-grid gap-2 d-md-flex justify-content-md-end">
            <button class="btn btn-outline-success" type="submit">Atualizar</button>
            <a class="btn btn-outline-dark" href="?page=livro-listar">Cancelar</a>
        </div>
    </form>
</section>