<?php

require_once __DIR__ . '/vendor/autoload.php';

use App\MeuApp;
use App\Auth\Facebook;
use App\Auth\Login;

$app = new MeuApp;
$f = new Facebook;
$l = new Login;

var_dump($app, $f, $l);