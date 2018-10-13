<?php

class MagicList
{
    protected $parameters;

    public function __construct()
    {
        $this->parameters = [];
    }

    public function __get($key)
    {
        return $this->parameters[$key];
    }

    public function __set($key, $value)
    {
        $this->parameters[$key] = $value;
    }

    public function getParameters()
    {
        return $this->parameters;
    }

    public function __toString()
    {
        return implode(', ', $this->parameters);
    }
}

$ml = new MagicList();
$ml->nome = 'André';
$ml->email = 'andre@gmail.com';
$ml->profissao = 'Programador';

var_dump($ml);

echo '<br>';

echo $ml->nome;

echo '<br>';

echo $ml;