<?php
$id = @$_REQUEST["id"];
$titulo = @$_REQUEST["titulo"];
$aluno = @$_REQUEST["aluno"];
$livro = @$_REQUEST["livro"];
$biblioteca = @$_REQUEST["biblioteca"];
$emprestimo = @$_REQUEST["emprestimo"];
$devolucao = @$_REQUEST["devolucao"];
$acao = @$_REQUEST["acao"];

switch ($acao){
    case "cadastrar":
        $queryInsert = "insert into reserva (atendente_id_atendente, data_emprestimo, 
                     data_devolucao, aluno_id_aluno, biblioteca_id, livro_id_livro)    
                     values (null , '$emprestimo', '$devolucao', $aluno, $biblioteca, $livro)";
        echo  $queryInsert;
        break;
}
?>