<?php
$id = $_REQUEST['id'];
$sql = "SELECT * FROM biblioteca where id = " . $id;
$result = mysqli_query($conn, $sql, MYSQLI_USE_RESULT);
$row = $result->fetch_array(MYSQLI_ASSOC);

?>
<section class="context">
    <h1>Editar bibliotecas</h1>
    <hr/>
    <form class="row g-3" method="POST" action="?page=biblioteca-salvar">
        <input type="hidden" name="acao" value="editar">
        <input type="hidden" name="id" value="<?php echo $id ?>">
        <div class="col-md-6">
            <label for="nome" class="form-label">Nome da Biblioteca</label>
            <input type="text" class="form-control" id="nome" name="nome" value="<?php echo $row['name']; ?>">
        </div>
        <div class="col-md-6">
            <label for="endereco" class="form-label">Endereço</label>
            <input type="text" class="form-control" id="endereco" name="endereco" value="<?php echo $row['address']; ?>">
        </div>
        <div class="col-md-6">
            <label for="cidade" class="form-label">Cidade</label>
            <input type="text" class="form-control" id="cidade" name="cidade" value="<?php echo $row['city']; ?>">
        </div>
        <div class="col-md-4">
            <label for="estado" class="form-label">Estado</label>
            <select id="estado" name="estado" class="form-select">
                <option>Choose...</option>
                <option value="DF" <?php if ($row['state'] == "DF") print "selected" ?>>DF</option>
                <option value="GO" <?php if ($row['state'] == "GO") print "selected" ?>>GO</option>
                <option value="MG" <?php if ($row['state'] == "MG") print "selected" ?>>MG</option>
                <option value="MA" <?php if ($row['state'] == "MA") print "selected" ?>>MA</option>
                <option value="AL" <?php if ($row['state'] == "AL") print "selected" ?>>AL</option>
                <option value="PA" <?php if ($row['state'] == "PA") print "selected" ?>>PA</option>
                <option value="TO" <?php if ($row['state'] == "TO") print "selected" ?>>TO</option>
                <option value="PE" <?php if ($row['state'] == "PE") print "selected" ?>>PE</option>
                <option value="SC" <?php if ($row['state'] == "SC") print "selected" ?>>SC</option>
                <option value="PI" <?php if ($row['state'] == "PI") print "selected" ?>>PI</option>
                <option value="AM" <?php if ($row['state'] == "AM") print "selected" ?>>AM</option>
                <option value="SP" <?php if ($row['state'] == "SP") print "selected" ?>>SP</option>
                <option value="RJ" <?php if ($row['state'] == "RJ") print "selected" ?>>RJ</option>
                <option value="MS" <?php if ($row['state'] == "MS") print "selected" ?>>MS</option>
                <option value="CE" <?php if ($row['state'] == "CE") print "selected" ?>>CE</option>
                <option value="AC" <?php if ($row['state'] == "AC") print "selected" ?>>AC</option>
                <option value="RR" <?php if ($row['state'] == "RR") print "selected" ?>>RR</option>
            </select>
        </div>
        <div class="col-md-2">
            <label for="cep" class="form-label">CEP</label>
            <input type="text" class="form-control" id="cep" name="cep" value="<?php echo $row['cep']; ?>">
        </div>
        <div class="d-grid gap-2 d-md-flex justify-content-md-end">
            <button class="btn btn-outline-success" type="submit">Atualizar</button>
            <button class="btn btn-outline-dark" id="reset" data-bs-cancela="cancel" type="button">Cancelar</button>
        </div>
    </form>
</section>