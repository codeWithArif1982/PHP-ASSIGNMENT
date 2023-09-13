<?php
/*
Task 2: Temperature Converter
Design a PHP program called temperature_converter.php that converts 
temperatures between Celsius and Fahrenheit. Provide a form where 
the user can input a temperature value and select the conversion 
direction (Celsius to Fahrenheit or vice versa).
 Display the converted temperature.
*/

$temperature = readline("Enter a temperature : ");

function celsiusToFahrenheit($temperature)
{
    return ($temperature * 1.8) + 32;
}

function fahrenheitToCelsius($temperature)
{
    return (($temperature - 32) * 5) / 9;
}

$celsius = celsiusToFahrenheit($temperature);
$fahrenheit = floor(fahrenheitToCelsius($temperature));

printf("$temperature degree Celsius is equal to $celsius degree Fahrenheit ");
printf("$temperature degree Fahrenheit is equal to $fahrenheit degree Celsius ");
