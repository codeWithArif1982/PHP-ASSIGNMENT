<?php
/*
Task 5: Weather Report
Create a PHP script named weather_report.php that provides 
weather information based on temperature. Use a variable to store the temperature. 
Depending on the temperature range, display messages like "It's freezing!", 
"It's cool.", or "It's warm."
*/

$temperature = readline("Enter Today's temperature : ");

if ($temperature == !NULL) {
    if ($temperature < 20) {
        echo "Today's weather is COLD";
    } elseif ($temperature >= 20 && $temperature <= 25) {
        echo "Today's weather is WARM";
    } elseif ($temperature >= 26 && $temperature <= 34) {
        echo "Today's weather is HOT";
    } else {
        echo "Today's weather is VERY HOT";
    }
} else echo "Enter the temperature to check the weather";
