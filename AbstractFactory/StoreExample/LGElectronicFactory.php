<?php

namespace projects\AbstractFactory\StoreExample;

class LGElectronicFactory implements AbstractFactoryInterface{

    public function createProductLCDTV(): AbstractProductLCDTV
    {
        return new LGLCDTVProduct();
    }
    public function createProductLEDTV(): AbstractProductLEDTV
    {
        return new LGLEDTVProduct();
    }

}