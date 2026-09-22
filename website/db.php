<?php

$host = "localhost";
$username = "your_database_user";
$password = "your_database_password";
$database = "portfolio";

$conn = new mysqli($host, $username, $password, $database);

if ($conn->connect_error) {
    die("Database connection failed: " . $conn->connect_error);
}

?>