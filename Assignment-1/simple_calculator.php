<?php
/*
Task 7: Simple Calculator
Build a PHP calculator named simple_calculator.php 
that performs basic arithmetic operations.
Provide input fields for two numbers and a dropdown to select the operation 
(addition, subtraction, multiplication, division). 
Display the result of the chosen operation.
*/

$firstNumber = (float)readline("Enter a value : ");
$secondNumber = (float)readline("Enter a value : ");

$addition = $firstNumber + $secondNumber;
$subtraction = $firstNumber - $secondNumber;
$multiplication = $firstNumber * $secondNumber;
$division = $firstNumber / $secondNumber;
$modulation = $firstNumber % $secondNumber;

echo "Addition of the two number is : $addition" . "<br>";
echo "Subtraction of the two number is : $subtraction" . "<br>";
echo "Multiplication of the two number is : $multiplication" . "<br>";
echo "Division of the two number is : $division" . "<br>";
echo "Modulation of the two number is : $modulation";
