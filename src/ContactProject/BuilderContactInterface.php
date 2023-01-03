<?php

namespace projects\src\ContactProject;

interface BuilderContactInterface
{
    public function create(): BuilderContactInterface;
   public function Name(string $name): BuilderContactInterface;
   public function Surname(string $surname): BuilderContactInterface;
   public function Email(string $email): BuilderContactInterface;
   public function Phone(string $phone): BuilderContactInterface;
   public function Address(string $address): BuilderContactInterface;
   public function Whois(string $whois): BuilderContactInterface;
   public function Position(string $position): BuilderContactInterface;
}