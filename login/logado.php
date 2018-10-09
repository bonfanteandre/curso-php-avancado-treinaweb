<?php

session_name('APP');
session_start();

//Se o usuario nao estiver logado, volta para a index
if (!isset($_SESSION['logado'])) {
    header('Location: index.php');
}

//Validacao de expiracao (em segundos)
if (!isset($_SESSION['sessIdTime'])) {
    $_SESSION['sessIdTime'] = time();
} else if ((time() - $_SESSION['sessIdTime']) > 10) {
    
    //Limpa a sessao
    $_SESSION = [];

    //Destroi a sessao (exclui o arquivo)
    session_destroy();

    header('Location: index.php');
} else {

    //Renovar  sessao
    $_SESSION['sessIdTime'] = time();
}

?>
<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8">
    <title>Logado</title>
</head>
<body>
    <h1>Bem vindo, <?=$_SESSION['usuario']?></h1>

    <strong>ID da sessão:</strong> <?=session_id()?>
    <br>
    <strong>Nome da sessão: </strong> <?=session_name()?>
</body>
</html>