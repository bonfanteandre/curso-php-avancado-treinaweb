<?php

ob_start();

// echo '<h1>Tete 1</h1>';
// echo '<h1>Tete 2</h1>';
// echo '<h1>Tete 3</h1>';

phpinfo();

$conteudo = ob_get_contents();

ob_end_clean();

$file = file_put_contents('info.html', $conteudo);

if ($file) {
    echo "<a href='info.html' target='_blank'>Visualizar</a>";
    exit;
}

echo 'Erro';