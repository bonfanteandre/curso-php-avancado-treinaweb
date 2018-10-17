<?php

define('SECRET', '6LfHZHUUAAAAALWHShyL9KTq7coLQbdBKAffqowZ');

if ($_SERVER['REQUEST_METHOD'] !== 'POST') {
    header('Location: index.php');
    exit;
}

if (!isset($_POST['g-recaptcha-response'])) {
    header('Location: index.php');
    exit;
}

require_once __DIR__ . '/vendor/autoload.php';

$recaptcha = new ReCaptcha\ReCaptcha(SECRET);
$resp = $recaptcha->verify($_POST['g-recaptcha-response']);

if ($resp->isSuccess()) {
    echo 'Formulário validado com Google Recaptcha';
} else {
    echo 'Erro ao validar formulário';
}