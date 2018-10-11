<?php

//Imprime na tela
echo '<h1>Titulo da pagina</h1>';

//Nao permite que nada seja devolvido (impresso na tela)
ob_start();

echo <<<CONTEUDO
Aqui estou escrevendo um conteudo 
qualquer que eu quero, bla bla bla
CONTEUDO;

//Limpa o buffer, nada é mostrado em tela
ob_end_clean();