<?php

interface Logger
{
    public function log($message);
}

class FileLogger implements Logger
{
    private $file;

    public function __construct($file)
    {
        $this->file = $file;
    }

    public function log($message)
    {
        file_put_contents($this->file, $message . PHP_EOL, FILE_APPEND);
    }
}

$fl = new FileLogger('log.txt');
$fl->log('Testando o FileLogger');