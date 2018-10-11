<?php

$recurso = curl_init('http://api.postmon.com.br/v1/cep/13465970');

curl_setopt($recurso, CURLOPT_RETURNTRANSFER, true);

$resultado = curl_exec($recurso);

$codigoHttp = curl_getinfo($recurso, CURLINFO_HTTP_CODE);

curl_close($recurso);

if ($codigoHttp === 200)
    echo 'Requisição feita com sucesso, status 200! <br>';
else 
    echo 'Erro na requisição, status ' . $codigoHttp . '<br>';

$endereco = json_decode($resultado);

var_dump($endereco);