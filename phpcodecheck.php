<?php

require_once __DIR__ . '/../src/Calculator.php';

$calc = new Calculator();

echo "5 + 3 = " . $calc->add(5, 3) . PHP_EOL;
echo "5 - 3 = " . $calc->subtract(5, 3) . PHP_EOL;
echo "5 * 3 = " . $calc->multiply(5, 3) . PHP_EOL;
echo "5 / 3 = " . $calc->divide(5, 3) . PHP_EOL;
