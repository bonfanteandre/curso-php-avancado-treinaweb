<?php

class MagicSQL
{
    protected $sql;

    /**
     * Chamado quando o nome do metodo nao esta declarado
     */
    public function __call($name, $args)
    {
        $this->sql .= ' ' . strtoupper($name);
        if (count($args)) {
            $this->sql .= ' ' . $args[0];
        }
        return $this;
    }

    public function __toString()
    {
        return $this->sql;
    }
}

$sql = new MagicSQL;
$sql->select('*')
        ->from('produtos')
        ->where('id = 1')
        ->limit(1);

echo $sql;