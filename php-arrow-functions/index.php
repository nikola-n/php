<?php
//anonymous function
//used when you want to put some closure and you want to iterate
$greet = function () {
    return 'Hey';
};

var_dump($greet());

$users = [['id' => 1, 'name' => 'Nikola'], ['id' => 2, 'name' => 'Billy']];
//extract the id's

$ids = array_map(function ($user) {
    return $user['id'];
}, $users);

var_dump($ids);

//======================================
//basics

$greet = fn($message) => $message;

var_dump($greet('Hey'));

$add = fn($left, $right) => $left + $right;

var_dump($add(5, 10));

$users = [['id' => 1, 'name' => 'Nikola'], ['id' => 2, 'name' => 'Billy']];

$ids = array_map(fn($user) => $user['id'], $users);

var_dump($ids);

//scopes in arrow functions

$name = 'Nikola';
//here the scope is global, in functions we use($name)
$greet = fn() => "HEY" . $name;

var_dump($greet());

//multi line expressions

$string = 'nikola';
$split  = str_split($string);
var_dump($split); //['n','i','k',o','l','a']

$result = array_map(function ($char, $count) {
    return [
        'char'   => $char,
        'occurs' => $count,
    ];
}, array_unique($split), array_count_values($split));

var_dump($result); // [ 0 =>
// [['char'] => 'n'],[['char'] => 'i'] etc..

$result = array_map(fn($char, $occurs) => compact('char', 'occurs'), array_unique($split), array_count_values($split));

//one expression allowed
$user = null;
//$user = ['name' => 'Nikola'];

$greet = function () use ($user) {
    if ( ! $user) {
        return 'Hey';
    }
    return 'Hey' . $user['name'];
};

var_dump($greet);

//arrow function just returns a value, only one expression

$greet = fn() => trim('Hey ' . ($user ? $user['name'] : ''));

//type hinting

//declare(strict_types = 1);
$greet = function (string $greeting): string {
    return $greeting;
};

$greet = fn(string $greeting): string => $greeting;

var_dump($greet('hey'));

class User
{
    /**
     * @var int
     */
    public int $id;

    public function __construct(int $id)
    {
        $this->id = $id;
    }
}

$users = [new User(1), new User(2)];
var_dump($users); //object array of ids

$ids = array_map(function (User $user):int {
    return $user->id;
}, $users);

var_dump($ids);

$ids = array_map(fn (User $user):int => $user->id, $users);