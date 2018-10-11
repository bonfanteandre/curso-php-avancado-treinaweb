<?php

ob_start('substituir');

echo 'Gatos são animais muito legais!';
exit;

function substituir($str) {
    return str_replace('Gatos', 'Cachorros', $str);
}