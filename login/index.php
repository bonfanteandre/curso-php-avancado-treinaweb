<?php

session_name('APP');
session_start();

if ($_SERVER['REQUEST_METHOD'] === 'POST') {

    if ($_POST['usuario'] === 'admin' && $_POST['senha'] === '123') {

        $_SESSION['logado'] = true;
        $_SESSION['usuario'] = $_POST['usuario'];

        header('Location: logado.php');
    }
}

?>
<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8">
    <title>Login</title>
</head>
<body>
    <h2>Faça o login</h2>
    <form action="index.php" method="post">
        <input type="text" name="usuario" placeholder="Usuário"> 
        <br><br>
        <input type="password" name="senha" placeholder="Senha"> 
        <br><br>
        <button type="submit">Entrar</button>
    </form>
</body>
</html>