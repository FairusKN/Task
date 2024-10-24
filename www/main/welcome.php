<?php
session_start();
if (!isset($_SESSION['username'])) {
    header("Location: login.php"); // Redirect to login if session not set
    exit();
}
echo "Welcome, " . htmlspecialchars($_SESSION['username']) . "!";
?>
