<?php

error_reporting(E_ALL);
ini_set('display_errors', 1);

require __DIR__ . '/vendor/autoload.php';

//Salt gerado em https://passwordsgenerator.net/
$hashids = new Hashids\Hashids('aF`j@vL/=$5+{wqMM?6k%=n++', 10);

$codificado = $hashids->encode(5, 2, 7);
$decodificado = $hashids->decode($codificado);

echo $codificado . '<br>';
print_r($decodificado);