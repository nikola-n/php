<?php

//Visual Debt
//interface EventDispatcher
//{
//    //don't default return types and typehints
//    public function listen($name, $handler);
//
//    public function fire($name);
//}
//final class can't inherit another class
class SyncDispatcher //implements EventDispatcher
{
    protected $events = [];

    public function listen($name, $handler)
    {
        $this->events[$name][] = $handler;
    }

    public function fire($name)
    {
        if ( ! array_key_exists($name, $this->events)) {
            return false;
        }

        foreach ($this->events[$name] as $event) {
            $event();
        }
        return true;
    }
}

$event = new SyncDispatcher();
$event->listen('subscribed', function () {
    var_dump('handling it');
});
$event->listen('subscribed', function () {
    var_dump('handling it again');
});
$event->fire('subscribed');

//dot basic exercise 
for ($i = 0; $i <= 5; $i++) {
    for ($j = 0; $j <= $i; $j++) {
        echo '*';
    }
    echo '<br>';
}

echo '<hr>';

//print matrix
$number = 5;
while ($number < 0) {
    ;
}
for ($i = 0; $i < $number; $i++) {
    for ($j = 0; $j < $number; $j++) {
        echo '#';
    }
    echo '<br>';
}

//greedy algorithm - cash problem set 1
$dollars = 0.61;

$cents  = round($dollars * 100);
$coins  = 0;
$result = 0;

if ($cents >= 25) {
    $result = $cents - 25;
    $coins++;
    while ($result >= 25) {
        $result = $result - 25;
        $coins++;
    }
    while ($result >= 10) {
        $result = $result - 10;
        $coins++;
    }
    while ($result >= 5) {
        $result = $result - 5;
        $coins++;
    }
    while ($result >= 1) {
        $result = $result - 1;
        $coins++;
    }
}

//Luhn’s Algorithm - problem set 1

$visaNumber = 4324845271575515;

$broj = 25;
function reverse($n)
{
    $rev = 0;
    while ($n != 0) {
        $rev = ($rev * 10) + ($n % 10);
        $n   = floor($n / 10);
    }
    return $rev;
}

echo '<hr>';
echo 'broj:' . reverse($visaNumber) . '<hr>';

function getSum($n)
{
    //$n = reverse($n);
    $sumOdd  = 0;
    $sumEven = 0;
    $c       = 1;
    while ($n != 0) {
        if ($c % 2 == 0) {
            $sumEven += $n % 10;
        } else {
            $sumOdd += $n % 10;
        }
        $n = floor($n / 10);
        $c++;
    }
    echo $sumOdd . '<hr>';
    echo $sumEven;
}

echo getSum($broj);
//second way
//If its 1 then its odd if its 0 its even
$isOdd = ($visaNumber % 2 == 1) ? true : false;

$sumEven = 0;
$sumOdd  = 0;
$count   = 0;
while ($visaNumber != 0) {
    if ($isOdd) {
        $sumOdd += $visaNumber % 10;

    } else {
        $multiplyEven = (($visaNumber % 10) * 2);
        $sumEven      += floor($multiplyEven / 10) + ($multiplyEven % 10);
    }
    $isOdd      = ! $isOdd;
    $visaNumber = floor($visaNumber / 10);
    $count++;
}
$sumCheck = $sumEven + $sumOdd;

if ($sumCheck % 10 == 0) {
    $isValid = true;
    echo "Credit card is valid!";
} else {
    $isValid = false;
    echo "Credit card is not valid!";
}
$visaNumber = 4324845271575515;

if ($count === 15 && $isValid) {
    echo "AMEX";
} else if ($isValid && $count === 16 && (reverse($visaNumber) % 10 != 4)) {
    echo "MasterCard";
} else if ($isValid && ($count === 16 || $count === 13) && (reverse($visaNumber) % 10 == 4)) {
    echo "VISA";
} else {
    echo "INVALID";
}
echo '<hr>';
echo 'Another way to calculate sum of the even places in number:' . $sumEven;
echo 'Another way to calculate sum of the odd places in number:' . $sumOdd;

function dd($value)
{
    return die(var_dump(($value)));
}

// variables variable
$foo = 'bar';

$$foo = 'hey';

// $bar = 'hey';
//dd($bar); // hey
//dd(${$foo});
//dd($$foo);

//Constants
const BAR = 'foo';
define('BAR_STATUS', 'Online');
//if(BAR_STATUS == 'Online') {} // can be used!
// if(BAR == 'foo') // cannot be used!

// strings
// heredoc
$x    = 1;
$text = <<< TEXT
Line  $x
Line 2
Line 3
<p>HHey</p>
TEXT;

echo nl2br($text);
//nowdoc
$text = <<< 'TEXT'
Line $x
Line 1
Line 2
TEXT;

