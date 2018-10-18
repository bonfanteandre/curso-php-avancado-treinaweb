<?php

class SalaDeAula implements Countable
{
    public $alunos = ['João', 'Maria', 'Pedro', 'Ana'];

    public function count()
    {
        return count($this->alunos);
    }
}

$sala = new SalaDeAula;
echo count($sala);