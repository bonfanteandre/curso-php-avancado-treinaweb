<?php

$postData = http_build_query([
    'nome' => 'Andre',
    'empresa' => 'Google'
]);

$options = [
    'http' => [
        'method' => 'POST',
        'header' => 'Content-Type: application/x-www-form-urlencoded',
        'content' => $postData
    ]
];

$context = stream_context_create($options);

$url = 'http://localhost/treinaweb-avancado/streams/recurso.php';
$resultado = file_get_contents($url, false, $context);

echo $resultado;