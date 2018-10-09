<?php

$pdo = new PDO('mysql:dbname=teste_senhas', 'root', '');

$login = 'joao@gmail.com';
$senha = '123456';

$sql = 'SELECT * FROM login WHERE email = ?';

$stmt = $pdo->prepare($sql);
$stmt->execute([$login]);

$usuario = $stmt->fetchObject();

if ($stmt->rowCount() && password_verify($senha, $usuario->senha)) {
    echo 'Senha válida';
} else {
    echo 'Senha inválida';
}