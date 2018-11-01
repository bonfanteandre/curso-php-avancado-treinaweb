<?php

error_reporting(E_ALL);
ini_set('display_errors', 1);

require __DIR__ . '/vendor/autoload.php';
require 'config.php';

use Illuminate\Database\Capsule\Manager AS DB;

$produto = DB::table('produtos')->where('id', 1)->get();

echo '<pre>';
var_dump($produto);
echo '</pre>';

$produtosBaratos = DB::table('produtos')->where('preco', '<', 1000)->get();
echo '<pre>';
var_dump($produtosBaratos);
echo '</pre>';

$produtos = DB::table('produtos')->orderBy('preco', 'desc')->get();
echo '<pre>';
var_dump($produtos);
echo '</pre>';

foreach($produtos as $p) {
    echo $p->nome . ': R$' . $p->preco . '<br>';
}

echo DB::table('produtos')->max('preco') . '<br>';
echo DB::table('produtos')->count() . '<br>';

DB::table('produtos')->where('id', 4)->delete();

$res = DB::table('produtos')->insert([
    'id' => 4,
    'nome' => 'Cafeteira',
    'preco' => 99.99,
    'categoria_id' => 2
]);
var_dump($res);

DB::table('produtos')->where('id', 3)->update(['preco' => 1400]);

