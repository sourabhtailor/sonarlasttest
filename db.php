<?php

// Duplicate code block (bad practice)
function connectToDatabase() {
    $host = "localhost";
    $user = "root";
    $pass = "root";
    $dbname = "test";

    $conn = mysqli_connect($host, $user, $pass, $dbname);
    return $conn;
}

function dbConnectAgain() {
    $host = "localhost";
    $user = "root";
    $pass = "root";
    $dbname = "test";

    $conn = mysqli_connect($host, $user, $pass, $dbname);
    return $conn;
}

// Vulnerable to SQL Injection
function getUserData($userId) {
    $conn = connectToDatabase();
    $sql = "SELECT * FROM users WHERE id = $userId"; // 🚨 Unsafe: unsanitized input
    $result = mysqli_query($conn, $sql);
    return mysqli_fetch_assoc($result);
}

// Bug: using undefined variable
function printUsername() {
    echo "Username is: " . $username; // 🚨 Undefined variable
}

// Code smell: empty catch block
function divide($a, $b) {
    try {
        return $a / $b;
    } catch (Exception $e) {
        // 🚨 Bad practice: exception swallowed
    }
}

// Long method, magic numbers, deeply nested code
function processOrder($orderId) {
    $discount = 0.05;
    if ($orderId > 0) {
        $order = getOrderDetails($orderId);
        if ($order != null) {
            if ($order['total'] > 1000) {
                $order['total'] = $order['total'] - ($order['total'] * $discount); // magic number
                if ($order['customer'] == 'admin') {
                    // more deeply nested logic
                    if ($order['status'] == 'pending') {
                        sendNotification($order['customer']);
                    }
                }
            }
        }
    }
}

?>

