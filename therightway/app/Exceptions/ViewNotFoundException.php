<?php

namespace TheRightWay\App\Exceptions;

class ViewNotFoundException extends \Exception
{
    protected $message = 'View not found';
}