<?php

/**
 * Singleton Pattern in PHP
 *
 * Ensures a class has only one instance and provides a global access point.
 */

class Singleton
{
    private static $instance = null;

    // Private constructor to prevent direct instantiation
    private function __construct() {}

    // Prevent cloning to ensure a single instance
    private function __clone() {}

    // Prevent unserialization to maintain singleton integrity
    public function __wakeup()
    {
        throw new \Exception("Cannot unserialize singleton");
    }

    /**
     * Get the single instance of the class
     */
    public static function getInstance(): Singleton
    {
        if (self::$instance === null) {
            self::$instance = new self();
        }
        return self::$instance;
    }
}

// Usage example
echo "Checking Singleton Instance:\n";
$singleton1 = Singleton::getInstance();
$singleton2 = Singleton::getInstance();
var_dump($singleton1 === $singleton2); // true

/*
 * NOTE: Methods that can break the Singleton pattern if not restricted:
 * - Object Cloning (clone)
 * - Serialization (unserialize)
 *
 */
