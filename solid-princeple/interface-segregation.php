<?php

/**
 * Interface Segregation Principle (ISP) in PHP
 *
 * ✅ Clients should not be forced to depend on interfaces they do not use.
 * ✅ Instead of one large interface, create smaller, more specific interfaces.
 * 
 * This example demonstrates ISP by ensuring that classes only implement
 * the methods they actually need.
 */

// ❌ Violating ISP: A general interface forcing all classes to implement all methods
interface Citizen
{
    public function canEat($object);
    public function canRun($object);
}

// ✅ No violation here – Man can both eat and run
class Man implements Citizen
{
    public function canEat($object)
    {
        echo "$object can eat\n";
    }

    public function canRun($object)
    {
        echo "$object can run\n";
    }
}

$man = new Man();
$man->canEat('Man');
$man->canRun('Man');

echo "\n";

// ❌ Violation of ISP – Robot does not need `canEat()`, but is forced to implement it
class Robot implements Citizen
{
    public function canEat($object)
    {
        echo "$object can eat\n"; // This is incorrect because robots do not eat
    }

    public function canRun($object)
    {
        echo "$object can run\n";
    }
}

$robot = new Robot();
$robot->canEat('Robot'); // ❌ Wrong behavior
$robot->canRun('Robot');

echo "\n";

// ------------------------------------------------------------

// ✅ Correcting ISP: Creating separate interfaces

interface Eatable
{
    public function canEat($object);
}

interface Runnable
{
    public function canRun($object);
}

// ✅ Man implements only what it needs
class ManISP implements Eatable, Runnable
{
    public function canEat($object)
    {
        echo "$object can eat\n";
    }

    public function canRun($object)
    {
        echo "$object can run\n";
    }
}

$manISP = new ManISP();
$manISP->canEat('Man');
$manISP->canRun('Man');

echo "\n";

// ✅ Robot implements only what it needs
class RobotISP implements Runnable
{
    public function canRun($object)
    {
        echo "$object can run\n";
    }
}

$robotISP = new RobotISP();
$robotISP->canRun('Robot'); // ✅ Correct behavior

// ------------------------------------------------------------

// ✅ Benefits of Using the Interface Segregation Principle (ISP):
/*
 * - Ensures that classes only implement the methods they actually use.
 * - Avoids forcing classes to depend on unused methods.
 * - Makes code easier to maintain and extend.
 * - Improves code readability and reduces unnecessary complexity.
 * - Enhances flexibility by allowing independent development of related behaviors.
 */
