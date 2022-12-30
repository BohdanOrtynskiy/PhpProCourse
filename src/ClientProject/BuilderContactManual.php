<?php

namespace projects\src\ClientProject;

class BuilderContactManual implements BuilderContactInterface
{
    protected $contactManual;

    public function __construct(){
        $this->create();
    }

    public function create(): BuilderContactInterface
    {
        $this->contactManual = new ContactManual();

        return $this;
    }


    public function Name(string $name): BuilderContactInterface
    {

        $this->contactManual->name = $name;

        return $this;
    }
    public function Surname(string $surname): BuilderContactInterface
    {
        $this->contactManual->surname = $surname;

        return $this;
    }
    public function Email(string $email): BuilderContactInterface
    {

        $this->contactManual->email = $email;

        return $this;
    }

    public function Address(string $address): BuilderContactInterface
    {


        $this->contactManual->address = $address;

        return $this;
    }
    public function Phone(string $phone): BuilderContactInterface
    {

        $this->contactManual->phone = $phone;

        return $this;
    }
    public function Whois(string $whois): BuilderContactInterface
    {

        $this->contactManual->whois = $whois;

        return $this;
    }
    public function Position(string $position): BuilderContactInterface
    {

        $this->contactManual->position = $position;

        return $this;
    }


    public function Build(): ContactManual{

        $result = $this->contactManual;
        $this->create();

        return $result;
    }
}