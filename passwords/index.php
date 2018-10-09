<?php

$pdo = new PDO('mysql:dbname=teste_senhas', 'root', '');

$login = 'joao@gmail.com';
$senha = '123456';

$opcoes = [
    'cost' => 12
];

//Criptografa a senha
$senha_hash = password_hash($senha, PASSWORD_BCRYPT, $opcoes);

$insert = 'INSERT INTO login VALUES (NULL, ?, ?)';

$stmt = $pdo->prepare($insert);
$stmt->execute([$login, $senha_hash]);