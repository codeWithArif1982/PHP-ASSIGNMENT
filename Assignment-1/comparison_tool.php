<?php
/*
Task 6: Comparison Tool
Develop a PHP tool named comparison_tool.php that compares two numbers 
and displays the larger one using the ternary operator. 
Create a form where the user can input two numbers. 
Use the ternary operator to determine the larger number and display the result.
*/

$firstNumber = (float)readline("Enter first number : ");
$secondNumber = (float)readline("Enter second number : ");

$largeNumber = ($firstNumber > $secondNumber)? $firstNumber : $secondNumber;

echo "Larger number is : $largeNumber";
?>