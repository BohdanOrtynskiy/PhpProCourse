<?php

require_once 'vendor/autoload.php';

interface  Database{
    public function getData();
}

class Mysql implements Database
{
    public function getData()
    {
        return "Время: такое-то"  . "\n";
    }
}

class Controller
{
    private $adapter;

    public function __construct(Database $adapter)
    {
        $this->adapter = $adapter;
    }
    public function getData()
    {
        return $this->adapter->getData();
    }
}

$db = new Controller(new Mysql());
echo $db->getData();