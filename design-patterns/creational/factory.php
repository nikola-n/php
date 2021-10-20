<?php
// Provides an interface for creating objects without
//specifying their concrete classes.

// Laravel is using it to render views
interface PizzaFactoryContract
{
    public function make(array $toppings = []);
}

class PizzaFactory implements PizzaFactoryContract
{

    public function make(array $toppings = []): Pizza
    {
        return new Pizza($toppings);
    }
}

class Pizza
{
    public function __construct($toppings = [])
    {
    }
}

$pizza = (new PizzaFactory())->make(['chicken', 'onion']);

//--------------------------------------------------------------

interface Logger
{
    public function log(string $message);
}

class StdoutLogger implements Logger
{

    public function log(string $message)
    {
        echo $message;
    }
}

class FileLogger implements Logger
{
    public function __construct(private string $filePath)
    {
    }

    public function log(string $message)
    {
        file_put_contents($this->filePath, $message . PHP_EOL, FILE_APPEND);
    }
}

interface LoggerFactory
{
    public function createLogger(): Logger;
}

class StdoutLoggerFactory implements LoggerFactory
{
    public function createLogger(): Logger
    {
        return new StdoutLogger();
    }
}

class FileLoggerFactory implements LoggerFactory
{
    public function __construct(private string $filePath)
    {
    }

    public function createLogger(): Logger
    {
        return new FileLogger($this->filePath);
    }
}
