<?php

function ThreeOrSeven($number) {
    //يجب فحص الارقام من خلال باقي القسمة على العددين  وان ايكون 
    //احدى الطرفين صحيح حتى يتحقق الشرط سواء 7 او 3 
    if ($number % 3 === 0 || $number % 7 === 0) {
        return true;
    }
    
    return false;
}

// Test cases
$numbers = [3,7,8,12,14,16,21,24];
foreach ($numbers as $number) {
    if (ThreeOrSeven($number)) {
        echo "$number: is a multiple of 3 or 7.<br>";
    } else {
        echo "$number: is not a multiple of 3 or 7.<br>";
    }
}






