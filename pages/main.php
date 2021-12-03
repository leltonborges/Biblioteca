<?php
$queryReserva = "select l.titulo_livro titulo, l.url url, l.autor_livro autor,
                   a.nome_atendente atendente, a2.nome_aluno aluno, b.name biblioteca
                from reserva r
                left join livro l
                    on l.id_livro = r.livro_id_livro
                left join atendente a
                    on a.id_atendente = r.atendente_id_atendente
                left join aluno a2
                    on r.aluno_id_aluno = a2.id_aluno
                left join biblioteca b
                on b.id = r.biblioteca_id
                order by r.id_reserva desc  limit 10";
$resultReserva = $conn->query($queryReserva);

?>
<h1>Ultimas 10 reservas feitas</h1>
<hr>
<section class="d-flex justify-content-evenly align-items-stretch flex-wrap">
    <?php
    while ($objR = $resultReserva->fetch_object()) {
        ?>
        <article class="card mt-4" style="width: 18rem;">
            <img src="<?php echo $objR->url ?>" class="card-img-top" alt="livro <?php $objR->autor ?>">
            <div class="card-body mb-0">
                <h5 class="card-title">Livro</h5>
                <p class="card-text"><?php echo $objR->titulo ?></p>
            </div>
            <ul class="list-group list-group-flush">
                <li class="list-group-item">Autor: <?php echo $objR->autor ?></li>
                <li class="list-group-item">Aluno: <?php echo $objR->aluno ?></li>
                <li class="list-group-item">Atendente: <?php echo $objR->atendente ?></li>
                <li class="list-group-item">Biblioteca: <?php echo $objR->biblioteca ?></li>
            </ul>
        </article>
        <?php
    }
    ?>
</section>
