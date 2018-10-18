<?php

echo '<h3>DirectoryIterator</h3>';

$directoryIterador = new DirectoryIterator('../');

foreach($directoryIterador as $dir) {
    echo '------------------------------<br>';
    echo 'Nome: ' . $dir . '<br>';
    echo 'Diretório? ' . $dir->isDir() . '<br>';
    echo 'Arquivo? ' . $dir->isFile() . '<br>';
}

echo '<br>';

echo '<h3>DirectoryIterator</h3>';

$linguagens = ['PHP', 'C', 'C++', 'Java', 'Python', 'Ruby', 'Javascript'];
$arrayIterator = new ArrayIterator($linguagens);

echo 'Elementos: ' . $arrayIterator->count() . '<br><br>';

while($arrayIterator->valid()) {
    echo $arrayIterator->key() . ' => ' . $arrayIterator->current() . '<br>';
    $arrayIterator->next();
}

//Volta o "cursor" para o elemento inicial
$arrayIterator->rewind();

echo '<br>';

foreach($arrayIterator as $value) {
    echo $value . '<br>';
}