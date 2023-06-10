<?php
//Write a PHP program to check which number 
//nearest to the value 100 among two given integers.
function find($num1, $num2) {
    if (abs($num1 - 100 )=== abs($num2 - 100))
    {
     return 0;
    }
    $X = abs($num1 - 100);
    $Y = abs($num2 - 100);
   
    return ($X < $Y) ? $num1 : $num2;
     {

    }
    
}

// Test case
$num1 = 80;
$num2 = 120;

$nearestNumber = find($num1, $num2);
if ($nearestNumber === 0) {
    echo "The two numbers are equal.\n";}
    else {
echo "The number nearest to 100 among $num1  & $num2 is: $nearestNumber\n";
    }
echo '<pre>';

/* if ($num1 === $num2)
    {
     
     echo "number 1 and number 2 are same  = .$num1";
    }*/ //ضايلة مشكة فحص التساوي 
