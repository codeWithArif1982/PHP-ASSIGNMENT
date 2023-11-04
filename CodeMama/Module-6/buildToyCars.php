<?php

/*
----Build Toy Cars
------Problem Statement
Suppose, you work in a toy car workshop, and your job is to build toy cars from a collection of parts. 
Each toy car needs 4 wheels, 1 car body, and 2 figures of people to be placed inside. 
Write a program which will calculate how many complete toy cars can be made, given the total number of wheels, car bodies and figures available.
-------Input
The input consists of three integers: number of wheels, car bodies, figures.
-------Output
The output will print the number of cars.

Constraints
0 ≤ |S| ≤ 10000
Example:
Enter numbers
Input:
43 15 87
Output:
10
Notes:
None
*/
function calculateCompleteCars($wheels, $bodies, $figures)
{
    // Calculate the maximum number of cars that can be built based on available parts
    $maxCarsByWheels = floor($wheels / 4);
    $maxCarsByBodies = $bodies;
    $maxCarsByFigures = floor($figures / 2);

    // Return the minimum of the above three values
    return min($maxCarsByWheels, $maxCarsByBodies, $maxCarsByFigures);
}

// Get input from the user
$input = readline("Enter the number of wheels, car bodies, and figures (e.g., '43 15 87'): ");
list($wheels, $bodies, $figures) = explode(' ', $input);

// Calculate and print the number of complete cars
$completeCars = calculateCompleteCars($wheels, $bodies, $figures);
echo "The number of complete cars that can be built is: $completeCars\n";
