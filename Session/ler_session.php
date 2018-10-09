<?php

require_once 'Session.php';

$session = new Session('APP_TESTE');

if ($session->valida() === false) {
    exit('Sessão expirada!');
}

echo $session->get('nome');
echo '<br>';
echo $session->get('email');