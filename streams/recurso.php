<?php

if ($_POST) {
    echo 'Olá, ' 
            . $_POST['nome'] . 
            '! Seja bem-vindo ao <strong>' . 
            $_POST['empresa'] . 
            '</strong>';
}