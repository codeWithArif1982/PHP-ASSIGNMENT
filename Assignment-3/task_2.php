<?php
/*
Task 2: Array Manipulation
Create an array called $numbers containing the numbers 1 to 10.
Write a PHP function which takes the "$numbers" array as an argument to remove the even numbers from the array and print the resulting array.
*/

// Create an array called $numbers containing the numbers 1 to 10
$numbers = range(1, 10);

function removeEvenNumbers($arr)
{
    // Use array_filter to remove even numbers from the array
    $filteredArray = array_filter($arr, function ($number) {
        return $number % 2 != 0;
    });

    // Print the resulting array
    print_r($filteredArray);
}

// Call the function with the $numbers array
removeEvenNumbers($numbers);
