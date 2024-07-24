<?php

require_once "../config.php";
require_once "../utility/utility.php";

// Create database if not exists
$sql = "CREATE DATABASE IF NOT EXISTS $DATABASE";
if ($conn->query($sql) === TRUE) {
    $response[] = "Database created successfully or already exists\n";
} else {
    die(json_encode(["Error creating database: " . $conn->error]));
}

// Use the database
$conn->select_db($DATABASE);

// SQL script for creating tables and inserting dummy data
$sql = "
-- Create users table
CREATE TABLE IF NOT EXISTS users (
    id INT AUTO_INCREMENT PRIMARY KEY,
    username VARCHAR(50) NOT NULL UNIQUE,
    password VARCHAR(255) NOT NULL,
    email VARCHAR(50) NOT NULL UNIQUE,
    created_at TIMESTAMP DEFAULT CURRENT_TIMESTAMP
);

-- Create books table
CREATE TABLE IF NOT EXISTS books (
    id INT AUTO_INCREMENT PRIMARY KEY,
    title VARCHAR(100) NOT NULL,
    subtitle VARCHAR(255) NOT NULL,
    image VARCHAR(255) NOT NULL,
    price DECIMAL(10, 2) NOT NULL,
    created_at TIMESTAMP DEFAULT CURRENT_TIMESTAMP
);

-- Create articles table
CREATE TABLE IF NOT EXISTS articles (
    id INT AUTO_INCREMENT PRIMARY KEY,
    title VARCHAR(100) NOT NULL,
    content TEXT NOT NULL,
    image VARCHAR(255),
    created_at TIMESTAMP DEFAULT CURRENT_TIMESTAMP
);";

// Execute multi query
if ($conn->multi_query($sql) === TRUE) {
   $response[] = "Tables created successfully or already exists\n";
    do {
        if ($result = $conn->store_result()) {
            while ($row = $result->fetch_row()) {
                printf(json_encode(["%s\n", $row[0]]));
            }
            $result->free();
        }
    } while ($conn->next_result());
} else {
    $response = "Error creating tables or inserting data: " . $conn->error;
}

echo json_encode(["messages" => $messages]);
?>
