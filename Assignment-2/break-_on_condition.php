<?php
/*
Task 3: Break on Condition
Write a PHP program that calculates and prints the first 10 Fibonacci numbers.
 But, if a Fibonacci number is greater than 100, 
 break out of the loop using the break statement.
*/

$count = 10;
$a = 0;
$b = 1;

echo "First 10 Fibonacci numbers: ";

for ($i = 0; $i < $count; $i++) {
    if ($i < 2) {
        $fibonacci = $i;
    } else {
        $fibonacci = $a + $b;
        $a = $b;
        $b = $fibonacci;
    }

    // Print the current Fibonacci number
    echo $fibonacci . " ";

    // Check if the Fibonacci number is greater than 100
    if ($fibonacci > 100) {
        // Break out of the loop
        break;
    }
}
