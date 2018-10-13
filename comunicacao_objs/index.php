<?php

class Escola
{
    protected $salas = [];

    public function addSala(SalaDeAula $sala)
    {
        $this->salas[] = $sala;
    }
}

class SalaDeAula
{
    protected $turma;
    protected $alunos = [];

    public function __construct(string $turma)
    {
        $this->turma = $turma;
    }

    public function addAluno(Aluno $aluno)
    {
        $this->alunos[] = $aluno;
    }
}

class Aluno
{
    protected $matricula;
    protected $nome;

    public function __construct(int $matricula, string $nome)
    {
        $this->matricula = $matricula;
        $this->nome = $nome;
    }
}

$escola = new Escola;

$sala = new SalaDeAula('PHP Avançado 2018/2');
$sala->addAluno(new Aluno(1, 'João'));
$sala->addAluno(new Aluno(2, 'Maria'));
$sala->addAluno(new Aluno(3, 'José'));
$sala->addAluno(new Aluno(4, 'Ana'));

$escola->addSala($sala);

echo "<pre>";
print_r($escola);
echo "</pre>";