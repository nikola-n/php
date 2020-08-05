<?php
class Stats
{
    private $user;

    public function __construct($user)
    {
        $this->user = $user;
    }

    public function favorites()
    {

    }
    public function watchLater()
    {

    }
    public function completion()
    {

    }
    public function experience()
    {

    }
}

class User
{
    public function stats()
    {
        //this se odnesuva na referenca na user itself...
        return new Stats($this);
    }
}

//$user->stats()->exeperience();   