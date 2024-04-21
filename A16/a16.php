<?php

// Function to calculate factorial using recursion
function factorial($n) {
    if ($n == 0 || $n == 1) {
        return 1;
    } else {
        return $n * factorial($n - 1);
    }
}

// Test the function
$number = 5;
$factorial = factorial($number);
echo "The factorial of $number is: $factorial";

?>
