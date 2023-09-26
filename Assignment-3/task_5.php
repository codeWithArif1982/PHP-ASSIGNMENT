<?php 
/*
Task 5: Password Generator
Create a PHP function called generatePassword($length) that generates a random password of the specified length. 
The password should include lowercase letters, uppercase letters, numbers, and special characters (!@#$%^&*()_+). 
Write a PHP program to generate a password with a length of 12 characters using this function and print the password.
*/


function generatePassword($length) {
    $lowercase = 'abcdefghijklmnopqrstuvwxyz';
    $uppercase = 'ABCDEFGHIJKLMNOPQRSTUVWXYZ';
    $numbers = '0123456789';
    $specialChars = '!@#$%^&*()_+';
    
    $allChars = $lowercase . $uppercase . $numbers . $specialChars;
    
    $password = '';
    
    for ($i = 0; $i < $length; $i++) {
        $randomIndex = mt_rand(0, strlen($allChars) - 1);
        $password .= $allChars[$randomIndex];
    }
    
    return $password;
}

// Generate a 12-character password
$generatedPassword = generatePassword(12);

// Print the generated password
echo "Generated Password: " . $generatedPassword;
