<?php

//extracting parameters from array, get the values

$params = [10, 20];

//$x = $params[0];
//$y = $params[1];

[$x, $y] = $params;

var_dump($x, $y);
echo $x;
//============================================
//with non-numerical keys

$params = ['name' => 'Nikola', 'email' => 'nikola@nikola.com'];

['name' => $name, 'email' => $email] = $params;

var_dump($name, $email);

//==============================================
//you can use shorthand [] instead of list, you will get the same result
//================================================
//skipp values

$params = [null, 10, null, 30];

[, $x, , $y] = $params;

var_dump($x, $y);

//==================================================
//building and assigning , you can assign and destructure at the same time

//$params = [$x, $y] = [10, 20];

var_dump($x, $y);
var_dump($params);

//============================================
//destructuring nested array

$user = [
    'name'    => 'Nikola',
    'address' => [
        'line1' => '24 Code Road',
    ],
];

//$name = $user['name'];
//$addressLine1 = $user['address']['line1'];

//[
//    'name' => $name,
//    'address' => [
//        'line1' => $addressLine1
//    ]
//] = $user;

//var_dump($name, $addressLine1);

//===========================================
//Practical example

$url = parse_url('https://codecourse.com/');

var_dump($url); // ['scheme' => https, 'host' => codecourse.com]

$host = $url['host'];

//this will give you the same
['host' => $host] = parse_url('https://codecourse.com');
//you can destructor every function that gives array in the same line

//==================================
//undefined indexes

['host' => $host, 'query' => $query] = parse_url('https://codecourse.com/search?q=abc');
//['path' => /search, 'query => ?q=abv]

//if you dont add query will give undefined offset

//=======================================
//fix the problem, merging defaults

//1.
['host' => $host, 'query' => $query] = array_merge(['query' => null], parse_url('https://codecourse.com?q=abc'));

//it will get null, and if you put q you should add query first because that
//is how the array_merge behaves

//2.
$defaults = ['query' => null];
['host' => $host, 'query' => $query] = parse_url('https://codecourse.com?q=abc') + $defaults;

var_dump($host, $query);
