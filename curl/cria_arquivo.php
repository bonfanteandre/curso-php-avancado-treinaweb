<?php

if (!isset($_POST['nome']) || !isset($_POST['conteudo'])) {
    http_response_code(404);
    exit('Parametros não informados');
}

$titulo = $_POST['nome'] . '.txt';
$conteudo = addslashes($_POST['conteudo']);

$gravacao = file_put_contents($titulo, $conteudo);

echo ($gravacao) ? 'Sucesso' : 'Falha';