<?php

// Difference between Trait and Inheritance:

// 1. Inheritance: A class can inherit only from a single class (single inheritance).
// 2. Traits: A class can use multiple traits, allowing it to share functionality from multiple sources.

// Example of Inheritance Limitation:

class A
{
    public function say()
    {
        echo 'Hello world from A';
    }
}

class B
{
    public function say()
    {
        echo 'Hello world from B';
    }
}


class C extends A,B{ // that will get an error
   
}


// ❌ This will cause an error because PHP does not support multiple inheritance.
// class C extends A, B { } // ❌ ERROR: A class cannot extend multiple classes.

// Solution: Using Traits

trait TraitA
{
    public function sayA()
    {
        echo 'Hello world from TraitA';
    }
}

trait TraitB
{
    public function sayB()
    {
        echo 'Hello world from TraitB';
    }
}

class TraitC
{
    use TraitA, TraitB; // ✅ Using multiple traits to bring functionality into the class 
}

$obj = new TraitC;

$obj->sayA(); // Outputs: Hello world from TraitA
echo '<br>';
$obj->sayB(); // Outputs: Hello world from TraitB


// NOTE: a in trait you can receive multiple inheritence while in normal class you can not;