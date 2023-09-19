<?php

/*
Task 4: Fibonacci Series printing using a Function
Write a PHP function to print the first 15 numbers in the Fibonacci series. 
You should take this 15 as an argument of a function and use a for loop to generate these numbers 
and print them by calling the function.
*/

function printFibonacci($n)
{
    $a = 0; // Initialize the first Fibonacci number
    $b = 1; // Initialize the second Fibonacci number

    echo "First $n Fibonacci numbers: ";

    for ($i = 1; $i <= $n; $i++) {
        echo $a . " ";

        // Calculate the next Fibonacci number
        $next = $a + $b;

        // Update $a and $b for the next iteration
        $a = $b;
        $b = $next;
    }
}

// Call the function to print the first 15 Fibonacci numbers
printFibonacci(15);
