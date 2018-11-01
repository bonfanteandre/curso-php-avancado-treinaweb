<?php

require_once __DIR__ . '/vendor/autoload.php';

use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use TreinaWeb\Core;

$app = new Core();

$app->route('/', function() {
    return new Response('Index');
});

$app->route('/contato', function() {
    return new Response('Página de contato');
});

$app->route('/sobre', function() {
    return new Response('Sobre o projeto');
});

$app->route('produto/{id}', function($id) {
    return new Response("Página do produto {$id}");
});

$request = Request::createFromGlobals();
$response = $app->handle($request);
$response->send();