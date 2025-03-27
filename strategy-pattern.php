<?php

// Definition:
// The Strategy Pattern allows you to define a family of algorithms,
// encapsulate each one, and make them interchangeable. The algorithm can
// be selected at runtime, allowing you to change the behavior of an object dynamically.

// Problem Without Strategy Pattern:
// - **Hard-Coded Algorithms:** If you use conditional logic for different behaviors,
//   the code becomes harder to maintain and extend.
// - **Tight Coupling:** The behavior is tightly coupled with the context class,
//   making it harder to switch or add new algorithms.

// Step 1: Define the Strategy Interface
interface PaymentStretegy {
    public function pay();
}

// Step 2: Create Concrete Strategies
class Paypal implements PaymentStretegy  {
    public function pay(){
        echo 'Payment from Paypal';
    }
}

class Payonear implements PaymentStretegy  {
    public function pay(){
        echo 'Payment from Payonear';
    }
}

// Step 3: Create the Context Class
class Checkout {
    private $storePayment;

    // Set the payment strategy at runtime
    public function setPayment(PaymentStretegy $paymentMethod) {
        $this->storePayment = $paymentMethod;
    }

    // Execute the payment method
    public function getPayment() {
        return $this->storePayment->pay();
    }
}

// Step 4: Use Strategy Pattern

// Create a checkout instance
$checkout = new Checkout();

// Pay using Paypal
$paypal = new Paypal();
$checkout->setPayment($paypal);
$checkout->getPayment();  // Output: Payment from Paypal

echo "\n";

// Pay using Payonear
$payonear = new Payonear();
$checkout->setPayment($payonear);
$checkout->getPayment();  // Output: Payment from Payonear



