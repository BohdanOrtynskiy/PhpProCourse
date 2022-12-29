<?php

namespace projects\AbstractFactory\StoreExample;

class SonyLCDTVProduct implements AbstractProductLCDTV{

    public function modelB(): string
    {
        return "Model: Sony LCD-TV 305";
    }
}