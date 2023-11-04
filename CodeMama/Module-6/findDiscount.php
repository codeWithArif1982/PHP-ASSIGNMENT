<?php

/*
------Find Discount
---------Problem Statement
Write a program to create a function that takes two arguments: 
the original price and the discount percentage as integers and returns the final price after the discount.
---------Input
The input consists of two integers: the original price and the discount.
---------Output
The output will print the final price after discount which will be a float number.

Constraints
0 ≤ |S| ≤ 10000
Example:
Enter numberss
Input:
50 20
Output:
Price: 40.00
Notes:
Your answer should be rounded to two decimal places.

*/
function calculateFinalPrice($originalPrice, $discount)
{
    if ($discount < 0 || $discount > 100) {
        return "Invalid discount percentage. It should be between 0 and 100.";
    }

    $discountAmount = $originalPrice * $discount / 100;
    $finalPrice = $originalPrice - $discountAmount;

    return number_format($finalPrice, 2);
}

// Get input from the user
$input = readline("Enter the original price and discount percentage (e.g., '50 20'): ");
list($originalPrice, $discount) = explode(' ', $input);

// Calculate and print the final price
$finalPrice = calculateFinalPrice($originalPrice, $discount);
echo "The final price after a {$discount}% discount is: $finalPrice\n";
