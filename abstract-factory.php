<?php

// Without Factory Pattern (Tightly Coupled Code)

// Step 1: Define Concrete Vehicle Classes
class Car {
    public function drive() {
        echo "Car Drive";
    }
}

class Bike {
    public function drive() {
        echo "Bike Drive";
    }
}

class Truck {
    public function drive() {
        echo "Truck Drive";
    }
}

// Step 2: Client Code Directly Instantiates Objects
function getVehicle($type) {
    switch ($type) {
        case "Car":
            $vehicle = new Car();
            break;
        case "Bike":
            $vehicle = new Bike();
            break;
        case "Truck":
            $vehicle = new Truck();
            break;
        default:
            throw new Exception("Invalid vehicle type");
    }
    $vehicle->drive();
}

getVehicle("Car");  // Output: "Car Drive"
getVehicle("Bike"); // Output: "Bike Drive"
getVehicle("Truck"); // Output: "Truck Drive"

// Problems with this Approach:
// - **Tight Coupling**: Client code is directly dependent on concrete classes.
// - **Code Duplication**: New vehicle types require modifying multiple places.
// - **Difficult Maintenance**: Every new vehicle requires changes in the switch case.

// =========================================================
// Solution: Using Abstract Factory Pattern
// =========================================================

// Step 1: Define the Vehicle Interface
interface Vehicle {
    public function drive();
}

// Step 2: Create Concrete Vehicle Classes
class Car implements Vehicle {
    public function drive() {
        echo "Car Drive";
    }
}

class Bike implements Vehicle {
    public function drive() {
        echo "Bike Drive";
    }
}

class Truck implements Vehicle {
    public function drive() {
        echo "Truck Drive";
    }
}

// Step 3: Define Abstract Factory Interface
interface VehicleFactory {
    public function createVehicle(): Vehicle;
}

// Step 4: Create Concrete Factories
class CarFactory implements VehicleFactory {
    public function createVehicle(): Vehicle {
        return new Car();
    }
}

class BikeFactory implements VehicleFactory {
    public function createVehicle(): Vehicle {
        return new Bike();
    }
}

class TruckFactory implements VehicleFactory {
    public function createVehicle(): Vehicle {
        return new Truck();
    }
}

// Step 5: Use the Correct Factory Without Modifying Client Code
function getVehicle(VehicleFactory $factory) {
    $vehicle = $factory->createVehicle();
    $vehicle->drive();
}

getVehicle(new CarFactory());  // Output: "Car Drive"
getVehicle(new BikeFactory()); // Output: "Bike Drive"
getVehicle(new TruckFactory()); // Output: "Truck Drive"

// Benefits of Abstract Factory Pattern:
// - **Loose Coupling**: Client code depends only on the interface, not concrete classes.
// - **Scalability**: New vehicle types can be added without modifying existing code.
// - **Maintainability**: Factories handle object creation, making code cleaner and modular.


