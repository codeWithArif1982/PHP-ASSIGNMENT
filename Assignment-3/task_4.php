<?php 
/*
Task 4: Multidimensional Array
Create a multidimensional array called $studentGrades to store the grades of three students. 
Each student has grades for three subjects: Math, English, and Science. Write a PHP function which takes "$studentGrades" as an argument to calculate and print the average grade for each student.
*/

// Create a multidimensional array to store student grades
$studentGrades = array(
    "Student1" => array("Math" => 85, "English" => 92, "Science" => 78),
    "Student2" => array("Math" => 88, "English" => 95, "Science" => 90),
    "Student3" => array("Math" => 75, "English" => 80, "Science" => 85)
);

function calculateAverageGrades($gradesArray) {
    foreach ($gradesArray as $student => $grades) {
        // Calculate the average grade for each student
        $averageGrade = array_sum($grades) / count($grades);
        
        // Print the average grade for the current student
        echo "$student's Average Grade: $averageGrade\n";
    }
}

// Call the function with the $studentGrades array
calculateAverageGrades($studentGrades);
