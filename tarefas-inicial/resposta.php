<?php

require_once __DIR__ . '/vendor/autoload.php';

use Symfony\Component\HttpFoundation\Response;

$pagina = <<<HTML
    <html>
        <body>
            <h1>Testando</h1>
            <p>Essa é uma página de teste.</p>
        </body>
    </html>
HTML;

$response = new Response();
$response->setContent($pagina);
$response->setStatusCode(200);
$response->headers->set('Content-Type', 'text/html');
$response->send();