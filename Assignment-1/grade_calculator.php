<?php
/*
Task 3: Grade Calculator
Develop a PHP script named grade_calculator.php 
that computes the average of three test scores and 
determines the corresponding letter grade. 
Create a form where the user can input three test scores. 
Calculate the average and display it along with the corresponding grade (A, B, C, D, F).
*/

$mark = readline("Enter your mark : ");

if ($mark > 100) {
    echo "Your mark can't be more than 100";
} else {
    switch ($mark) {
        case ($mark >= 90):
            echo "Your grade is A";
            break;
        case ($mark >= 70 && $mark <= 89):
            echo "Your grade is B";
            break;
        case ($mark >= 50 && $mark <= 69):
            echo "Your grade is C";
            break;
        case ($mark >= 33 && $mark <= 49):
            echo "Your grade is D";
            break;
        default:
            echo "Your grade is F";
    }
}
