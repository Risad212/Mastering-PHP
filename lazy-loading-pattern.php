<?php

/**
 * Lazy Loading Pattern
 * -------------------
 * Lazy loading defers the creation of an object until it is actually needed.
 * This improves performance and reduces memory usage by avoiding unnecessary
 * instantiation of objects.
 *
 * Problem It Solves:
 * ------------------
 * 1. **Performance Issues**: Creating objects upfront can slow down the application,
 *    especially if the objects are resource-intensive or rarely used.
 * 2. **Memory Waste**: Instantiating objects that may never be used consumes
 *    unnecessary memory.
 * 3. **Inefficient Resource Usage**: Loading data or resources (e.g., database
 *    connections, files) at startup can lead to inefficiencies.
 *
 * Solution:
 * ---------
 * Lazy loading delays object creation until the object is actually needed,
 * improving performance and resource utilization.
 */

// Step 1: Define an interface
interface Vehicle {
    public function drive();
}

// Step 2: Create a concrete class
class Car implements Vehicle {
    public function drive() {
        echo "Driving a car!\n";
    }
}

// Step 3: Implement Lazy Loading
class LazyVehicleLoader {
    private $vehicle = null;
    private $vehicleClass;

    public function __construct(string $vehicleClass) {
        $this->vehicleClass = $vehicleClass;
    }

    public function getVehicle(): Vehicle {
        if ($this->vehicle === null) {
            echo "Loading vehicle...\n"; // Simulate lazy loading
            $this->vehicle = new $this->vehicleClass();
        }
        return $this->vehicle;
    }
}

// Step 4: Usage Example
$lazyLoader = new LazyVehicleLoader(Car::class);
$lazyLoader->getVehicle()->drive(); // Vehicle is loaded here
$lazyLoader->getVehicle()->drive(); // Vehicle is already loaded

