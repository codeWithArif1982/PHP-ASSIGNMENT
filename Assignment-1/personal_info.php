<?php
/*
Task 1: Personal Information Page Create a PHP file named personal_info.php 
that displays your personal information using variables and the echo statement. 
Include your name, age, country, and a brief introduction.
*/

$name = "Arif";
$age = 42;
$country = "USA";
$introduction = "I have a passion on development, so now a days I am focusing on to learn Laravel framework";


echo "My name is : ".$name ."<br>";
echo "My Age is : ". $age ."<br>";
echo "I live in : ".$country ."<br>";
echo "About myself : ".$introduction;

?>