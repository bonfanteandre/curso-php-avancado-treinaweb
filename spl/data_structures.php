<?php

echo '<h3>Fila</h3>';

$fila = new SplQueue;
$fila->push('João');
$fila->push('Maria');
$fila->push('Ana');
$fila->push('José');
$fila->push('Carlos');

for($fila->rewind(); $fila->valid(); $fila->next()) {
    echo $fila->current() . '<br>';
}

echo '<br>';

echo '<h3>Pilha</h3>';

$pilha = new SplStack;
$pilha->push('João');
$pilha->push('Maria');
$pilha->push('Ana');
$pilha->push('José');
$pilha->push('Carlos');

for($pilha->rewind(); $pilha->valid(); $pilha->next()) {
    echo $pilha->current() . '<br>';
}

echo '<br>';

echo '<h3>Object Storage</h3>';

$aluno1 = new stdClass;
$aluno1->nome = 'João';

$aluno2 = new stdClass;
$aluno2->nome = 'Maria';

$aluno3 = new stdClass;
$aluno3->nome = 'José';

$aluno4 = new stdClass;
$aluno4->nome = 'Ana';

$aluno5 = new stdClass;
$aluno5->nome = 'André';

$storage = new SplObjectStorage;
$storage->attach($aluno1);
$storage->attach($aluno2);
$storage->attach($aluno3);
$storage->attach($aluno4);
$storage[$aluno5] = 'Esse aluno é o André';

for($storage->rewind(); $storage->valid(); $storage->next()) {
    echo $storage->getInfo() . '<br>';
    print_r($storage->current());
    echo '<br>';
}