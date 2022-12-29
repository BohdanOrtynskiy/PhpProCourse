<?php

namespace projects\AbstractFactory\StoreExample;

class SonyElectronicFactory implements AbstractFactoryInterface{

    public function createProductLEDTV(): AbstractProductLEDTV
    {
        return new SonyLEDTVProduct();
    }
    public function createProductLCDTV(): AbstractProductLCDTV
    {
        return new SonyLCDTVProduct();
    }
}