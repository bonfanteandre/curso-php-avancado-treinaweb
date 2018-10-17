<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Recaptcha</title>
</head>
<body>
    <h2>Login</h2>
    <form action="validaForm.php" method="POST">
        Login: <input type="text" name="login" reuquired> 
        <br><br>
        Senha: <input type="password" name="senha" required>
        <br><br>
        <div class="g-recaptcha" data-sitekey="6LfHZHUUAAAAAHxqvskutn4ai2KugLUXmvQpxSAq"></div>
        <br>
        <button type="submit">Entrar</button>
    </form>
    <script src='https://www.google.com/recaptcha/api.js'></script>
</body>
</html>