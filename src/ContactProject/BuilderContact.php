<?php

namespace projects\src\ContactProject;


class BuilderContact implements BuilderContactInterface{

    protected $contact;

    public function __construct(){
        $this->create();
    }

    public function create(): BuilderContactInterface
    {
        $this->contact = new Contact();

        return $this;
    }


    public function Name(string $name): BuilderContactInterface
    {

       $this->contact->name = $name;

       return $this;
    }
    public function Surname(string $surname): BuilderContactInterface
    {
        $this->contact->surname = $surname;

        return $this;
    }
    public function Email(string $email): BuilderContactInterface
    {

        $this->contact->email = $email;

        return $this;
    }

    public function Address(string $address): BuilderContactInterface
    {


        $this->contact->address = $address;

        return $this;
    }
    public function Phone(string $phone): BuilderContactInterface
    {

        $this->contact->phone = $phone;

        return $this;
    }
    public function Whois(string $whois): BuilderContactInterface
    {

        $this->contact->whois = $whois;

        return $this;
    }
    public function Position(string $position): BuilderContactInterface
    {

        $this->contact->position = $position;

        return $this;
    }
    public function Build(): Contact{

        $result = $this->contact;
        $this->create();

        return $result;
    }
}
