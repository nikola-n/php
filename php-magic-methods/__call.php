<?php

//__call() is triggered when invoking inaccessible methods in an object context.
class Person
{

    function say()
    {
        echo "Hello, world!<br>";
    }

    function __call($funName, $arguments)
    {
        echo "The function you called：" . $funName . "(parameter：";  // Print the method's name that is not existed.
        print_r($arguments); // Print the parameter list of the method that is not existed.
        echo ")does not exist!！<br>\n";
    }
}

$Person = new Person();
$Person->run("teacher"); // If the method which is not existed is called within the object, then the __call() method will be called automatically.
$Person->eat("John", "apple");
$Person->say();

class MethodTest
{
    public function __call($name, $arguments)
    {
        // Note: value of $name is case sensitive.
        echo "Calling object method '$name' "
            . implode(', ', $arguments). "<br>";
    }

    /**  As of PHP 5.3.0  */
    public static function __callStatic($name, $arguments)
    {
        // Note: value of $name is case sensitive.
        echo "Calling static method '$name' "
            . implode(', ', $arguments). "\n";
    }
}

$obj = new MethodTest;
$obj->runTest('in object context');

MethodTest::runTest('in static context');  // As of PHP 5.3.0
