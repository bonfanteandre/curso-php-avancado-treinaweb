<?php

$md5 = md5('uma hash');
$sha1 = sha1('uma hash');

var_dump($md5, $sha1);

echo '<br>';

$sha512 = hash('sha512', 'uma hash');
var_dump($sha512);

echo '<br>';

echo '<pre>';
print_r(hash_algos());
echo '</pre>';

