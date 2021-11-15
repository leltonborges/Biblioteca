<?php
$idParam = $_REQUEST["id"];
$queryAtendente = "select a.id_atendente as id, a.nome_atendente as name, b.name as biblioteca
                    from atendente as a left join biblioteca b on a.biblioteca_id = b.id
                    where  a.id_atendente = $idParam";
$sql = "select b.id, b.name, b.address, b.city, b.state, b.cep from biblioteca as b";
$resultAtendente = $conn->query($queryAtendente);
$resultBiblioteca = $conn->query($sql);
$objAtendente = $resultAtendente->fetch_object();

?>

<section class="context">
    <h1>Editar atendentes</h1>
    <hr/>
    <form class="row g-3" method="POST" action="?page=atendente-salvar">
        <input type="hidden" name="acao" value="editar">
        <input type="hidden" name="id" value="<?php echo $objAtendente->id ?>">
        <div class="col-md-6">
            <label for="nome" class="form-label">Nome da atendente</label>
            <input type="text" class="form-control" id="nome" name="nome" value="<?php echo $objAtendente->name ?>" required>
        </div>
        <div class="col-md-6">
            <label for="biblioteca" class="form-label">Biblioteca</label>
            <select id="biblioteca" name="biblioteca" class="form-select" required>
                <option>Selecione...</option>
                <?php
                while ($obj = $resultBiblioteca->fetch_object()) {
                  if($obj->name == $objAtendente->biblioteca){
                      echo "<option value='$obj->id' selected>$obj->name</option>";
                  }else{
                      echo "<option value='$obj->id'>$obj->name</option>";
                  }
                }
                ?>
            </select>
        </div>
        <div class="d-grid gap-2 d-md-flex justify-content-md-end">
            <button class="btn btn-outline-success" type="submit">Atualizar</button>
            <a class="btn btn-outline-dark" href="?page=atendente-listar">Cancelar</a>
        </div>
    </form>
</section>