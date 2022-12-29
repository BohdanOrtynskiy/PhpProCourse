<?php

namespace projects\AbstractFactory\StoreExample;

class LGLCDTVProduct implements AbstractProductLCDTV{
    public function modelB(): string
    {
        return "Model: LG LCD-TV 57q";
    }
}