<?php

// Definition:
// The Registry Pattern provides a centralized place to store and retrieve objects globally,
// ensuring better maintainability and avoiding hidden dependencies.


// Proper Registry Pattern Implementation:

// Step 1: Define the Vehicle Interface
interface Vehicle {
    public function drive();
}

// Step 2: Create Concrete Vehicle Classes
class Bike implements Vehicle {
    public function drive() {
        echo 'Bike Drive';
    }
}

class Car implements Vehicle {
    public function drive() {
        echo 'Car Drive';
    }
}

// Step 3: Create a Proper Registry Class
class VehicleRegistry {
    private static array $vehicles = [];

    // Method to register a vehicle using a callback (Lazy Loading)
    public static function set(string $key, callable $resolver): void {
        self::$vehicles[$key] = $resolver;
    }

    // Method to retrieve a vehicle instance
    public static function get(string $key): Vehicle {
        if (!isset(self::$vehicles[$key])) {
            throw new Exception("No vehicle registered with key: $key");
        }
        return (self::$vehicles[$key])(); // Call the resolver function
    }
}

// Step 4: Register Vehicles Using Callbacks (Lazy Initialization)
VehicleRegistry::set('bike', fn() => new Bike());
VehicleRegistry::set('car', fn() => new Car());

// Step 5: Retrieve and Use Vehicles
$bike = VehicleRegistry::get('bike');
$car = VehicleRegistry::get('car');

$bike->drive(); // Output: Bike Drive
echo "\n";
$car->drive();  // Output: Car Drive

// Key Benefits of Registry Pattern:
// - **Lazy Loading:** Objects are only created when needed, improving performance.
// - **Encapsulation:** Centralized management of object instances.
// - **Prevents Hidden Dependencies:** Explicit object registration and retrieval.
// - **Error Handling:** Prevents undefined keys by throwing an exception.



