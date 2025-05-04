<?php

// Include the Composer autoloader if you're using Composer
require_once 'vendor/autoload.php';  // This is if you're using Composer

// Load the environment variables from the .env file
$dotenv = Dotenv\Dotenv::createImmutable(__DIR__);
$dotenv->load();

// Get the database credentials from environment variables
$host = $_ENV['DB_HOST'];
$user = $_ENV['DB_USER'];
$pass = $_ENV['DB_PASS'];
$name = $_ENV['DB_NAME'];

// Create connection
$conn = new mysqli($host, $user, $pass, $name);

if ($conn->connect_error) {
    die("Connection Failed: " . $conn->connect_error);
}

echo "Connected!";
?>
