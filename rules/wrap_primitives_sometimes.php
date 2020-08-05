<?php

class Second {
    protected $seconds;

    public function __construct($seconds)
    {
        $this->seconds = $seconds;
    }
}

function cache($data, Second $seconds) //rather than integer it should be of it's own type -it's the rule
{

}


cache([], new Second(50));

//Shouldn't' always wrap within it's own class every primiteves'
//1. Does it bring clarity?
//    2. Is there behavior associate with this concept?
//    3. Should there be validation associated? (Consistency)
//    4. Does it represent important domain concept?  //google maps, latitude, lagintute coordinates
class Location {
    public function __construct($longitude, $latitude)
    {
    }
}

//If you run workout place, sign for membership,
//tool for measure weight ->weight is important then.
class Weight {
    protected $weight;

    public function __construct($weight)
    {
        $this->weight = $weight;
    }

    //behavior
    public function gain($pounds)
    {//if it's value object then we can make it immububle(doesn't change)
        //$this->weigth += $pounds;
        return new static($this->weight + $pounds);

    }

    public function lose($pounds)
    {
        return new static($this->weight - $pounds);

    }
}

class WokoutPlaceMember {
    public function __construct($name, Weight $weight)
    {
        $weight->gain(5); //wieght = 150
    }

    //for how long member workout
    public function workoutFor(TimeLength $length)
    {
        $length->inSeconds();
        $length->inHours();
        $length->forMinutes();
    }
}

class  TimeLength {

    private $seconds;

    public function __construct($seconds)
    {
        $this->seconds = $seconds;
    }

    public static function fromMinutes($minutes)
    {
        return new static($minutes * 60);
    }

    public static function fromHours($hours)
    {
        return new static($hours * 3600);
    }

    public function inSeconds()
    {
        return $this->seconds;
    }

    public function inHours()
    {
        return $this->seconds / 60 / 60;
    }
}

//It's more clear to instanciate it with new Object and we can then
//run methods within a new class constructor, it wouldn't be possible
//if we just put exact number for weight;

$john = new WokoutPlaceMember('John Doe', new Weight(1600));
// You can add new TimeLength but wouldn't be that clear is it a hour, week, year
$john->workoutFor(TimeLength::fromHours(3));


class EmailAddress {
    public function __construct($email)
    {
        if ( ! filter_var($email, FILTER_VALIDATE_EMAIL))
        {
            throw new \http\Exception\InvalidArgumentException();
        }
        $this->email = $email;
    }
}