<?php
//Value Objects, Mutable and Immutable objects
class Age
{
    private $age;

    public function __construct($age)
    {
        $this->age = $age;
        if ($age < 0 || $age > 120) {
            throw new InvalidArgumentException('That makes no sense');
        }
    }
    //Imame metodi koi go promenuvaat internal state na objektot
    //kako sto e i zatoa e Mutable object
//    public function increment()
//    {
//        $this->age+=1;
//    }
//primer za Immutable
//Davame nova instanca na Age
    public function increment()
    {
        return new self($this->age + 1);
    }
    public function getAge()
    {
        return $this->age;
    }
}
$age = new Age(35);
$age = $age->increment(); //mora da se instancira noviot objekt
$age->increment();
var_dump($age->getAge());

//function register(string $name, Age $age)
//{
//}
//$age= new Age(32);
//var_dump($age);
//register('John Doe', $age);

//Benefiti
//1. Avoids primitive obsession and readability //pocnavme so integer no vidovme deka ne e samo integer
//2. Helps with consisency so pravenje na validacija vo konsturktorot
//3. So avoiding setters i so private properties dobivme Immutability.

//nema potreba da se mapira sekoj primitive vo custom type, samo koga jasno dava prednost
//Nekolku primeri koga se koristi

class Coordinates
{
    private $x;
    private $y;

    /**
     * Coordinates constructor.
     * @param $x
     * @param $y
     */
    public function __construct($x, $y)
    {
        $this->x = $x;
        $this->y = $y;
    }
}
function pin(Coordinates $coordinates)
{
//   $coordinates->getX();  iili ako se public samo x
//   $coordinates->getY();
//za da go znaes koordinatot ne e dovolno da znaes samo x, ti treba i y
}
function distance(Coordinates $begin, Coordinates $end)
{

//istoto i dole
}
// Dva razlicni seta na data se konektirani

//Zatoa se pravi klasa odnosno objekt Coordinates

//Drug poznat primer e
class Money
{
//    ako konstantno pretvarame pari ni treba currency i amount 5dollarUSD
//treba da napravime nov tip za da gi vratime i amountot i currencyto
}
class DateSpan
{
    private $beginDate;
   private $end;
}
function sheduledVacation($arrive, $depart){

}
//Identity vs Value