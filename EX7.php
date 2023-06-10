
<?php
//Write a PHP program to count the number of occurrences of any digit in a string.
//تعداد تكرار العدد في السلسلة
function Occurrences($string) {
    preg_match_all("/\d/", $string, $matches);
    //regular expression /\d/ to match all the digits in the string
    return count($matches[0]);
}

// Test case
$string = "123456789";

$X = Occurrences($string);
echo "The number of digit occurrences in the string '$string' is: $X,<br>";

