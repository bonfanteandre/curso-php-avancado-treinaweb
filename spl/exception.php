<?php

error_reporting(E_ERROR);
ini_set('display_errors', 1);

class ArrayInteger extends ArrayIterator
{
    public function __construct()
    {
        parent::__construct([]);
    }

    public function offsetSet($index, $newval)
    {
        if (!is_int($newval)) {
            throw new \InvalidArgumentException('Somente números inteiros são permitidos');
        }

        parent::offsetSet($index, $newval);
    }
}

try {
    
    $integers = new ArrayInteger();
    $integers[0] = 12;
    $integers[] = 1;
    $integers[] = 'abc';

} catch (Exception $ex) {
    echo $ex->getMessage();
}
