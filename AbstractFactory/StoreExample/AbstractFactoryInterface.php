<?php

namespace projects\AbstractFactory\StoreExample;

interface AbstractFactoryInterface
{
    public function createProductLEDTV(): AbstractProductLEDTV;

    public function createProductLCDTV(): AbstractProductLCDTV;
}