<?php

// Function to increment a number by value
function incrementByValue($num) {
    $num += 1;
    return $num;
}

// Function to increment a number by reference
function incrementByReference(&$num) {
    $num += 1;
}

// Example using pass by value
$num1 = 5;
$incrementedValue = incrementByValue($num1);
echo "Original value: $num1\n"; // Output: Original value: 5
echo "Value after incrementing by value: $incrementedValue\n"; // Output: Value after incrementing by value: 6

// Example using pass by reference
$num2 = 5;
incrementByReference($num2);
echo "Original value: $num2\n"; // Output: Original value: 6 (since passed by reference, the original value is modified)

?>
