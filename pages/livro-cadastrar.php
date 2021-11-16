<?php
$query = "select id, name from categoria";
$result = $conn->query($query);
?>
<section class="context">
    <h1>Cadastrar livros</h1>
    <hr/>
    <form class="row g-3" method="POST" action="?page=livro-salvar">
        <input type="hidden" name="acao" value="cadastrar">
        <div class="col-md-6">
            <label for="titulo" class="form-label">Titulo do livro</label>
            <input type="text" class="form-control" id="titulo" name="titulo" required>
        </div>
        <div class="col-md-6">
            <label for="autor" class="form-label">Autor</label>
            <input type="text" class="form-control" id="autor" name="autor" required>
        </div>
        <div class="col-md-6">
            <label for="editora" class="form-label">Editora</label>
            <input type="text" class="form-control" id="editora" name="editora" required>
        </div>
        <div class="col-md-6">
            <label for="edicao" class="form-label">Edição</label>
            <input type="text" class="form-control" id="edicao" name="edicao" maxlength="3" required>
        </div>
        <div class="col-md-3">
            <label for="ano" class="form-label">Ano</label>
            <input type="number" class="form-control" id="ano" name="ano" maxlength="4" placeholder="2001" required>
        </div>
        <div class="col-md-5">
            <label for="localidade" class="form-label">Localidade</label>
            <input type="text" class="form-control" id="localidade" name="localidade" required>
        </div>
        <div class="col-md-4">
            <label for="categoria" class="form-label">Categoria</label>
            <select id="categoria" name="categoria" class="form-select" required>
                <option selected>Choose...</option>
                <?php
                while ($obj = $result->fetch_object()){
                    echo "<option value='$obj->id'>$obj->name</option>";
                }
                ?>
            </select>
        </div>
        <div class="col-12">
            <button class="btn btn-outline-primary" type="submit">Salvar</button>
        </div>
    </form>
</section>