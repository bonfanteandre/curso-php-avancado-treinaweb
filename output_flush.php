<?php

ob_start();

echo "Primeira frase a ser impressa <br>";
printf('Parte 1: %s', ob_get_contents());

ob_flush();

echo "Segunda frase a ser impressa <br>";
printf('Parte 2: %s', ob_get_contents());