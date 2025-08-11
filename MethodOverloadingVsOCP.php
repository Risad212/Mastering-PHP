<?php
/**
 * PHP Method Overloading (simulated) vs OCP-friendly design
 *
 * Shows how PHP simulates overloading with __call() and why it breaks OCP,
 * plus a better approach using interfaces and polymorphism.
 */

// --- Simulated Method Overloading with __call() ---
class CalculatorOverload {
    public function __call($name, $args) {
        if ($name === 'add') {
            if (count($args) === 2) return $args[0] + $args[1];
            if (count($args) === 3) return $args[0] + $args[1] + $args[2];
        }
        throw new BadMethodCallException("Method $name not supported.");
    }
}

$calc1 = new CalculatorOverload();
echo $calc1->add(2, 3) . "\n";    // 5
echo $calc1->add(2, 3, 4) . "\n"; // 9

// Adding new overload requires editing __call() => breaks OCP

// --- OCP-friendly design with interfaces ---
interface Operation {
    public function compute(...$args);
}

class AddOperation implements Operation {
    public function compute(...$args) {
        return array_sum($args);
    }
}

class CalculatorOCP {
    public function calculate(Operation $op, ...$args) {
        return $op->compute(...$args);
    }
}

$calc2 = new CalculatorOCP();
echo $calc2->calculate(new AddOperation(), 2, 3) . "\n";      // 5
echo $calc2->calculate(new AddOperation(), 2, 3, 4) . "\n";   // 9

// To add new operations, just create new classes — no edits needed in CalculatorOCP

// --- Difference Summary ---
// 1. Simulated overloading (__call()):
//    - Single method handles all cases.
//    - Must edit __call() to add new behaviors (breaks OCP).
//
// 2. OCP-friendly design (interfaces):
//    - Different classes for each behavior.
//    - Add new classes without modifying existing code (follows OCP).
?>
