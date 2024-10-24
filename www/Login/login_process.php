<?php
include('../con.php'); // Include the database connection

// Get username and password from the form
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $username = $_POST['username'];
    $password = $_POST['password']; // This will be used directly

    // Prepare and bind
    $stmt = $conn->prepare("SELECT password FROM users WHERE username = ?");
    $stmt->bind_param("s", $username);
    $stmt->execute();
    $stmt->store_result();

    // Check if user exists
    if ($stmt->num_rows > 0) {
        // Fetch the user's password (without hashing)
        $stmt->bind_result($stored_password);
        $stmt->fetch();

        // Directly compare the password (not secure)
        if ($password === $stored_password) {
            // Password is correct, set session variables
            $_SESSION['username'] = $username;
            header("Location: ../main/welcome.php"); // Redirect to welcome page
            exit();
        } else {
            echo "Invalid password.";
        }
    } else {
        echo "No user found with that username.";
    }

    $stmt->close();
}

$conn->close();
?>
