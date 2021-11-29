<?php
session_start();

$id = @$_REQUEST["id"];
$titutlo = @$_REQUEST["titulo"];
$autor = @$_REQUEST["autor"];
$editora = @$_REQUEST["editora"];
$edicao = @$_REQUEST["edicao"];
$biblioteca = @$_REQUEST["biblioteca"];
$ano = @$_REQUEST["ano"];
$localidade = @$_REQUEST["localidade"];
$categoria = @$_REQUEST["categoria"];
$acao = @$_REQUEST["acao"];

switch ($acao) {
    case "cadastrar":
        $query = "insert into livro 
                (titulo_livro, autor_livro, editora_livro, edicao_livro, ano_livro, localidade_livro, categoria_id) 
                values ('$titutlo', '$autor', '$editora', '$edicao', $ano, '$localidade', $categoria)";

        $result = $conn->query($query);
        $lastIdLivro = $conn->insert_id;

        foreach ($biblioteca as $biblioteca_id) {
            $queryBibliotecaId = "insert into biblioteca_livro (id_livro, id_biblioteca)
                                    values ($lastIdLivro, $biblioteca_id)";
            $resultBibioteca = $conn->query($queryBibliotecaId);
        }
        if ($result) {
            print "<script>alert('Cadastrado com sucesso');</script>";
        } else {
            print "<script>alert('Error ao salvar');</script>";
        }
        print "<script>location.href='?page=livro-listar'</script>";
        break;

    case "editar":
        $query = "update livro set 
                titulo_livro = '$titutlo', autor_livro = '$autor', editora_livro = '$editora', 
                edicao_livro = '$edicao', ano_livro = $ano, localidade_livro = '$localidade', 
                categoria_id = $categoria where id_livro = $id";

        $result = $conn->query($query);
        if ($result) {
            print "<script>alert('Atualizado com sucesso');</script>";
        } else {
            print "<script>alert('Error ao salvar');</script>";
        }
        print "<script>location.href='?page=livro-listar'</script>";
        break;
    case "excluir":
        $query = "delete from livro where id_livro=$id";
        $result = $conn->query($query);

        if ($result) {
            print "<script>alert('Excluido com sucesso');</script>";
        } else {
            print "<script>alert('Error ao salvar');</script>";
        }
        print "<script>location.href='?page=livro-listar'</script>";
        break;
}

?>