<?php
//1. Array unpacking with string keys

$attributes = [
    'title' => 'My blog post',
    'body'  => 'Lorem ipsum',
];
$additional = ['category_id' => 3];

$attributes = array_merge($attributes, $additional);

//in php 8.0 it doesn't work, in 8.1 it will work
//Post::create([
//    ...$attributes,
//    ...$additional,
//]);
//var_dump($attributes);

//$attributes = ['title' => 'My Blog Post', 'body' => 'Lorem ipsum.'];
//
//$additional = ['category_id' => 1];
//
//Post::create($attributes + $additional);

//The + operator returns the right-hand array appended to the left-hand array; for keys
// that exist in both arrays, the elements from the left-hand array will be used,
// and the matching elements from the right-hand array will be ignored.

//2. Never return type

//in php8.1 it will throw and error, you cannot return anything in this function

//function visit($url): never {
//    header('Location:');

//return 'asdads';
//}

//3. Constructor initializers

class MailchimpNewsletter implements Newsletter
{
    public function subscribe($email)
    {
        var_dump('testing');
    }
}

// in php8.0

class SignUp
{
    public function perform(Newsletter $newsletter = null)
    {
        $newsletter ??= new MailchimpNewsletter();
        $newsletter->subscribe('nikola@thecodeconnectors.nl');
    }
}

//in php8.1
//class SignUp
//{
//    public function perform(Newsletter $newsletter = new MailchimpNewsletter)
//    {
//        $newsletter->subscribe('nikola@thecodeconnectors.nl');
//    }

interface Newsletter
{
    public function subscribe($email);
}

(new SignUp())->perform();

//4. Readonly class properties
class Project
{
    public function __construct(protected string $uuid)
    {
    }

    //in php8 to access the uuid you need to add getter

    ///**
    // * @return string
    // */
    //public function getUuid(): string
    //{
    //    return $this->uuid;
    //}
    //

    //php8.1
    //public function __construct(public readonly string $uuid)
    //{

    //}
}

//useful for DTO
$p = (new Project('heyeye'));

//this will work in php8.1 but you cannot change it!
var_dump($p->uuid);

//this wont work
//$p->uuid = 'change';

//5. Enums
//only in php8.1
enum CoinFlip: string
{
    // you can add them values too but you must declare which type it is (string)
    case Heads = 'heads';
    case Tails = 'tails';
}

function test(CoinFlip $flip)
{
    var_dump($flip->name);
    var_dump($flip->value);
}

test(CoinFlip::Heads);

enum PostStatus
{
    case Draft;
    case Published;

    public function asIcon()
    {
        // this refers to draft or published.
        return match ($this) {
            self::Draft => '...',
            self::Published => '.ew',
        };
    }
}

echo PostStatus::Published->asIcon();