<?php

namespace projects\src\ClientProject;

require_once '../../vendor/autoload.php';



$builder = new BuilderContact();
$builderClientContact[] = $builder
    ->Name('John')
    ->Surname('Surname')
    ->Whois('Client')
    ->Email('john@email.com')
    ->Phone('000-555-000')
    ->Address('some address')
    ->Build();

echo "Test with BuilderClient: \n ";
print_r($builderClientContact);


$manager = new ContactManager();
$manager->setBuilder($builder);

$builderEmployeeContact[] = $manager->createNewContactEmployee();
echo "Test Employee Contact: \n ";
print_r($builderEmployeeContact);

$builderManual = new BuilderContactManual();
$builderClientManual[] = $builderManual
    ->Name('Поле для имени')
    ->Surname('Поле для фамилии')
    ->Whois('Кем Вы являетесь?(Сотрудник/Клиент)')
    ->Position('Если сотрудник, какова Ваша должность у нас в компании?')
    ->Email('Напишите сюда свою электронную почту, чтобы можно было с Вами связаться')
    ->Phone('Номер Вашего мобильного телефона')
    ->Address('Адрес проживания')
    ->Build();

echo "Test with BuilderClientManual: \n ";
print_r($builderClientManual);

$managerManual = new ContactManager();
$managerManual->setBuilder($builderManual);

$builderEmployeeContactManual[] = $manager->createNewContactEmployeeManual();
echo "Test Employee Contact Manual: \n ";
print_r($builderEmployeeContactManual);