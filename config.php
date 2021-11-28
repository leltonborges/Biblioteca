<?php
setlocale(LC_ALL, 'portuguese');
date_default_timezone_set('America/Sao_Paulo');

define('HOST', 'localhost');
define('USER', 'study');
define('PASS', '123');
define('BASE', 'bibliotecaria');

$conn = new mysqli(HOST,USER, PASS,BASE);

//Checando conexão
if (!$conn) {
    die("Falha na conexão: " . mysli_connect_error());
}
?>