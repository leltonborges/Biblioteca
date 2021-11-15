<section class="context">
    <form class="row g-3" method="POST" action="?page=categoria-salvar">
        <input type="hidden" name="acao" value="cadastrar">
        <div class="col-md-12">
            <label for="nome" class="form-label">Nome da categoria</label>
            <input type="text" class="form-control" id="nome" name="nome" required>
        </div>
        <div class="col-12">
            <button class="btn btn-primary" type="submit">Salvar</button>
        </div>
    </form>
</section>