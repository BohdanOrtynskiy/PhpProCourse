<?php

require_once 'vendor/autoload.php';

interface Transport{
    public function model():void;
    public function price():void;

}


class EconomyCar implements Transport {

    public function model():void{
        echo "Модель: Chevrolet Cruze" . "\n";
    }
    public function price():void{
        echo "Стоимость: 5000 $";
    }

}
class StandCar implements Transport {

    public function model():void{
        echo "Модель: Ravon Nexia R3" . "\n";
    }
    public function price():void{
        echo "Стоимость: 10000 $";
    }

}
class LuxCar implements Transport {

    public function model():void{
        echo "Модель: Mazda 6"  . "\n";
    }
    public function price():void{
        echo "Стоимость: 35000 $";
    }

}

abstract class Taxi {

    abstract public function getTransport(): Transport;

    public function getInfo():void
    {
        $transport = $this->getTransport();

        $transport->model();
        $transport->price();
    }

}

class EconomyTaxi extends Taxi{
    public function getTransport(): Transport
    {
        return new EconomyCar();
    }
}
class StandTaxi extends Taxi{
    public function getTransport(): Transport
    {
        return new StandCar();
    }
}
class LuxTaxi extends Taxi{
    public function getTransport(): Transport
    {
        return new LuxCar();
    }
}

function clientCode(Taxi $Taxi): void{
    $Taxi->getInfo();
}
echo "Приложение: Запущен с EconomyTaxi  \n";
clientCode(new EconomyTaxi());
echo "\n\n";
echo "Приложение: Запущен с StandTaxi  \n";
clientCode(new StandTaxi());
echo "\n\n";
echo "Приложение: Запущен с LuxTaxi \n";
clientCode(new LuxTaxi());
echo "\n\n";