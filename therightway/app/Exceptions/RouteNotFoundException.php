<?php

namespace TheRightWay\App\Exceptions;

class RouteNotFoundException extends \Exception
{
    protected $message = '404 Not Found';
}