<?php

$inputFilePath  = 'input.txt';
$outputFilePath = 'output.txt';

$toupper = function($input) {
    return strtoupper($input);
};

$inputFile = fopen($inputFilePath, 'r');
$outputFile = fopen($outputFilePath, 'r+');
while (!feof($inputFile)) {
    $string = fgets ($inputFile);
    $toupper = function($input) {
        return strtoupper($input);
    };
    fputs($outputFile, $toupper($string));
}

fclose($inputFile);
fclose($outputFile);
