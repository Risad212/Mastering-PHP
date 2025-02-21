<?php

/**
 * ❌ Problem:  
 * A "Bird" class assumes all birds can fly, but some (e.g., Penguins) cannot.  
 * This violates the Liskov Substitution Principle (LSP), as subclasses should  
 * replace the superclass without altering expected behavior.  
 * 
 * 🔴 Issue:  
 * The "Penguin" class inherits a fly() method it shouldn't have, causing errors.  
 */


// Violating LSP
class Bird
{
    public function eat($name)
    {
        echo $name . " can eat.\n";
    }

    public function fly($name)
    {
        echo $name . " can fly.\n";
    }
}

class Eagle extends Bird {
    // Eaggle Can Eat and Can Fly Both
}

class Penguin extends Bird
{
    // Penguins cannot fly, but they inherit the fly() method, causing incorrect behavior.
}

$eagle = new Eagle();
$eagle->eat("Eagle");
$eagle->fly("Eagle"); // ✅ Works fine

echo "\n";

$penguin = new Penguin();
$penguin->eat("Penguin");
$penguin->fly("Penguin"); // ❌ Incorrect! Penguins cannot fly

echo "\n\n";

/**
 * ✅ Solution: Applying the Liskov Substitution Principle (LSP)
 * -------------------------------------------------------------
 * Instead of forcing all birds to fly, we use separate interfaces 
 * for eating and flying. This ensures that only birds capable of flying 
 * implement the "CanFly" interface.
 */

// Define separate behaviors
interface CanEat
{
    public function eat($name);
}

interface CanFly
{
    public function fly($name);
}

// Class for birds that can eat and fly
class EagleLSP implements CanEat, CanFly
{
    public function eat($name)
    {
        echo $name . " can eat.\n";
    }

    public function fly($name)
    {
        echo $name . " can fly.\n";
    }
}

// Class for birds that can eat but cannot fly
class PenguinLSP implements CanEat
{
    public function eat($name)
    {
        echo $name . " can eat.\n";
    }
}

// ✅ Now, our objects behave correctly
$eagleLSP = new EagleLSP();
$eagleLSP->eat("Eagle");
$eagleLSP->fly("Eagle"); // ✅ Works fine

echo "\n";

$penguinLSP = new PenguinLSP();
$penguinLSP->eat("Penguin"); // ✅ Correct, and no fly() method exists
