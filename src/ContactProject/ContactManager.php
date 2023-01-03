<?php

namespace projects\src\ContactProject;

class ContactManager
{
 private $builder;


    public function setBuilder(BuilderContactInterface $builder)
    {
        $this->builder = $builder;

        return $this;
    }


    public function createNewContactEmployee(){

        $contact = $this->builder
            ->Name('Bohdan')
            ->Surname('Ortynskiy')
            ->Whois('Employee')
            ->Position('Programmer')
            ->Email('example@example.com')
            ->Phone('some phone')
            ->Address('some address')
            ->Build();
        return $contact;
    }
    public function createNewContactEmployeeManual(){

        $contact = $this->builder
            ->Name('Имя сотрудника')
            ->Surname('Фамилия сотрудника')
            ->Whois('Является сотрудником')
            ->Position('Должность сотрудника')
            ->Email('Почта сотрудника')
            ->Phone('Номер мобильного телефона сотрудника')
            ->Build();
        return $contact;
    }
}