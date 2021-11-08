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
        $sql = "INSERT INTO web.biblioteca (name, address, city, state, cep) 
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
        $sql = "UPDATE web.biblioteca SET name='$name', address='$address', city='$city', state='$state', cep=$cep WHERE id=$id";
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
        # code...
        break;

    default:
        # code...
        break;
}
