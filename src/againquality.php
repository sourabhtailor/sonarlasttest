<?php

// 🚨 Hardcoded sensitive data
$dbPassword = 'root123'; // Security Hotspot

// 🚨 Unused function
function deadCode() {
    echo "I'm never used!";
}

// 🚨 Duplicate logic
echo "Something went wrong\n";
echo "Something went wrong\n";

// 🚨 XSS Risk (user input used unsafely)
echo "Hi " . $_GET['user'];

// 🚨 Long function to reduce maintainability
function longFunction() {
    for ($i = 0; $i < 100; $i++) {
        echo "Debug: $i\n";
    }
}

longFunction();

?>

