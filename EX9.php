<?php
//Write a PHP program to reverse any string. (Don't use "strrev" function).

function reverse($string) {
    // فحص طول الكلمة لوضعها في ارري بالترتيب العكسي لموقع الحرف
    $length = strlen($string);
    $reversed = '';

    while ($length > 0) {
        $reversed .= $string[--$length];
    }
    //$reversedString variable by accessing the character at the current index --$length
    return $reversed;
}

$name = "my name is majd sami abo asad a 23 years old ";

$reversed = reverse($name);
echo "The reversed string of '$name' <br> is:<br> $reversed<br>";

echo '<pre>';