<?php

//Objects Principles
class Team
{
    protected $name;
    protected $members = [];
    public function __construct($name, $members = [])
    {
        $this->name = $name;
        $this->members= $members;
    }
    public static function start(...$params)
    {
      //  var_dump($params);
        //Vrakja array
        return new static(...$params);
        //$this-> i s not accesible in static methond
        //thats why you call new static
    }
    //Accept any number of arguments from consturctor

    public function name()
    {
        return $this->name;
    }
    public function members()
    {
        return $this->members;
    }
    public function add($name)
    {
        $this->members[] = $name;
    }
}
class Member
{
    protected $name;

    public function __construct($name)
    {
        $this->name = $name;
    }
    public function lastViewed()
    {

    }

}
$team = Team::start('Acme',[
    new Member('John Doe'),
    new Member('Jane Doe')]);

var_dump($team->members());