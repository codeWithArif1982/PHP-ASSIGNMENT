<?php
/*
Task 2: Skip Multiples of 5
Create a PHP script that prints numbers from 1 to 50 using a for loop.
However, when the loop encounters a multiple of 5, 
it should skip that number using the continue statement and
continue to the next iteration.
*/

for ($i = 1; $i <= 50; $i++) {
    // Check if $i is a multiple of 5
    if ($i % 5 == 0) {
        // Skip this iteration and continue to the next number
        continue;
    }
    // Print the current number
    echo $i . " ";
}
