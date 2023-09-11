<?php
/*
Task 4: Even or Odd Checker
Build a PHP program called even_odd_checker.php 
that checks whether a given number is even or odd. 
Provide an input field where the user can enter a number.
Display a message indicating whether the number is even or odd.
*/

$number = (float)readline("Enter a value : ");
$remainder = $number%2;

if($remainder == 0 && $number > 0){
    echo "$number is  Positive even number";
}
else if($remainder == 0 && $number < 0){
    echo "$number is negative even number";
}
else if($remainder == 1 && $number > 0){
    echo "$number positive is odd number";
}
else echo"$number is negative odd number";
?>