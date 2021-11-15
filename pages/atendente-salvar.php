<?php
$id = $_REQUEST["id"];
$name = $_REQUEST["nome"];
$biblioteca = $_REQUEST["biblioteca"];
$action = $_REQUEST["acao"];

switch ($action){
    case "cadastrar":
        $query = "insert into atendente (nome_atendente, biblioteca_id) values ('$name', $biblioteca)";
        $result = $conn->query($query);
        if ($result) {
            print "<script>alert('Cadastrado com sucesso');</script>";
            print "<script>location.href='?page=atendente-listar'</script>";
        } else {
            print "<script>alert('Error ao salvar');</script>";
            print "<script>location.href='?page=atendente-listar'</script>";
        }
        break;
    case "editar":
        $query = "update atendente as a
                set a.nome_atendente= '$name', a.biblioteca_id = $biblioteca 
                where a.id_atendente = $id";
        $result = $conn->query($query);
        if ($result) {
            print "<script>alert('Atualizado com sucesso');</script>";
            print "<script>location.href='?page=atendente-listar'</script>";
        } else {
            print "<script>alert('Error ao salvar');</script>";
            print "<script>location.href='?page=atendente-listar'</script>";
        }
        break;
    case "excluir":
        $query = "delete from atendente where id_atendente = $id";
        $result = $conn->query($query);
        if ($result) {
            print "<script>alert('Deletar com sucesso');</script>";
            print "<script>location.href='?page=atendente-listar'</script>";
        } else {
            print "<script>alert('Error ao salvar');</script>";
            print "<script>location.href='?page=atendente-listar'</script>";
        }
        break;
}
?>