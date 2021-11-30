<?php
$queryAluno = "select a.id_aluno as id, a.nome_aluno as nome from aluno a";
$queryLivro = "select l.id_livro as id, l.titulo_livro as titulo,
                c.name as categoria from livro l left join categoria c on l.categoria_id = c.id";
$queryB = "select b.id, b.name from biblioteca b";

$resultAluno = $conn->query($queryAluno);
$resultBib = $conn->query($queryB);
$resultLivro = $conn->query($queryLivro);

$id = @$_REQUEST["id"];
$acao = @$_REQUEST["acao"];

if(isset($id)){
    $queryReserva = "select r.id_reserva id, r.livro_id_livro livro, r.aluno_id_aluno aluno,
                           r.atendente_id_atendente atendente, r.biblioteca_id biblioteca,
                           r.data_emprestimo emprestimo, r.data_devolucao devolucao 
                    from reserva r 
                    where r.id_reserva = $id ";
    $resultReserva = $conn->query($queryReserva);
    $objR = $resultReserva->fetch_object();
}

?>
<section class="context">
    <h1>Cadastrar reservas</h1>
    <hr/>
    <form class="row g-3" method="POST" action="?page=reserva-salvar">
        <?php if(isset($id)) echo "<input type='hidden' name='id' value='$id'>"?>
        <input type="hidden" name="acao" value="<?php echo isset($id)? "editar" : "cadastrar"?>">
        <div class="col-md-6">
            <label for="aluno" class="form-label">Aluno</label>
            <select id="aluno" name="aluno" class="form-select" required>
                <option selected>Choose...</option>
                <?php
                while ($obj = $resultAluno->fetch_object()) {
                    echo $objR->aluno == $obj->id ? "<option value='$obj->id' selected>$obj->nome</option>" :
                            "<option value='$obj->id'>$obj->nome</option>";
                }
                ?>
            </select>
        </div>
        <div class="col-md-6">
            <label for="biblioteca" class="form-label">Biblioteva</label>
            <select id="biblioteca" name="biblioteca" class="form-select" required>
                <option selected>Choose...</option>
                <?php
                while ($objB = $resultBib->fetch_object()) {
                    echo $objR->biblioteca == $objB->id ? "<option value='$objB->id' selected>$objB->name</option>":
                            "<option value='$objB->id'>$objB->name</option>";
                }
                ?>
            </select>
        </div>
        <div class="col-md-6">
            <label for="livro" class="form-label">Livro</label>
            <select id="livro" name="livro" livroSelect="<?php echo $objR->livro; ?>" class="form-select" required>
                <option selected>Choose...</option>
            </select>
        </div>
        <div class="col-md-6">
            <label for="atendente" class="form-label">Atendente</label>
            <select id="atendente" name="atendente" atendentSelect="<?php echo $objR->atendente; ?>" class="form-select" required>
                <option selected>Choose...</option>
            </select>
        </div>
        <div class="col-md-6">
            <label for="emprestimo" class="form-label">Data do emprestimo</label>
            <input type="date" class="form-control" id="emprestimo" name="emprestimo"
                   maxlength="3" required value="<?php echo $objR->emprestimo; ?>">
        </div>
        <div class="col-md-6">
            <label for="devolucao" class="form-label">Data da devolução</label>
            <input type="date" class="form-control" id="devolucao"
                   name="devolucao" required value="<?php echo $objR->devolucao; ?>">
        </div>
        <div class="col-12">
            <button class="btn btn-outline-primary" type="submit">Salvar</button>
        </div>
    </form>
</section>