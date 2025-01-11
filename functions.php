<?php
// Function to sanitize user inputs
function sanitizeInput($input) {
    return htmlspecialchars(strip_tags(trim($input)));
}

// Example function to greet users
function greetUser($name) {
    return "Welcome, " . sanitizeInput($name) . "!";
}

// Add more reusable functions as needed
?>
