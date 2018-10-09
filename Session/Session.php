<?php

class Session
{
    public function __construct($nome = 'app_session')
    {
        session_name($nome);
        session_start();
    }

    public function set($chave, $valor)
    {
        $_SESSION[$chave] = $valor;
    }

    public function has($chave)
    {
        return isset($_SESSION[$chave]);
    }

    public function get($chave)
    {
        return $this->has($chave) ? $_SESSION[$chave] : null;
    }

    public function setExpiracao($strtime)
    {
        $this->set('duracao', $strtime);
        $this->set('expiracao', strtotime("+$strtime"));
    }

    public function registrar($duracao = '5 minutes')
    {
        $this->setExpiracao($duracao);
    }

    public function expirada()
    {
        return time() > $this->get('expiracao');
    }

    public function renovar()
    {
        $this->setExpiracao($this->get('duracao'));
    }

    public function valida()
    {
        if ($this->expirada()) {
            $this->destruir();
            return false;
        }

        $this->renovar();
        return true;
    }

    public function destruir()
    {
        $_SESSION = [];
        session_destroy();
    }
}