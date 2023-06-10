<?php
//Write a PHP program to check 
//if a given string starts with 'Go' or not. (Don't use "str_starts_with"

function BeginGo($string) {
    $Go = 'Go';
   
    //بدايةرح نفحص الكلمة مع طول القو 
    if (strlen($string) < 2) {
        return false;
    }
    
    for ($i = 0; $i < 2; $i++) {
        if ($string[$i] !== $Go[$i]) {
            return false;
        }
    }
    
    return true;
}

$strings = ["global", "Gopro", "Goal", "Good"]; //array  of sstring to test 
foreach ($strings as $string) {
    if (BeginGo($string)) {
        echo "$string: Starts with 'Go'.<br>";
    } else {
        echo "$string: Does not start with 'Go'.<br>";
    }
    echo '<pre>';
}

echo '<pre>';
