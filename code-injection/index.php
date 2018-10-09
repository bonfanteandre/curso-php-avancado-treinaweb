<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Code Injection</title>
</head>
<body>
    <?php

    setcookie('teste', 'alguma coisa', strtotime('+1 hour'));

    if ($_SERVER['REQUEST_METHOD'] === 'POST') {
        
        //Nao interpreta as tags html
        //$codigo =  htmlentities($_POST['codigo']);

        //Retira as tags html
        //$codigo =  strip_tags($_POST['codigo']);

        //Executa como código PHP, nunca utilizar
        //$codigo = eval($_POST['codigo']);

        echo $codigo;
    }

    ?>
    <form action="index.php" method="POST">
        Código: <input type="text" name="codigo">
        <button type="submit">Enviar</button>
    </form>
</body>
</html>