<?php

namespace projects\AbstractFactory\StoreExample;

require_once '../../vendor/autoload.php';

function clientCode(AbstractFactoryInterface $factory)
{
    echo $factory->createProductLEDTV()->modelA();
    print "\n";
    echo $factory->createProductLCDTV()->modelB();
    print "\n";
}
echo "Вызвал магазин LG: \n";
$LGFactory = new LGElectronicFactory();
clientCode($LGFactory);
echo "Вызвал магазин Sony: \n";
$SonyFactory = new SonyElectronicFactory();
clientCode($SonyFactory);

