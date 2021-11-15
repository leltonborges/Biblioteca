<?php
$id = $_REQUEST['id'];
$sql = "SELECT * FROM categoria where id =  $id";
$result = mysqli_query($conn, $sql, MYSQLI_USE_RESULT);
$row = $result->fetch_array(MYSQLI_ASSOC);

?>
<section class="context">
    <form class="row g-3" method="POST" action="?page=categoria-salvar">
        <input type="hidden" name="acao" value="editar">
        <input type="hidden" name="id" value="<?php echo $id ?>">
        <div class="col-md-6">
            <label for="nome" class="form-label">Nome da categoria</label>
            <input type="text" class="form-control" id="nome" name="nome" value="<?php echo $row['name']; ?>">
        </div>
        <div class="d-grid gap-2 d-md-flex justify-content-md-end">
            <button class="btn btn-outline-success" type="submit">Atualizar</button>
            <a class="btn btn-outline-dark" href="?page=categoria-listar">Cancelar</a>
        </div>
    </form>
</section>