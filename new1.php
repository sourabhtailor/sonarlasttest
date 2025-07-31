<?php
// ❌ SQL injection (Vulnerability)
function deleteUser($id) {
    $conn = new mysqli("localhost", "root", "", "app");
    $conn->query("DELETE FROM users WHERE id = " . $_GET['id']);
}

// ❌ eval usage (Security Hotspot)
function dangerousEval($code) {
    eval($code);
}

// ❌ Undefined variable (Bug)
function printEmail() {
    echo $email;
}

// ❌ Empty catch (Code Smell)
function unsafeDivide($a, $b) {
    try {
        return $a / $b;
    } catch (Exception $e) {
        // Ignored
    }
}
?>
