<?php

/**
 * Observer Pattern
 *
 * Definition:
 * The Observer Pattern is a behavioral design pattern in which an object (the Subject) maintains a list of dependents (Observers) and notifies them of any state changes, usually by calling one of their methods.
 *
 * Benefits:
 * - **Loose Coupling:** The subject and observers are loosely coupled, making the system more flexible and easier to maintain.
 * - **Scalability:** New observers can be added without modifying the subject.
 * - **Better Code Organization:** Separates concerns by allowing the subject to focus on state changes and observers to focus on handling updates.
 */

/**
 * Observer Interface
 *
 * Defines a contract for observers that need to receive updates.
 */
interface Observer {
    /**
     * Method to be called when the subject sends an update.
     *
     * @param string $message The message to be received by the observer.
     */
    public function update(string $message);
}

/**
 * Concrete Observer - User
 *
 * Implements the Observer interface to receive updates from the subject.
 */
class User implements Observer {
    /**
     * Receives an update message from the subject.
     *
     * @param string $message The message sent by the subject.
     */
    public function update(string $message) {
        echo "Received: $message\n";
    }
}

/**
 * Subject - NewsChannel
 *
 * Manages a list of observers and notifies them of any updates.
 */
class NewsChannel {
    /**
     * @var array List of observers subscribed to updates.
     */
    private array $observers = [];

    /**
     * Attach an observer to the channel.
     *
     * @param Observer $observer The observer to attach.
     */
    public function attach(Observer $observer) {
        $this->observers[] = $observer;
    }

    /**
     * Notify all observers with a message.
     *
     * @param string $message The message to send to observers.
     */
    public function notify(string $message) {
        foreach ($this->observers as $observer) {
            $observer->update($message);
        }
    }
}

// Creating the subject (News Channel)
$channel = new NewsChannel();

// Creating observers (Users)
$user1 = new User();
$user2 = new User();

// Attaching observers to the news channel
$channel->attach($user1);
$channel->attach($user2);

// Sending a notification to all observers
$channel->notify('Hello, World!');



