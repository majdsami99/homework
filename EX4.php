<?php
//Write a PHP program to check the largest number among three given numbers.

function findLargestNumber($num1, $num2, $num3) {
    return max($num1, $num2, $num3);
}

// Test case
$num1 = 50;
$num2 = 51;
$num3 = 60;

$largestNumber = findLargestNumber($num1, $num2, $num3);
echo "The largest number from the three nummbers  $num1, $num2, $num3 is:<br> $largestNumber<br>";
echo '<pre>';
