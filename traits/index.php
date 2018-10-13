<?php

trait Logger
{
    public function log($message)
    {
        echo 'Gravar log no banco de dados: ' . $message . '<br>';
    }

    public function logXML($message)
    {
        echo 'Gravando log no arquivo XML: ' . $message . '<br>';
    }
}

trait FileLogger
{
    public function log($file, $message)
    {
        echo 'Gravar log no arquivo ' . $file . ' : ' . $message . '<br>';
    }
}

class User
{
    use Logger, FileLogger {
        FileLogger::log insteadof Logger;
        Logger::log as logDB;
    }

    public function logXML($message)
    {
        echo 'Classe: User <br>';
        Logger::logXML($message);
    }

    public function grava()
    {
        $this->logDB('Gravando usuario no banco de dados');
        $this->log('log.txt', 'Gravando usuario no banco de dados');
        $this->logXML('Gravando usuario no banco de dados');
    }
}

$u = new User;
$u->grava();