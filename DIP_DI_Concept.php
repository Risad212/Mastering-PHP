<?php

// Dependency Inversion Principle (DIP) & Dependency Injection (DI)

// DIP: High-level modules should depend on abstractions, not concrete implementations, reducing coupling and increasing flexibility.

// DI: A technique to implement DIP by injecting dependencies from outside the class instead of creating them inside.

interface Database
{
    public function connect(): string;
}

class MySQLDatabase implements Database
{
    public function connect(): string
    {
        return "Connected to MySQL";
    }
}

class PostgreSQLDatabase implements Database
{
    public function connect(): string
    {
        return "Connected to PostgreSQL";
    }
}

class UserService
{
    private Database $database;

    // Constructor Injection (DI) - Injecting the dependency from outside
    public function __construct(Database $database)
    {
        $this->database = $database;
    }

    public function connectDatabase(): string
    {
        return $this->database->connect();
    }
}

// Injecting MySQLDatabase
$mysqlService = new UserService(new MySQLDatabase());
echo $mysqlService->connectDatabase() . PHP_EOL;  // Output: "Connected to MySQL"

// Injecting PostgreSQLDatabase
$postgresService = new UserService(new PostgreSQLDatabase());
echo $postgresService->connectDatabase() . PHP_EOL;  // Output: "Connected to PostgreSQL"


// Key Notes:


// 1. DIP is a principle, while DI is a technique to achieve it.

// 2. High-level modules (UserService) depend on abstractions (Database interface), not concrete implementations.

// 3. DI promotes flexibility by allowing different implementations (MySQL, PostgreSQL) to be injected without modifying the UserService class.

// 4. Dependencies should be passed from outside the class—they shouldn't be created inside.

// 5. a concreate class mean a class where can create object
