<?php


class Person
{
    private $name;
    private $age;
    public function __construct($name)
    {
        $this->name = $name;
    }

    /**
     * @return mixed
     */
    public function getAge()
    {
        return $this->age * 365;
    }

    /**
     * @param mixed $age
     */
    public function setAge($age): void
    {
        if($age < 18)
        {
            throw new Exception("Person is not old enough");
        }
        $this->age = $age;
    }
}

$john = new Person('Jone Doe');
$john->setAge(30);

//Ako e public togas moze da go menuvame i sami da mu dodaeme vrednost dole
//i celata logika vo setAge propaga
//$john->age = 3;

var_dump($john->getAge());