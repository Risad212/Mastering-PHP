<?php

// Definition:
// The Factory Pattern is a method to create objects from a central place
// without needing to know the specific class or how to create it.


// Without Factory Pattern - Problems

// Concrete Products
class Car
{
    public function drive()
    {
        return "Driving a Car";
    }
}

class Bike
{
    public function drive()
    {
        return "Riding a Bike";
    }
}

// Client Code (Without Factory Pattern)
$vehicle1 = new Car();  // Problem: Directly creating objects leads to tight coupling.
echo $vehicle1->drive();  // Output: "Driving a Car"

$vehicle2 = new Bike();  // Problem: Directly creating objects leads to code duplication.
echo $vehicle2->drive();  // Output: "Riding a Bike"


echo "\n\n";

// Solution: Factory Pattern

// Product Interface
interface Vehicle
{
    public function drive();
}

// Concrete Products
class Car implements Vehicle
{
    public function drive()
    {
        return "Driving a Car";
    }
}

class Bike implements Vehicle
{
    public function drive()
    {
        return "Riding a Bike";
    }
}

// Factory Class
class VehicleFactory
{
    public static function createVehicle($type)
    {
        if ($type == 'Car') return new Car();
        if ($type == 'Bike') return new Bike();
        throw new Exception("Invalid vehicle type");
    }
}

// Client Code (Using Factory Pattern)
$vehicle = VehicleFactory::createVehicle('Car');  // Problem solved: Vehicle creation logic is centralized.
echo $vehicle->drive();  // Output: "Driving a Car"


// Problems Solved with Factory Pattern:
// - **Tight Coupling**: Client code no longer directly depends on the `Car` and `Bike` classes. The factory handles object creation.
// - **Code Duplication**: Object creation logic is centralized in the factory, avoiding repetition in client code.
// - **Difficult Maintenance**: Changes to vehicle creation logic are now made in the factory, so client code doesn't need to be modified.
