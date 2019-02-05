<?php

function transformNumber($number) {
    if (($number > 15) || ($number < 3)) {
        return $number;
    }
    else {
        return 3;
    }
}

function inputNumber() {
    $handle = fopen ("php://stdin","r");
    echo "input a number:\n";
    $number = rtrim(fgets ($handle));
    var_dump($number);
    return $number;
}

$number = inputNumber();
echo (transformNumber($number));