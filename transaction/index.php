<?php

$pdo = new PDO('mysql:dbname=teste_transacao', 'andre', '123');
$pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

try {
    
    $pdo->beginTransaction();

    $pdo->exec("INSERT INTO categorias VALUES (NULL, 'Calçados')");
    $pdo->exec("INSERT INTO produtos VALUES (NULL, 'Tênis', 200.00, 4, 1)");
    $pdo->exec("INSERT INTO produtos VALUES (NULL, 'Sapato', 350.50, 10, 1)");
    $pdo->exec("INSERT INTO produtos VALUES (NULL, 'Chinelo', 20, 30, 1)");
    $pdo->exec("INSERT INTO produtos VALUES (NULL, 'Chuteira', 600, 2, 1)");

    $pdo->commit();

} catch (PDOException $e) {
    $pdo->rollback();
    echo $e->getMessage();
}