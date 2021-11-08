<section class="context">
    <form class="row g-3" method="POST" action="?page=biblioteca-salvar">
        <input type="hidden" name="acao" value="cadastrar">
        <div class="col-md-6">
            <label for="nome" class="form-label">Nome da Biblioteca</label>
            <input type="text" class="form-control" id="nome" name="nome" required>
        </div>
        <div class="col-md-6">
            <label for="endereco" class="form-label">Endereço</label>
            <input type="text" class="form-control" id="endereco" name="endereco" required>
        </div>
        <div class="col-md-6">
            <label for="cidade" class="form-label">Cidate</label>
            <input type="text" class="form-control" id="cidade" name="cidade" required>
        </div>
        <div class="col-md-4">
            <label for="estado" class="form-label">Estado</label>
            <select id="estado" name="estado" class="form-select" required>
                <option selected>Choose...</option>
                <option value="DF">DF</option>
                <option value="GO">GO</option>
                <option value="MG">MG</option>
                <option value="MA">MA</option>
                <option value="AL">AL</option>
                <option value="PA">PA</option>
                <option value="TO">TO</option>
                <option value="PE">PE</option>
                <option value="SC">SC</option>
                <option value="PI">PI</option>
                <option value="AM">AM</option>
                <option value="SP">SP</option>
                <option value="RJ">RJ</option>
                <option value="MS">MS</option>
                <option value="CE">CE</option>
                <option value="AC">AC</option>
                <option value="RR">RR</option>
            </select>
        </div>
        <div class="col-md-2">
            <label for="cep" class="form-label">CEP</label>
            <input type="text" class="form-control" id="cep" name="cep" required>
        </div>
        <div class="col-12">
            <button class="btn btn-primary" type="submit">Salvar</button>
        </div>
    </form>
</section>