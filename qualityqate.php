<?php

// Hardcoded credentials (security issue)
$username = "admin";
$password = "123456";

// Unused function (code smell)
function unusedFunction() {
    echo "This function is never used.";
}

// Duplicate code (code smell)
echo "Starting process...\n";
echo "Starting process...\n";

// No input validation (bug/security issue)
function greet($name) {
    echo "Hello " . $_GET['name']; // potential XSS
}

greet("World");

// Too many lines in one function (maintainability issue)
function largeFunction() {
    for ($i = 0; $i < 100; $i++) {
        echo "Line $i\n";
    }
}

largeFunction();

?>

