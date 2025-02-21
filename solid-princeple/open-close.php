<?php

/**
 * Open/Closed Principle (OCP) in PHP
 *
 * ✅ Classes should be open for extension but closed for modification.
 * ✅ New functionality should be added without changing existing code.
 * 
 * This example demonstrates OCP by designing a flexible Bird structure
 * where new bird types can be added without modifying existing code.
 */

// ❌ Violating OCP: Modifying Bird class for every new bird type
class Bird
{
    public function getBird($name)
    {
        if ($name == 'eagle') {
            echo "$name can fly\n";
        } elseif ($name == 'penguin' || $name == 'cassowary') {
            echo "$name cannot fly\n";
        }
    }
}

// Every time we add a new bird, we must modify the Bird class. ❌ BAD DESIGN

// ------------------------------------------------------------

// ✅ Correcting with OCP: Using Interfaces for Extension

interface CanFly
{
    public function fly($name);
}

interface CanEat
{
    public function eat($name);
}

// ✅ Open for extension: New birds can be added without modifying existing code.
class Eagle implements CanFly, CanEat
{
    public function fly($name)
    {
        echo "$name can fly\n";
    }

    public function eat($name)
    {
        echo "$name can eat\n";
    }
}

class Penguin implements CanEat
{
    public function eat($name)
    {
        echo "$name can eat\n";
    }
}

// Usage Example
echo "=== Open/Closed Principle Example ===\n";

$eagle = new Eagle();
$eagle->fly('Eagle');
$eagle->eat('Eagle');

echo "\n";

$penguin = new Penguin();
$penguin->eat('Penguin');

// ✅ Now, new birds can be added without modifying existing classes.
