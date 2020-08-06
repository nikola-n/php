<?php

$config = [
    'separator' => '_',
];

$fullName = function ($firsName, $lastName) use ($config) {
    // 1. if we want to access we can use global
    //global $config;
    //2. accept it in the function like third argument
    //3.best way
    // use($variable) and assign the function to a variable!
    //$greeting = 'Hello';

    return "{$firsName}{$config['separator']}{$lastName}";
};

//we cant access anything inside of function outside, and wise versa
//echo $greeting;

echo $fullName('Nick', 'Najdov');

