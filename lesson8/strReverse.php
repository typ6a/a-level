<?php


function stringReverse($string) {
    $arr = str_split($string);
    $arrReverse = array_reverse($arr);
    return $reverse = trim(implode($arrReverse));
} 

function inputString() {
    $handle = fopen ("php://stdin","r");
    echo "enter a string:\n";
    $string = fgets ($handle);
    return trim($string);
}

$str = inputString();

print_r(stringReverse($str));