<?php

$rota = $_SERVER['REQUEST_URI'];

switch($rota) {
    case '/':
        printf('<strong>%s<strong> - Página de inicial', $rota);    
        break;
    case '/contato':
        printf('<strong>%s<strong> - Página de contato', $rota);
        break;
    default:
        echo 'Ops, página não encontrada';
}