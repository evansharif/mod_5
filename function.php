<?php


class Person
{
    private $name;
    private $email;

    // set name 
    public function setName($name)
    {
        $this->name = $name;
    }
    // set email 
    public function setEmail($email)
    {
        $this->email = $email;
    }

    // get name 
    public function getName()
    {
        return $this->name;
    }
    // get email 
    public function getEmail()
    {
        return $this->email;
    }
}


$person = new Person();

$person->setName("Type Name");
$person->setEmail("typeemail@gmail.com");

$personName = $person->getName();
$personEmail = $person->getEmail();
