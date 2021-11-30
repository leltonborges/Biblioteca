<?php
$id = @$_REQUEST["id"];
$titulo = @$_REQUEST["titulo"];
$aluno = @$_REQUEST["aluno"];
$livro = @$_REQUEST["livro"];
$atendente = @$_REQUEST["atendente"];
$biblioteca = @$_REQUEST["biblioteca"];
$data_emprestimo = @$_REQUEST["emprestimo"];
$data_devolucao = @$_REQUEST["devolucao"];
$acao = @$_REQUEST["acao"];

switch ($acao) {
    case "cadastrar":
        $queryInsert = "insert into reserva (atendente_id_atendente, data_emprestimo, data_devolucao,
                     aluno_id_aluno, biblioteca_id, livro_id_livro)
                    values ($atendente, '$data_emprestimo', '$data_devolucao', $aluno, $biblioteca, $livro)";

        validaNumber($atendente, $livro, $aluno, $biblioteca);

        $result = $conn->query($queryInsert);

        if ($result) {
            print "<script>alert('Cadastrado com sucesso');</script>";
        } else {
            print "<script>alert('Error ao salvar');</script>";
        }
        print "<script>location.href='?page=reserva-listar'</script>";
        break;
    case "editar":
        validaNumber($atendente, $livro, $aluno, $biblioteca);

        $queryUpdate = "update reserva set livro_id_livro = $livro, aluno_id_aluno = $aluno, 
                        atendente_id_atendente = $atendente, biblioteca_id =  $biblioteca, 
                        data_devolucao = '$data_devolucao', data_emprestimo = '$data_emprestimo'
                        where id_reserva = $id";

        $result = $conn->query($queryUpdate);

        if ($result) {
            print "<script>alert('Atualizado com sucesso');</script>";
        } else {
            print "<script>alert('Error ao salvar');</script>";
        }
        print "<script>location.href='?page=reserva-listar'</script>";
        break;
}

function validaNumber(...$filds)
{
    foreach ($filds as $value) {
        if (!is_numeric($value)) {
            print "<script>alert('Algumas opções não foram preencida corretamente');</script>";
            print "<script>location.href='?page=reserva-cadastrar'</script>";
        }
    }
}

?>