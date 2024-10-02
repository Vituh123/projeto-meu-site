<?php

$nome = $_REQUEST['nome'];
$email = $_REQUEST['email'];
$titulo = $_REQUEST['titulo'];
$mensagem = $_REQUEST['mensagem'];

    $arquivo = fopen("arquivo.txt", "w");

    fwrite($arquivo, "$nome, $email, $titulo, $mensagem\n");
    echo"Arquivo salvo com sucesso!<br>";

    fclose($arquivo);
?>