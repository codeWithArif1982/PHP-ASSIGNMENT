<?php
/*
Task 3: Array Sorting  
Create an array called $grades with the following values: 85, 92, 78, 88, 95.
Write a PHP function which takes "$grades" as an argument to sort the array in descending order and print the sorted grades as array.
*/


// Create an array called $grades with the given values
$grades = array(85, 92, 78, 88, 95);

function sortGradesDescending($gradesArray)
{
    // Sort the array in descending order
    arsort($gradesArray);
    // Print the sorted grades as an array
    print_r($gradesArray);
}
// Call the function with the $grades array
sortGradesDescending($grades);
