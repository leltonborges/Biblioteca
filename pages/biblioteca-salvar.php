<?php
$id = @$_POST["id"];
$name = @$_POST["nome"];
$address = @$_POST["endereco"];
$city = @$_POST["cidade"];
$state = @$_POST["estado"];
$cep = @$_POST["cep"];

switch ($_REQUEST['acao']) {
    case 'cadastrar':
        # code...
        $sql = "INSERT INTO biblioteca (name, address, city, state, cep) 
                VALUES('{$name}', '{$address}', '{$city}', '{$state}', {$cep})";
        $result = $conn->query($sql);
        if ($result == true) {
            print "<script>alert('Cadastrado com sucesso');</script>";
            print "<script>location.href='?page=biblioteca-listar'</script>";
        } else {
            print "<script>alert('Error ao salvar');</script>";
            print "<script>location.href='?page=biblioteca-listar'</script>";
        }
        break;
    case 'editar':
        $sql = "UPDATE biblioteca SET name='$name', address='$address', city='$city', state='$state', cep=$cep WHERE id=$id";
        $result = $conn->query($sql);
        if ($result == true) {
            print "<script>alert('Atualizado com sucesso');</script>";
            print "<script>location.href='?page=biblioteca-listar'</script>";
        } else {
            print "<script>alert('Error ao salvar');</script>";
            print "<script>location.href='?page=biblioteca-listar'</script>";
        }
        break;
    case 'excluir':
        $sql = "delete from biblioteca where id=$id";
        $result = $conn->query($sql);
        if ($result == true) {
            print "<script>alert('Excluido com sucesso');</script>";
            print "<script>location.href='?page=biblioteca-listar'</script>";
        } else {
            print "<script>alert('Error ao excluir');</script>";
            print "<script>location.href='?page=biblioteca-listar'</script>";
        }
        break;

    default:
        # code...
        break;
}
