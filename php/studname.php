<?php
// Step 1: Create an array of student names
$students = ["Akshay", "Princy", "Zera", "Nikhil", "Kannaki"];

// Step 2: Display the original array
echo "<h3>Student List:</h3>";
echo "<pre>";
print_r($students);
echo "</pre>";

// Step 3: Sort in ascending order using asort()
asort($students);
echo "<h3>Asending Order:</h3>";
echo "<pre>";
print_r($students);
echo "</pre>";

// Step 4: Sort in descending order using arsort()
arsort($students);
echo "<h3>Descending Order:</h3>";
echo "<pre>";
print_r($students);
echo "</pre>";
?>