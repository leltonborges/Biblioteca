<?php
$id= $_REQUEST["id"];
$query = "select id_aluno as id, nome_aluno as nome, end_aluno as endereco, 
                email_aluno as email,fone_aluno as fone, data_nasc_aluno as data, 
                genero_aluno as genero
            from aluno
            where id_aluno = $id";
$result = $conn->query($query);
$obj = $result->fetch_object();

?>
<section class="context">
    <h1>Cadastrar livros</h1>
    <hr/>
    <form class="row g-3" method="POST" action="?page=usuario-salvar">
        <input type="hidden" name="acao" value="editar">
        <input type="hidden" name="id" value="<?php echo $obj->id ?>">
        <div class="col-md-6">
            <label for="nome" class="form-label">Nome</label>
            <input type="text" class="form-control"
                   id="nome" name="nome" value="<?php echo $obj->nome ?>" required>
        </div>
        <div class="col-md-6">
            <label for="email" class="form-label">Email</label>
            <input type="email" class="form-control" id="email" name="email"
                   placeholder="example@example.com" value="<?php echo $obj->email ?>" required>
        </div>
        <div class="col-md-6">
            <label for="data_nasc" class="form-label">Data de nascimento</label>
            <input type="date" class="form-control" id="data_nasc"
                   name="data_nasc" value="<?php echo $obj->data ?>" required>
        </div>
        <div class="col-md-6">
            <label for="genero" class="form-label">Gênero</label>
            <select id="genero" name="genero" class="form-select" required>
                <option value="M" <?php echo ($obj->genero == "M" ? "selected": null); ?>>Masculino</option>
                <option value="F" <?php echo ($obj->genero == "F" ? "selected": null); ?>>Feminino</option>
                <option value="O" <?php echo ($obj->genero == "O" ? "selected": null); ?>>Outros</option>
            </select>
        </div>
        <div class="col-md-6">
            <label for="endereco" class="form-label">Endereço</label>
            <input type="text" class="form-control" id="endereco"
                   name="endereco" value="<?php echo $obj->endereco ?>" required>
        </div>
        <div class="col-md-6">
            <label for="telefone" class="form-label">Telefone</label>
            <input type="text" class="form-control" id="telefone" name="telefone"
                   placeholder="(00) 00000-0000" value="<?php echo $obj->fone ?>" required>
        </div>
        <div class="d-grid gap-2 d-md-flex justify-content-md-end">
            <button class="btn btn-outline-success" type="submit">Atualizar</button>
            <a class="btn btn-outline-dark" href="?page=usuario-listar">Cancelar</a>
        </div>
    </form>
</section>