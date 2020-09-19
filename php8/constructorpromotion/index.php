<?php

//DTO - data transfer object
//Object that allow you to pass in properties in the constructor

//In php7 and below
class User
{
    public $name;

    public $email;

    public function __construct($name, $email)
    {

        $this->name  = $name;
        $this->email = $email;
    }

}

$user = new User('Nikola', 'nikola@nikola');
var_dump($user);

//In php8

class Address
{

}

//class User
//{
//
//    public function __construct(
//        public $name,
//        public $email,
//        public $verified = false,
//            public $address
//    )
//    {
//        $this->address = new Address($this->address);
//    }
//
//}
//
//$user = new User('Nikola', 'nikola@nikola');
var_dump($user);