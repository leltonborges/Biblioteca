<?php
$query = "select id, name from categoria";
$result = $conn->query($query);

?>
<section class="context">
    <h1>Cadastrar usuários</h1>
    <hr/>
    <form class="row g-3" method="POST" action="?page=usuario-salvar">
        <input type="hidden" name="acao" value="cadastrar">
        <div class="col-md-6">
            <label for="nome" class="form-label">Nome</label>
            <input type="text" class="form-control" id="nome" name="nome" required>
        </div>
        <div class="col-md-6">
            <label for="email" class="form-label">Email</label>
            <input type="email" class="form-control" id="email"
                   name="email" placeholder="example@example.com" required>
        </div>
        <div class="col-md-6">
            <label for="data_nasc" class="form-label">Data de nascimento</label>
            <input type="date" class="form-control" id="data_nasc"
                   name="data_nasc" required>
        </div>
        <div class="col-md-6">
            <label for="genero" class="form-label">Gênero</label>
            <select id="genero" name="genero" class="form-select" required>
                <option value="M" selected>Masculino</option>
                <option value="F">Feminino</option>
                <option value="O">Outros</option>
            </select>
        </div>
        <div class="col-md-6">
            <label for="endereco" class="form-label">Endereço</label>
            <input type="text" class="form-control" id="endereco" name="endereco" required>
        </div>
        <div class="col-md-6">
            <label for="telefone" class="form-label">Telefone</label>
            <input type="text" class="form-control" id="telefone"
                   name="telefone" placeholder="(00) 00000-0000" required>
        </div>
        <div class="col-12">
            <button class="btn btn-outline-primary" type="submit">Salvar</button>
        </div>
    </form>
</section>