<?php
/*
Task 1: Looping with Increment using a Function
Write a PHP function that uses a for loop to print all even numbers from 1 to 20,
but with a step of 2. In other words, you should print 2, 4, 6, 8, 10, 12, 14, 16, 18, 20. 
The function should take the arguments like start as 1, end as 20 and step as 2. 
You must call the function to print. Also do the same using while loop and do-while loop also
*/

//Using for loop
function printEvenNumbersForLoop($start, $end, $step)
{
    echo "Using for loop : ";
    for ($i = $start; $i <= $end; $i += $step) {
        echo $i . " ";
    }
}


//Using while loop
function printEvenNumbersWhileLoop($start, $end, $step)
{
    echo "Using while loop : ";
    $i = $start;
    while ($i <= $end) {
        echo $i . " ";
        $i += $step;
    }
}
//Using do-while loop
function printEvenNumbersDoWhileLoop($start, $end, $step)
{
    echo "Using do-while loop : ";
    $i = $start;
    do {
        echo $i . " ";
        $i += $step;
    } while ($i <= $end);
}

printEvenNumbersForLoop(2, 20, 2) . PHP_EOL;
printEvenNumbersWhileLoop(2, 20, 2) . PHP_EOL;
printEvenNumbersDoWhileLoop(2, 20, 2) . PHP_EOL;
