<?php

$status = $_GET['s'];

if ($status == 503) {
    header('HTTP/1.1 503 Unavailable');
    exit('Página em manutenção');
}

if ($status == 404) {
    header('HTTP/1.1 503 Not Found');
    exit('Página não encontrada');
}

if ($status == 403) {
    header('HTTP/1.1 403 Forbidden');
    exit('Permissão negada');
}