<?php

// ❌ Wrong: This class does two things (violates SRP)
class User
{
    public $name;
    public $email;

    public function __construct($name, $email)
    {
        $this->name = $name;
        $this->email = $email;
    }

    public function sendEmail()
    {
        echo "Sending email to " . $this->email; // ❌ Should be in a separate class
    }
}

$user = new User('Risad', 'info@gmail.com');
$user->sendEmail(); // ❌ Mixing user info and email logic

// ✅ Correct: Separate classes for different tasks
class SRPUser
{
    public $name;
    public $email;

    public function __construct($name, $email)
    {
        $this->name = $name;
        $this->email = $email;
    }
}

// Separate class for sending emails
class EmailService
{
    public function send(SRPUser $user, $message)
    {
        echo "$message " . $user->email;
    }
}

// Usage
$user = new SRPUser('Risad', 'info@gmail.com');
$emailService = new EmailService();
$emailService->send($user, 'Email sent to ');

// ✅ Why is this better?
// - User class only manages user info.
// - Email logic is separate, making it easier to change or extend.
// - Code is cleaner, easier to read, and maintainable.
