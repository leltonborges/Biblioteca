<?php
require_once 'config.php';

$type = $_POST["type"];
$id_biblioteca = $_POST["id_biblioteca"];

if ($type == "livros") {
    if (isset($id_biblioteca)) {
        $queryLivros = "select l.id_livro as id, l.titulo_livro as title, l.autor_livro as autor from livro as l
                        inner join biblioteca_livro as bl
                        on bl.id_livro = l.id_livro
                    where  bl.id_biblioteca = $id_biblioteca";

        $resultLivros = $conn->query($queryLivros);
        while ($obj = $resultLivros->fetch_object()) {
            $output[] = array(
                "id" => $obj->id,
                "titulo" => $obj->title,
                "autor" => $obj->autor
            );
        }
        echo json_encode($output);
    }
} else if ($type == "atendentes") {
    if (isset($id_biblioteca)) {
        $queryAtendente = "select a.id_atendente as id, a.nome_atendente as atendente
                    from atendente as a
                        left join biblioteca b on b.id = a.biblioteca_id
                    where a.biblioteca_id = $id_biblioteca";
        $resultAtendente = $conn->query($queryAtendente);
        while ($obj = $resultAtendente->fetch_object()) {
            $output[] = array(
                "id" => $obj->id,
                "atendente" => $obj->atendente
            );
        }
        echo json_encode($output);
    }
}
?>
