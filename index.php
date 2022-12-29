<?php

require_once 'vendor/autoload.php';

interface flyingBird
{
    public function eat();
    public function fly();
}
interface flightlessBird
{
    public function eat();
}

class Swallow implements flyingBird
{
    public function eat() {}
    public function fly() {}
}

class Ostrich implements flightlessBird
{
    public function eat() { }
}