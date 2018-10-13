<?php

interface Authentication
{
    public function login();
    public function validUser($user);
}

class AppAuth implements Authentication
{
    public function login()
    {
        echo 'Verifica usuario e senha no banco de dados <br>';
    }

    public function validUser($user)
    {
        echo "Verifica se $user nao expirou na sessao <br>";
    }
}

class FacebookAuth implements Authentication
{
    public function login()
    {
        echo 'Verifica usuario via API do Facebook <br>';
    }

    public function validUser($user)
    {
        echo "Verifica se $user nao expirou no Facebook";
    }
}

class User
{
    protected $auth;

    public function setAuth(Authentication $auth)
    {
        $this->auth = $auth;
    }

    public function login()
    {
        $this->auth->login();
    }

    public function validUser($user)
    {
        $this->auth->validUser($user);
    }
}

$user = new User;
$user->setAuth(new AppAuth);
// $user->setAuth(new FacebookAuth);
$user->login();
$user->validUser('andre@gmail.com');