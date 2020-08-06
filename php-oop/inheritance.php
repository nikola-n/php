<?php
//
//Ako imame dve razlicni logiki za ista funkcija pravime
//override na metodot
abstract class Shape
{

    protected $color;

    public function __construct($color = 'red')
    {

        $this->color = $color;
    }

    public function getColor()
    {
        return $this->color;
    }

    abstract protected function getArea();
}

class Square extends Shape
{
    protected $length = 4;

    public function getArea()
    {
        return pow($this->length, 2);
    }

}

class Triangle extends Shape
{
    protected $base = 4;
    protected $height = 7;

    public function getArea()
    {
        return .5 * $this->base * $this->height;
    }

}

class Circle extends Shape
{
    protected $radius =5;
    public function getArea()
    {
        return M_PI * pow($this->radius, 2);
    }

}

//var_dump(new Square('red'));
echo (new Triangle)->getArea();
echo (new Square('green'))->getColor();
echo (new Circle)->getArea();
//--------------------------------------------------------------
abstract class Mailer
{
    public function send($to, $from, $body)
    {

    }

}
class userMailer extends Mailer
{
    public function sendWelcomeEmail(User $user)
    {
        return $this->send($user->email);
    }
}

//---------------------------------------------------------------------

class Collection
{
    protected array $items = [];

    /**
     * Collection constructor.
     * @param array $items
     */
    public function __construct($items = [])
    {
        $this->items = $items;
    }
    public function sum($key)
    {
     // return array_sum(array_map(fn($item) => $item->$key,$this->items));
    return array_sum(array_column($this->items, $key));
    }
}
class VideosCollection extends Collection
{
    public function length()
    {
        return $this->sum('length');
    }
}
class Video
{
    public $title;
    public $length;

    /**
     * Video constructor.
     * @param $title
     * @param $length
     */
    public function __construct($title,$length)
    {
        $this->title = $title;
        $this->length = $length;
    }

}

$collection = new Collection([
    new Video('Some Video',100),
    new Video('Some Video1',200),
    new Video('Some Video2',300),
]);
echo $collection->sum('length'); //600
//kje gleda vo propertito length vo video konstruktorot!

$videos = new VideosCollection([
    new Video('New Video',150),
    new Video('New Video1',250),
    new Video('New Video2',350),
]);

echo $videos->length();
echo "<hr>";

