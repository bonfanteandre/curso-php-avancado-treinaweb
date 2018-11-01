<?php

error_reporting(E_ALL);
ini_set('display_errors', 1);

require __DIR__ . '/vendor/autoload.php';
require 'config.php';

use Illuminate\Database\Capsule\Manager AS DB;

$produtos = DB::table('produtos AS p')
               ->select('p.nome', 'p.preco', 'c.nome AS categoria')
               ->leftJoin('categorias AS c', 'p.categoria_id', '=', 'c.id')
               ->get();

echo '<pre>';
var_dump($produtos);
echo '</pre>';