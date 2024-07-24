<?php
# Configuration for server
error_reporting(E_ALL);
ini_set("display_errors", 1);

# Databasec onfigurations
$HOST="localhost";
$USER="ankit";
$PASSWORD="ankitsharma";
$DATABASE="angkulam";

# Log
$LOG="log/log.txt";
// Create connection
$conn = new mysqli($HOST, $USER, $PASSWORD, $DATABASE);

// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}
