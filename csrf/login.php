<?php

session_start();

if (!isset($_SESSION['token'], $_POST['token'])) {
    exit('Token não informado');
}

if ($_SESSION['token'] !== $_POST['token']) {
    exit('Token informado incorreto');
}

?>
<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8">
    <title>Login CSRF</title>
</head>
<body>
    <h1>Você está logado!</h1>
</body>
</html>