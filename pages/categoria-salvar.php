<?php
$name = $_POST["nome"];
$action = $_REQUEST["acao"];
$id = $_REQUEST["id"];

switch ($action) {
    case "cadastrar":
        $query = "insert into categoria (name) values ('{$name}')";
        $result = $conn->query($query);

        if ($result) {
            print "<script>alert('Cadastrado com sucesso');</script>";
            print "<script>location.href='?page=categoria-listar'</script>";
        } else {
            print "<script>alert('Error ao salvar');</script>";
            print "<script>location.href='?page=categoria-listar'</script>";
        }
        break;
    case "editar":
        $query = "update categoria set name = '{$name}' where id = $id";
        $result = $conn->query($query);

        if ($result) {
            print "<script>alert('Atualizado com sucesso');</script>";
            print "<script>location.href='?page=categoria-listar'</script>";
        } else {
            print "<script>alert('Error ao salvar');</script>";
            print "<script>location.href='?page=categoria-listar'</script>";
        }
        break;
    case "excluir":
        $query = "delete from categoria where id=$id";
        $result = $conn->query($query);

        if ($result) {
            print "<script>alert('Excluido com sucesso');</script>";
            print "<script>location.href='?page=categoria-listar'</script>";
        } else {
            print "<script>alert('Error ao salvar');</script>";
            print "<script>location.href='?page=categoria-listar'</script>";
        }
        break;
}
?>