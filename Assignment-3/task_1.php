<?php 
/*
Task 1: String Manipulation
Create a string variable called $text with the value "The quick brown fox jumps over the lazy dog.". Write a PHP function which takes "$text" as an argument to:
Convert the string to all lowercase.
Replace "brown" with "red" in the string.
Print the modified text.
*/


$text = "The quick brown fox jumps over the lazy dog.";

function modifyText($inputText) {
    // Convert the string to all lowercase
    $lowercaseText = strtolower($inputText);
    
    // Replace "brown" with "red" in the string
    $modifiedText = str_replace("brown", "red", $lowercaseText);
    
    // Print the modified text
    echo $modifiedText;
}

// Call the function with the provided text
modifyText($text);
