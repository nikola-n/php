<?php
//encapsulation => Enclose within a capsule

//signaling the outside world that that isn't public
class Person
{
    public $name;

    public function __construct($name)
    {
        $this->name = $name;
    }

    private function thingsThatKeepUpAtNight()
    {
        return 'We are all going to die and that is terrifying';
    }
}

$method = new \ReflectionMethod(Person::class,'thingsThatKeepUpAtNight');
$method->setAccessible(true);
$person = new Person('Bob');


var_dump($method->invoke($person));

class TennisMatch
{
    /**@api*/
//    If you want to make it public for internal reasons only
//devs write @api
protected $playerOne;

    public function score()
    {

    }

    /**
     * @return mixed
     */
    public function getPlayerOne()
    {
        return $this->playerOne;
    }

    protected function hasWinner()
    {

    }
    protected function hasAdvantage()
    {

    }
    protected function inDeuce()
    {

    }
}