<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8">
    <title>Formulário CSRF</title>
</head>
<body>
    <h1>Login</h1>
    <form action="login.php" method="POST">
        <input type="hidden" name="token" value="123">
        <input type="text" name="login" placeholder="Login">
        <br><br>
        <input type="password" name="senha" placeholder="senha">
        <br><br>
        <button type="submit">Entrar</button>
    </form>
</body>
</html>