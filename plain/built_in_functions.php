<?php

$name = '....Nikola.........';
echo 'strtolower: ' . strtolower($name) . '<hr>';
echo 'strtoupper: ' . strtoupper($name) . '<hr>';
echo 'strlen: ' . strlen($name) . '<hr>';

//usage: for registering sorting
//strips the white space (or other characters) from the beginning and the end.
echo 'trim: ' . trim($name, '.') . '<hr>';
echo 'ltrim: ' . ltrim($name, '.') . '<hr>';
echo 'rtrim: ' . rtrim($name, '.') . '<hr>';

//get the string, start from and end to
echo 'substr: ' . substr($name, 5, 10) . '<hr>';
echo 'substr with ceil and strlen: ' . substr($name, 0, ceil(strlen($name) / 2)) . '<hr>';
//ceil rounds the number
//empty - returns bool, determines if the variable is empty
//?page= it will not show anything
//with empty will show 1
//usage: for registering and storing data
$page = $_GET['page'] ?? 1;

if (empty(trim($page))) {
    $page = 1;
}

echo 'empty and trim: ' . $page . '<hr>';

$number = 3.321321321;

$numberTwo = 1000000000;

echo 'number format decimals: ' . number_format($number, 2) . '<hr>';

echo 'number format thousands comma separator: ' . number_format($numberTwo, 2) . '<hr>';

//header('Location:' . $somePage . '.php');
