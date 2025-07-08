<?php
// Define a function to greet the user
function greet($name) {
    return "Hello, " . htmlspecialchars($name) . "!";
}

// Set a variable
$user = "World";

// Output HTML with PHP embedded
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8" />
    <title>Sample PHP</title>
</head>
<body>
    <h1><?php echo greet($user); ?></h1>
</body>
</html>

