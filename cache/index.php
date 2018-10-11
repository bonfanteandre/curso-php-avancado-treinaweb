<?php

$cacheFile = 'cache.html';
$cacheTimeSec = 20;

if (file_exists($cacheFile)) {
    $fileCreated = filemtime($cacheFile);
    if ((time() - $cacheTimeSec) < $fileCreated) {
        require_once $cacheFile;
        echo '<!--Arquivo cacheado em: ' . date('H:i:s', $fileCreated) . '-->';
        exit;
    }
}

//Inicia o buffer
ob_start();
?>
<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8">
    <title>Linguagens</title>
</head>
<body>
    <h1>Linguagens de programação</h1>
    <h3>Alguns exemplos:</h3>
    <ul>
        <li>C</li>
        <li>PHP</li>
        <li>Javascript</li>
    </ul>
</body>
</html>
<?php

//Abre o arquivo de cache, se nao exsitir ele eh criado
$cachedFile = fopen($cacheFile, 'w');

//Pega o conteudo do buffer (html)
$conteudoHTML = ob_get_contents();

//Escreve no arquivo de cache
fwrite($cachedFile, $conteudoHTML);

//Fecha o arquivo
fclose($cachedFile);

//Escreve os dados e fecha o buffer
ob_end_flush();
?>