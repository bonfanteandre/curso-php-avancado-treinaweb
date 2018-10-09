<?php

require_once 'Session.php';

$session = new Session('APP_TESTE');
$session->set('nome', 'João');
$session->set('email', 'joao@gmail.com');
$session->registrar('10 sec');