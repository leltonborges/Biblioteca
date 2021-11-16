<?php
$id = $_REQUEST["id"];
$nome = $_REQUEST["nome"];
$email = $_REQUEST["email"];
$data_nasc = $_REQUEST["data_nasc"];
$gerero = $_REQUEST["genero"];
$endereco = $_REQUEST["endereco"];
$telefone = $_REQUEST["telefone"];
$acao = $_REQUEST["acao"];

switch ($acao){
    case "cadastrar":
        $query = "insert into aluno 
                (nome_aluno, end_aluno, email_aluno, fone_aluno, data_nasc_aluno, genero_aluno)
                values ('$nome', '$endereco', '$email','$telefone','$data_nasc', '$gerero')";
        $result = $conn->query($query);
        if ($result) {
            print "<script>alert('Cadastrado com sucesso');</script>";
            print "<script>location.href='?page=usuario-listar'</script>";
        } else {
            print "<script>alert('Error ao salvar');</script>";
            print "<script>location.href='?page=usuario-listar'</script>";
        }
        break;
    case "editar":
        $query = "update aluno
                set nome_aluno = '$nome', email_aluno ='$email', data_nasc_aluno = '$data_nasc',
                    genero_aluno = '$gerero', end_aluno = '$endereco' , fone_aluno = '$telefone'
                where id_aluno =  $id";

        $result = $conn->query($query);
        if ($result) {
            print "<script>alert('Atualizado com sucesso');</script>";
            print "<script>location.href='?page=usuario-listar'</script>";
        } else {
            print "<script>alert('Error ao salvar');</script>";
            print "<script>location.href='?page=usuario-listar'</script>";
        }
        break;
    case "excluir":
        $query = "delete from aluno where id_aluno = $id";
        $result = $conn->query($query);

        if ($result) {
            print "<script>alert('Excluido com sucesso');</script>";
            print "<script>location.href='?page=usuario-listar'</script>";
        } else {
            print "<script>alert('Error ao salvar');</script>";
            print "<script>location.href='?page=usuario-listar'</script>";
        }
        break;
}

?>