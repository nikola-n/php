 <?php
 //Statics and Constants
class Math {
    public static function add(...$nums) {
        return array_sum($nums);
    }
}

echo Math::add(1,2,3);
echo '<hr>';
//Koga metodot ne pravi nisto povekje od primanje vrednosti
 //i davanje output, megjutoa ako dava calls do drugite klasi
//mnogu brzo moze da brejkne, potesko se testira, odrzuva i ne e
 //dobra ideja.

 //Koga mislis na static misli na share sporedluvanje.
 class Person {
     public  $age = 1;
     public function haveBirthday()
     {
       $this->age+=1;
     }
     public function age()
     {
         return $this->age;
     }
 }

 $joe = new Person();
 $joe->haveBirthday();
 $joe->haveBirthday();
 echo $joe->age();
 $jane = new Person();
 $jane->haveBirthday();

 echo $jane->age();
//primer za const-tax
 class BankAccount
 {
    const TAX = .09;

 }
//prolemot e so mozeme da go apdejtirame odma, a ne treba da se smeni
 echo BankAccount::TAX;

 //Vo laravel Str klasata(ne e facade), site metodi se staticni
 //site metodi se basic operations globalno upotreblivi
 //Ova e zatoa sto nie ne manipulirame ili go voznemiruvame
 //nadvoresniot svet