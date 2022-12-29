<?php

namespace projects\AbstractFactory\StoreExample;

class SonyLEDTVProduct implements AbstractProductLEDTV{

    public function modelA(): string
    {
        return "Model: Sony LED-TV 305";
    }
}