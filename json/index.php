<?php

echo 'Decodificando JSON: <br><br>';

$json = <<<JSON
{
    "nome": "João",
    "idade": 30
}
JSON;

$objJson = json_decode($json);
$arrJson = json_decode($json, true);

var_dump($objJson, $arrJson);

echo '<br><br> Codificando JSON: <br><br>';

$obj = new stdClass;
$obj->nome = 'João';
$obj->idade = 30;

$jsonObj = json_encode($obj);

var_dump($jsonObj);

echo '<br><br> Arrays com JSON: <br><br>';

$arrayJson = <<<JSON
[
    {
        "nome": "João",
        "emails": [
            "joao@gmail.com",
            "joao123@outlook.com"
        ]
    },
    {
        "nome": "Maria"
    }
]
JSON;

$array = json_decode($arrayJson);

echo '<pre>';
print_r($array);
echo '</pre>';