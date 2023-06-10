<?php
/*Write a PHP program to check whether the first two characters and last two 
characters of a given string are same.*/
function Test ($string) {
    
   
        $firstTwo = substr($string, 0, 2);
        $lastTwo = substr($string, -2);
        
        if ($firstTwo === $lastTwo) {
            return true;
        }
    
    
    return false;
}

// Test cases
$text = ["arial", "majd", "PHPH","majd&djam"];
foreach ($text as $string) {
    if (Test($string)) {
        echo "$string: First two characters and last two characters match.<br>";
    } else {
        echo "$string: First two characters and last two characters do not match.<br>";
        echo '<pre>';
    }
}
