<?php

$recurso = curl_init();

$configs = [
    CURLOPT_RETURNTRANSFER => 1,
    CURLOPT_URL => 'http://localhost/treinaweb-avancado/curl/cria_arquivo.php',
    CURLOPT_USERAGENT => 'App Teste cURL',
    CURLOPT_POST => 1,
    CURLOPT_POSTFIELDS => [
        'nome' => 'hello',
        'conteudo' => 'world' 
    ]
];

curl_setopt_array($recurso, $configs);

echo curl_exec($recurso);

curl_close($recurso);