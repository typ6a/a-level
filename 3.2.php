<?php

$inputFilePath  = 'fizzBuzzData.txt';
$outputFilePath = 'fizzBuzzRes.txt';

function inputFizz() {
    $handle = fopen ("php://stdin","r");
    echo "enter fizz:\n";
    $fizz = fgets ($handle);
    return $fizz;
}

function inputBuzz() {
    $handle = fopen ("php://stdin","r");
    echo "enter buzz:\n";
    $buzz = fgets ($handle);
    return $buzz;
}

function inputNumber() {
    $handle = fopen ("php://stdin","r");
    echo "enter number:\n";
    $number = fgets ($handle);
    return $number;
}

function getFizzFromFile($file) {
    $handle = $file;
    $fizz = fgets ($handle);
    return $fizz;
}

function getBuzzFromFile($file) {
    $handle = $file;
    $buzz = fgets ($handle);
    return $buzz;
}

function getNumberFromFile($file) {
    $handle = $file;
    $number = fgets ($handle);
    return $number;
}

function output($fizz, $buzz, $number) {
    for ($i = 1; $i <= $number ; $i++) { 
    if (!($i % (int)$fizz) && !($i % (int)$buzz)) {
        echo "FB";
    }
    elseif (!($i % (int)$fizz)) {
        echo "F";
    }
    elseif (!($i % (int)$buzz)) {
        echo "B";
    }
    else {
        echo $i;
    }
    echo " ";
    }
}
function writeToFile($file, $fizz, $buzz, $number){
    for ($i = 1; $i <= $number ; $i++) { 
    if (!($i % (int)$fizz) && !($i % (int)$buzz)) {
        fputs($file, "FB");
    }
    elseif (!($i % (int)$fizz)) {
        fputs($file, "F");
    }
    elseif (!($i % (int)$buzz)) {
        fputs($file, "B");
    }
    else {
        fputs($file, $i);
    }
    fputs($file, ' ');
    }
}


if (file_exists($inputFilePath)) {
    $file = fopen($inputFilePath, 'r');
    $fizz = getFizzFromFile($file);
    $buzz = getBuzzFromFile($file);
    $number = getNumberFromFile($file);
    fclose($file);
    echo $fizz . $buzz . $number . "\n";
}
else {
    $fizz = inputFizz();
    $buzz = inputBuzz();
    $number = inputNumber();
}

if (file_exists($outputFilePath)){
    $file = fopen($outputFilePath, 'r+');
    writeToFile($file ,$fizz, $buzz, $number);
    fclose($file);
    echo 'file' . $outputFilePath . ' has been written' . "\n";
}
else {
    output($fizz, $buzz, $number);
}

echo "----------------\n";

