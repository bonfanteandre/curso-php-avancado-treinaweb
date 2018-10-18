<?php

class User extends ArrayObject
{
    public $nome;
    public $email;
}

$user = new User;
$user['nome'] = 'João';
$user['email'] = 'joao@gmail.com';

$user2 = new User;
$user2['nome'] = 'Maria';
$user2['email'] = 'maria@gmail.com';

echo '<pre>';
var_dump($user, $user2);
echo '<pre>';
