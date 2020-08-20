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

