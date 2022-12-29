<?php

namespace projects\AbstractFactory\StoreExample;

class LGLEDTVProduct implements AbstractProductLEDTV{

    public function modelA(): string
    {
        return "Model: LG LED-TV 6s";
    }
}