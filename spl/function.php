<?php

$arrayIterator = new ArrayIterator([8, 12, 4, 1, 9]);

$calc = function(ArrayIterator $iterator) {
    echo $iterator->current() * 1.1;
    echo '<br>';
    return true;
};

iterator_apply($arrayIterator, $calc, [$arrayIterator]);