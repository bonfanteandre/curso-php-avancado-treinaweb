<?php

require_once __DIR__ . '/vendor/autoload.php';

use Pimple\Container;

class User
{
    public $created_at;
    
    protected $pdo;

    public function setPDO(\PDO $pdo)
    {
        $this->pdo = $pdo;
    }
}

$container = new Container;

$container['pdo'] = new \PDO('mysql:dbname=phpavancado', 'andre', '123');

$container['datetime'] = function() {
    return new DateTime('now');
};

$container['user'] = function($c) {
    $user = new User;
    $user->created_at = $c['datetime'];
    $user->setPDO($c['pdo']);
    return $user;
};

echo '<pre>';
var_dump($container['user']);
echo '</pre>';