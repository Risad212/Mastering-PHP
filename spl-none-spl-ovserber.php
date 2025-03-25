<?php

// Definition:
// The SPL Observer Pattern provides a built-in interface for implementing the Observer pattern in PHP,
// reducing the need for custom subject and observer interfaces, making the code cleaner and more maintainable.

// ---------------- Non-SPL Observer Pattern ----------------

// Subject Interface
interface Subject {
    public function attach(Observer $observer);
    public function detach(Observer $observer);
    public function notify();
}

// Observer Interface
interface Observer {
    public function update(Subject $subject);
}

// Concrete Subject
class News implements Subject {
    private array $observers = [];

    public function attach(Observer $observer) {
        $this->observers[] = $observer;
    }

    public function detach(Observer $observer) {
        $this->observers = array_filter($this->observers, fn($obs) => $obs !== $observer);
    }

    public function notify() {
        foreach ($this->observers as $observer) {
            $observer->update($this);
        }
    }
}

// Concrete Observer
class User implements Observer {
    public function update(Subject $subject) {
        echo "Message Received (Non-SPL)\n";
    }
}

// Example Usage
$news = new News();
$user1 = new User();
$user2 = new User();

$news->attach($user1);
$news->attach($user2);
$news->notify();


// ---------------- SPL Observer Pattern ----------------

class NewsSPL implements SplSubject {
    private array $observers = [];

    public function attach(SplObserver $observer): void {
        $this->observers[] = $observer;
    }

    public function detach(SplObserver $observer): void {
        $this->observers = array_filter($this->observers, fn($obs) => $obs !== $observer);
    }

    public function notify(): void {
        foreach ($this->observers as $observer) {
            $observer->update($this);
        }
    }
}

class UserSPL implements SplObserver {
    public function update(SplSubject $subject): void {
        echo "Message Received (SPL)\n";
    }
}

// Example Usage
$newsSPL = new NewsSPL();
$userSPL1 = new UserSPL();
$userSPL2 = new UserSPL();

$newsSPL->attach($userSPL1);
$newsSPL->attach($userSPL2);
$newsSPL->notify();



