<?php

// Difference between Abstract Class and Interface

interface User
{
    public function greeting();
}

class Teacher implements User
{
    public function greeting()
    {
        echo "Hello World" . PHP_EOL;
    }
}

$teacher = new Teacher();
$teacher->greeting(); // Output: Hello World

// In an interface, all defined methods must be implemented.
// In an abstract class, we can have both abstract and non-abstract methods.

abstract class ABSUser
{
    abstract public function greeting();

    public function teach()
    {
        echo "Teaching English" . PHP_EOL;
    }
}

class Madam extends ABSUser
{
    public function greeting()
    {
        echo "Hello!" . PHP_EOL;
    }
}

// Inheriting from ABSUser but only implementing greeting(), ignoring teach()
$madam = new Madam();
$madam->greeting(); // Output: Hello!
