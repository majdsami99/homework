<?php
//Write a PHP program to return the sum of digits of an integer number.

function calculateDigitSum($number) {
    $sum = 0;
    $number = abs($number); // Convert negative numbers to positive

    // Convert the number to a string
    $numberString = (string)$number;

    // Iterate through each character (digit) in the string and sum them up
    for ($i = 0; $i < strlen($numberString); $i++) {
        $sum += (int)$numberString[$i];
    }

    return $sum;
}

// Test case
$number = 12345;

$digitSum = calculateDigitSum($number);
echo "The sum of digits in the number $number is: $digitSum\n";
?>
