<?php
/*Write a PHP program to find the larger value from two positive integer 
values that is in the range 20..30 inclusive 
or return 0 if neither is in that range.*/
function find($n1, $n2) {
    if (($n1 >= 20 && $n1 <= 30) || ($n2 >= 20 && $n2 <= 30)) {
        return max($n1, $n2);
    } else {
        return 0;
    }
}

// Test case
$n1= 60;
$n2 = 22;

$bigger = find($n1, $n2);
if ($bigger === 0) {
    echo "الرقم غير موجود بالفترة  20..30 .<br>";
} else {
    echo "القيمة الاعلى في هذه الفترة  20..30  $n1 , $n2 is: $bigger<br>";
    echo '<pre>';

}
