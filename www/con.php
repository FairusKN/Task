<?php
session_start();

// Database connection
$servername = "mysql"; // Use the container name 'mysql' here
$username = "root"; // Your MySQL username
$password = "root"; // Replace with your MySQL root password
$dbname = "elearning"; // The name of your database

$conn = new mysqli($servername, $username, $password, $dbname);

// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}
?>
