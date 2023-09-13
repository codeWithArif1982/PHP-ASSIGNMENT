<?php
/*
Task 5: Weather Report
Create a PHP script named weather_report.php that provides 
weather information based on temperature. Use a variable to store the temperature. 
Depending on the temperature range, display messages like "It's freezing!", 
"It's cool.", or "It's warm."
*/

/* USE THIS DATA TO CALCULATE WEATHER REPORT

SUMMER: 
VERY HOT: more than 34 celsius (more than 93 fahrenheit) 
HOT: from 27 to 34 celsius (from 80 to 93f) 
WARM: from 20 to 25 celsius (from 68 to 79) 
COLD: less than 20 celsius (less than 68)

 WINTER:
 Warm: more than 20 celsius (more than 68/70) 
 cool: from 12 to 20 celsius (from 54 to 70) 
 cold: less than 12 celsius (less than 54) 
 freezing: less than 7 celsius (less than 45) 

 SPRING: 
 VERY HOT: more than 30 celsius (86 f) 
 HOT: from 25 to 30 celsius (from 77 to 86) 
 WARM: from 18 to 25 celsius (from 64 to 77) 
 COLD: less than 18 celsius (less than 64) 

 FALL: 
 Hot: more than 26 celsius (79f) 
 Warm: from 17 to 26 celsius (from 63 to 79) 
 Cool: from 14 to 17 celsius (from 57 to 63) 
 Cold: less than 14 celsius (less than 57)

*/

$seasonName = readline("Is the Season name Summer, Winter, Spring ,Fall : ");
$temperature = readline("Enter Today's temperature : ");

if ($seasonName == "Summer") {
    if ($temperature < 20) {
        echo "Toady's weather is COLD";
    } elseif ($temperature >= 20 && $temperature <= 25) {
        echo "Toady's weather is WARM";
    } elseif ($temperature >= 27 && $temperature <= 34) {
        echo "Toady's weather is HOT";
    } else {
        echo "Toady's weather is VERY HOT";
    }
} elseif ($seasonName == "Winter") {
    if ($temperature < 7) {
        echo "Toady's weather is FREEZING";
    } elseif ($temperature >= 7 && $temperature <= 11) {
        echo "Toady's weather is COLD";
    } elseif ($temperature >= 12 && $temperature <= 20) {
        echo "Toady's weather is COOL";
    } else {
        echo "Toady's weather is WARM";
    }
} elseif ($seasonName == "Spring") {
    if ($temperature < 18) {
        echo "Toady's weather is COLD";
    } elseif ($temperature >= 18 && $temperature < 25) {
        echo "Toady's weather is WARM";
    } elseif ($temperature >= 25 && $temperature <= 30) {
        echo "Toady's weather is HOT";
    } else {
        echo "Toady's weather is VERY HOT";
    }
} else {
    if ($temperature < 14) {
        echo "Toady's weather is COLD";
    } elseif ($temperature >= 14 && $temperature < 17) {
        echo "Toady's weather is COOL";
    } elseif ($temperature >= 17 && $temperature <= 26) {
        echo "Toady's weather is WARM";
    } else {
        echo "Toady's weather is HOT";
    }
}
